<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat & Dog Food Manufacturer</title>
    <link rel="stylesheet" href="cssstyles.css">
</head>
<body>
    <header>
        <div class="logo">
        <a href="index.php"><img src="logo.svg" alt="Company Logo">
        </div>
        <div class="contact-info">
            <span>8 967 543 6532</span>
            <div class="social-icons">
                <a href="#"><img src="images/facebook.png" alt="Facebook"></a>
                <a href="#"><img src="images/vk.png" alt="VK"></a>
                <a href="#"><img src="images/telegram.png" alt="Telegram"></a>
            </div>
            <button class="vet-consultation">Консультация ветеринара</button>
        </div>
    </header>
    <nav>
    <ul>
        <li><a href="index.php">Главная</a></li>
        <li><a href="cat-food.php">Корма для кошек</a></li>
        <li><a href="dog-food.php">Корма для собак</a></li>
        <li><a href="promotions.php">Акции</a></li>
        <li><a href="about-us.php">О нас</a></li>
        <li><a href="contacts.php">Контакты</a></li>
    </ul>
</nav>
    <main>
        <section class="slider">
            <?php
            $promotions = [
                [
                    'tag' => 'Акция',
                    'date' => 'до 16 марта',
                    'title' => 'Скидка 15% на беззерновые корма!',
                    'subtitle' => 'Подарите своему питомцу здоровье и активную жизнь',
                    'triggers' => ['grain free', 'натуральные ингредиенты', 'без ГМО'],
                    'button' => 'Смотреть в каталоге',
                    'image' => 'dog1.jpg', 
                    'label' => 'pouches.png'
                ],
                [
                    'tag' => 'Акция',
                    'date' => 'до 20 марта',
                    'title' => 'Скидка 10% на корма для кошек!',
                    'subtitle' => 'Позаботьтесь о здоровье вашего питомца',
                    'triggers' => ['для кошек', 'высокое качество', 'без консервантов'],
                    'button' => 'Смотреть в каталоге',
                    'image' => 'dog2.jpg', 
                    'label' => 'pouches.png'
                ]
            ];

            foreach ($promotions as $index => $promotion) {
                echo "<div class='slide" . ($index === 0 ? " active" : "") . "'>";
                echo "<div class='promotion-box'>";
                echo "<div class='promotion-content'>";
                echo "<div class='promotion-tag'>{$promotion['tag']} {$promotion['date']}</div>";
                echo "<h2>{$promotion['title']}</h2>";
                echo "<p>{$promotion['subtitle']}</p>";
                echo "<div class='triggers'>";
                foreach ($promotion['triggers'] as $trigger) {
                    echo "<span>{$trigger}</span>";
                }
                echo "</div>";
                echo "<button>{$promotion['button']}</button>";
                echo "</div>";
                echo "<div class='promotion-images'>";
                echo "<img src='images/{$promotion['image']}' alt='Promotion Image' class='main-image'>";
                echo "<img src='images/{$promotion['label']}' alt='Pouches.ai Label' class='label-image'>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </section>
    </main>
    <footer>
        <div class="footer-content">
            <p>&copy; 2025 Cat & Dog Food Manufacturer. All rights reserved.</p>
            <div class="footer-links">
                <a href="privacy-policy.php">Политика конфиденциальности</a> | <a href="terms-of-service.php">Условия использования</a>
            </div>
        </div>
    </footer>
    <script src="jsscripts.js"></script>
</body>