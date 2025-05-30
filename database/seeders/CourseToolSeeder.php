<?php
namespace Database\Seeders;

use App\Models\Course;
use App\Models\Tool;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CourseToolSeeder extends Seeder

    /**
     * Run the database seeds.
     */
    {
    public function run(): void
    {}
    }
        // Define courses with their associated tools
    //     $coursesWithTools = [
    //         [
    //             'name' => 'Introduction to Ethical Hacking',
    //             'description' => 'Memahami materi tentang cyber security',
    //             'instructor' => 'Dimas Kurniawan',
    //             'duration_hours' => 8,
    //             'tools' => ['Introduction to Ethical Hacking']
    //         ],
    //         [
    //             'name' => 'Footprinting and Reconnaissance',
    //             'description' => 'Belajar bagaimana mengumpulkan data target untuk merancang serangan yang terarah',
    //             'instructor' => 'Dimas Kurniawan',
    //             'duration_hours' => 8,
    //             'tools' => ['Shodan', 'TheHarvester', 'Recon-ng', 'OSINT Framework']
    //         ],
    //         [
    //             'name' => 'Scanning Networks',
    //             'description' => 'Teknik dan metode untuk scanning jaringan dan deteksi sistem',
    //             'instructor' => 'Dimas Kurniawan',
    //             'duration_hours' => 8,
    //             'tools' => ['Nmap', 'Wireshark', 'Metasploit', 'Nessus', 'OpenVAS']
    //         ],
    //         [
    //             'name' => 'Enumeration',
    //             'description' => 'Teknik dan alat untuk mengumpulkan informasi sistem dan jaringan',
    //             'instructor' => 'Dimas Kurniawan',
    //             'duration_hours' => 10,
    //             'tools' => ['Global Network Inventory', 'Advanced IP Scanner', 'SuperScan', 'Hyena', 'NetBIOS Enumerator', 'SoftPerfect Network Scanner', 'Nmap', 'Net Use', 'Target Machine', 'snmp_enum', 'Active Directory Explorer (ADExplorer)', 'Enumdlinux']
    //         ],
    //         // New courses added
    //         [
    //             'name' => 'Vulnerability Analysis',
    //             'description' => 'Identifikasi dan analisis kerentanan sistem',
    //             'instructor' => 'Dimas Kurniawan',
    //             'duration_hours' => 12,
    //             'tools' => ['Nessus', 'OpenVAS', 'GFI LanGuard', 'Nikto']
    //         ],
    //         [
    //             'name' => 'System Hacking',
    //             'description' => 'Teknik eksploitasi dan pengambilan akses sistem',
    //             'instructor' => 'Dimas Kurniawan',
    //             'duration_hours' => 15,
    //             'tools' => ['Responder', 'SAM Hashes', 'Rainbow Tables', 'LOphtCrack', 'VNC Session', 'Escalating Privileges', 'TheFatRat', 'Metasploit', 'Spytech SpyAgent', 'Power Spy', 'NTFS Streams', 'White Space Steganography', 'OpenStego', 'Quick Stego', 'Covert_TCP', 'Auditpol']
    //         ],
    //         [
    //             'name' => 'Malware Threats',
    //             'description' => 'Analisis dan penanganan ancaman malware',
    //             'instructor' => 'Dimas Kurniawan',
    //             'duration_hours' => 12,
    //             'tools' => ['njRAT', 'MoSucker', 'ProRat', 'Theef', 'HTTP RAT', 'JPS Virus Maker Tool', 'Internet Worm Maker Thing', 'VirusTotal', 'IDA Pro', 'OllyDbg', 'CurrPorts', 'Registry Entry Monitoring', 'Startup Program Monitoring', 'Device Driver Monitoring', 'Detecting Trojans', 'Clamwin']
    //         ],
    //         [
    //             'name' => 'Sniffing',
    //             'description' => 'Teknik intersepsi dan analisis lalu lintas jaringan',
    //             'instructor' => 'Dimas Kurniawan',
    //             'duration_hours' => 10,
    //             'tools' => ['Cain & Abel', 'SMAC', 'Wireshark', 'Capsa Network Analyzer', 'Omnipeek Network Analyzer', 'ARP Poisoning in a Switch Based Network', 'XArp Tool']
    //         ],
    //         [
    //             'name' => 'Social Engineering Advanced',
    //             'description' => 'Teknik lanjutan manipulasi sosial dalam keamanan',
    //             'instructor' => 'Dimas Kurniawan',
    //             'duration_hours' => 8,
    //             'tools' => ['Netcraft', 'PhishTank', 'Social Engineering Toolkit (SET)', 'SpeedPhish Framework (SPI)']
    //         ],
    //         [
    //             'name' => 'Denial-of-Service',
    //             'description' => 'Teknik serangan yang mengganggu ketersediaan layanan',
    //             'instructor' => 'Dimas Kurniawan',
    //             'duration_hours' => 8,
    //             'tools' => ['Metasploit', 'hping3', 'HOIC', 'KFSemsor', 'Wireshark', 'httptest']
    //         ],
    //         [
    //             'name' => 'Session Hijacking',
    //             'description' => 'Teknik pencurian dan pembajakan sesi pengguna',
    //             'instructor' => 'Dimas Kurniawan',
    //             'duration_hours' => 8,
    //             'tools' => ['Zed Attack Proxy (ZAP)', 'BetterCAP', 'Metasploit']
    //         ],
    //         [
    //             'name' => 'Evading IDS and Firewalls',
    //             'description' => 'Teknik menghindari sistem deteksi dan firewall',
    //             'instructor' => 'Dimas Kurniawan',
    //             'duration_hours' => 10,
    //             'tools' => ['Snort', 'HoneyBOT', 'Honeypot', 'KFSensor Honeypot IDS', 'Nmap Evasion Techniques', 'HTTP/FTP Tunneling', 'Metasploit']
    //         ],
    //         [
    //             'name' => 'Hacking Web Servers',
    //             'description' => 'Teknik eksploitasi kerentanan web server',
    //             'instructor' => 'Dimas Kurniawan',
    //             'duration_hours' => 12,
    //             'tools' => ['Skipfish', 'httprecon', 'ID Serve', 'Uniscan', 'FTP Credentials using Dictionary Attack']
    //         ],
    //         [
    //             'name' => 'Advanced Web Application Hacking',
    //             'description' => 'Teknik lanjutan eksploitasi aplikasi web',
    //             'instructor' => 'Dimas Kurniawan',
    //             'duration_hours' => 15,
    //             'tools' => ['Parameter Tampering', 'XSS', 'Cross-Site Request Forgery (CSRF)', 'WPScan', 'Metasploit', 'Remote Command Execution', 'File Upload', 'Acunetix WVS', 'Vega']
    //         ],
    //         [
    //             'name' => 'SQL Injection',
    //             'description' => 'Teknik injeksi SQL untuk eksploitasi database',
    //             'instructor' => 'Dimas Kurniawan',
    //             'duration_hours' => 10,
    //             'tools' => ['MSSQL Database', 'SQLMAP', 'IBM Security AppScan', 'N-Stalker']
    //         ],
    //         [
    //             'name' => 'Wireless Network Hacking',
    //             'description' => 'Teknik penetrasi jaringan nirkabel',
    //             'instructor' => 'Dimas Kurniawan',
    //             'duration_hours' => 8,
    //             'tools' => ['Microsoft Network Monitor', 'Wireshark', 'Aircrack-ng']
    //         ],
    //         [
    //             'name' => 'Mobile Platform Hacking',
    //             'description' => 'Teknik eksploitasi platform mobile',
    //             'instructor' => 'Dimas Kurniawan',
    //             'duration_hours' => 10,
    //             'tools' => ['Binary Payloads', 'Social Engineering Toolkit', 'DoS Attack', 'TheFatRat', 'Securing Android Devices', 'Metasploit']
    //         ],
    //         [
    //             'name' => 'Advanced Cloud Computing',
    //             'description' => 'Implementasi lanjutan teknologi cloud',
    //             'instructor' => 'Dimas Kurniawan',
    //             'duration_hours' => 12,
    //             'tools' => ['ownCloud', 'LAMP Server', 'ClamAV', 'Slowloris Script']
    //         ],
    //         [
    //             'name' => 'Cryptography Fundamentals',
    //             'description' => 'Dasar-dasar kriptografi dan enkripsi',
    //             'instructor' => 'Dimas Kurniawan',
    //             'duration_hours' => 10,
    //             'tools' => ['HashCalc', 'MD5 Calculator', 'CryptoForge', 'Advanced Encryption Package', 'BCTextEncoder', 'Self-Signed Certificates', 'VeraCrypt', 'Rohos Disk Encryption', 'CrypTool']
    //         ]
    //     ];

    //     // Create all tool records first
    //     $allTools = [];
    //     foreach ($coursesWithTools as $courseData) {
    //         foreach ($courseData['tools'] as $toolName) {
    //             if (!isset($allTools[$toolName])) {
    //                 $allTools[$toolName] = Tool::create([
    //                     'name' => $toolName,
    //                     'slug' => Str::slug($toolName),
    //                     'instructor' => 'Dimas Kurniawan',
    //                 ]);
    //             }
    //         }
    //     }

    //     // Create courses and attach tools
    //     foreach ($coursesWithTools as $courseData) {
    //         $course = Course::create([
    //             'name' => $courseData['name'],
    //             'slug' => Str::slug($courseData['name']),
    //             'description' => $courseData['description'],
    //             'instructor' => $courseData['instructor'],
    //             'duration_hours' => $courseData['duration_hours'],
    //         ]);

    //         // Attach tools to this course
    //         foreach ($courseData['tools'] as $toolName) {
    //             $course->tools()->attach($allTools[$toolName]->id);
    //         }
    //     }
    // }
