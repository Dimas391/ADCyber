import pygame
import random

# Inisialisasi Pygame
pygame.init()

# Ukuran layar
WIDTH, HEIGHT = 800, 600
screen = pygame.display.set_mode((WIDTH, HEIGHT))
pygame.display.set_caption("Avoid the Obstacles")

# Warna
WHITE = (255, 255, 255)
BLACK = (0, 0, 0)
RED = (255, 0, 0)

# Player
player_size = 50
player_x = WIDTH // 2 - player_size // 2
player_y = HEIGHT - player_size - 10
player_speed = 10

# Obstacle
obstacle_width = 100
obstacle_height = 20
obstacle_x = random.randint(0, WIDTH - obstacle_width)
obstacle_y = 0
obstacle_speed = 5

# Score
score = 0
font = pygame.font.SysFont(None, 35)

# Game loop
clock = pygame.time.Clock()
running = True
while running:
    screen.fill(BLACK)

    # Event handling
    for event in pygame.event.get():
        if event.type == pygame.QUIT:
            running = False

    # Player movement
    keys = pygame.key.get_pressed()
    if keys[pygame.K_LEFT] and player_x > 0:
        player_x -= player_speed
    if keys[pygame.K_RIGHT] and player_x < WIDTH - player_size:
        player_x += player_speed

    # Obstacle movement
    obstacle_y += obstacle_speed
    if obstacle_y > HEIGHT:
        obstacle_y = 0
        obstacle_x = random.randint(0, WIDTH - obstacle_width)
        score += 1

    # Collision detection
    if (player_x < obstacle_x + obstacle_width and
        player_x + player_size > obstacle_x and
        player_y < obstacle_y + obstacle_height and
        player_y + player_size > obstacle_y):
        running = False

    # Draw player
    pygame.draw.rect(screen, WHITE, (player_x, player_y, player_size, player_size))

    # Draw obstacle
    pygame.draw.rect(screen, RED, (obstacle_x, obstacle_y, obstacle_width, obstacle_height))

    # Draw score
    score_text = font.render(f"Score: {score}", True, WHITE)
    screen.blit(score_text, (10, 10))

    # Update display
    pygame.display.update()
    clock.tick(30)

# Game over
pygame.quit()
print(f"Game Over! Your score: {score}")