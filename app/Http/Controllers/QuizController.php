<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\QuizResult;
use App\Models\Lesson;
use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'lesson_id' => 'nullable|exists:lessons,id',
            'module_id' => 'required|exists:modules,id',
            'q1' => 'required|string',
            'q2' => 'required|string',
            'q3' => 'required|string',
        ]);

        $userId = Auth::id();
        $lessonId = $request->lesson_id;
        $moduleId = $request->module_id;

        // Define correct answers
        $correctAnswers = [
            'q1' => 'b', // Hacking yang dilakukan dengan izin untuk meningkatkan keamanan sistem
            'q2' => 'a', // Reconnaissance, Scanning, Exploitation
            'q3' => 'b'  // Mengidentifikasi dan memperbaiki kerentanan keamanan
        ];

        // Define explanations
        $explanations = [
            'q1' => [
                'correct' => 'Benar! Ethical hacking adalah praktik hacking yang dilakukan dengan izin dan bertujuan untuk meningkatkan keamanan sistem.',
                'wrong' => 'Salah. Ethical hacking adalah hacking yang dilakukan dengan izin untuk tujuan keamanan, bukan untuk merusak atau mencuri.'
            ],
            'q2' => [
                'correct' => 'Benar! Tahap-tahap utama penetration testing meliputi Reconnaissance (pengumpulan informasi), Scanning (pemindaian), dan Exploitation (eksploitasi).',
                'wrong' => 'Salah. Penetration testing memiliki beberapa tahap sistematis: Reconnaissance, Scanning, Exploitation, dan lain-lain.'
            ],
            'q3' => [
                'correct' => 'Benar! Tujuan utama ethical hacking adalah mengidentifikasi kerentanan keamanan untuk kemudian diperbaiki.',
                'wrong' => 'Salah. Ethical hacking bertujuan untuk mengidentifikasi dan memperbaiki kerentanan, bukan untuk aktivitas jahat.'
            ]
        ];

        // Calculate score
        $score = 0;
        $totalQuestions = 3;
        $feedback = [];

        for ($i = 1; $i <= $totalQuestions; $i++) {
            $questionKey = 'q' . $i;
            $userAnswer = $request->input($questionKey);
            $isCorrect = $userAnswer === $correctAnswers[$questionKey];
            
            if ($isCorrect) {
                $score++;
                $feedback[] = [
                    'question' => $i,
                    'correct' => true,
                    'explanation' => $explanations[$questionKey]['correct']
                ];
            } else {
                $feedback[] = [
                    'question' => $i,
                    'correct' => false,
                    'explanation' => $explanations[$questionKey]['wrong'],
                    'user_answer' => $userAnswer,
                    'correct_answer' => $correctAnswers[$questionKey]
                ];
            }
        }

        $percentage = round(($score / $totalQuestions) * 100);

        // Save quiz result
        $quizResult = QuizResult::create([
            'user_id' => $userId,
            'lesson_id' => $lessonId,
            'module_id' => $moduleId,
            'score' => $score,
            'total_questions' => $totalQuestions,
            'percentage' => $percentage,
            'answers' => json_encode($request->only(['q1', 'q2', 'q3'])),
            'feedback' => json_encode($feedback),
            'completed_at' => now(),
        ]);

        // Determine score message
        $scoreMessage = '';
        if ($percentage >= 80) {
            $scoreMessage = 'Excellent! Pemahaman Anda sangat baik';
        } elseif ($percentage >= 60) {
            $scoreMessage = 'Good! Pemahaman Anda cukup baik';
        } else {
            $scoreMessage = 'Perlu belajar lebih lanjut';
        }

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'score' => $score,
                'total_questions' => $totalQuestions,
                'percentage' => $percentage,
                'score_message' => $scoreMessage,
                'feedback' => $feedback,
            ]);
        }

        return redirect()->back()->with([
            'quiz_completed' => true,
            'quiz_score' => $score,
            'quiz_total' => $totalQuestions,
            'quiz_percentage' => $percentage,
            'quiz_message' => $scoreMessage,
        ]);
    }

    public function getResults(QuizResult $quiz)
    {
        // Ensure user can only see their own results
        if ($quiz->user_id !== Auth::id()) {
            abort(403);
        }

        return response()->json([
            'score' => $quiz->score,
            'total_questions' => $quiz->total_questions,
            'percentage' => $quiz->percentage,
            'feedback' => json_decode($quiz->feedback, true),
            'completed_at' => $quiz->completed_at->format('d M Y H:i'),
        ]);
    }
}