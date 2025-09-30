<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Акции - Cat & Dog Food Manufacturer</title>
    <link rel="stylesheet" href="cssstyles.css">
</head>
<body class="promotions">
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
        <section class="content">
            <h1>Акции</h1>
            <div class="promotion-grid">
                <?php
                $promotions = [
                    [
                        'title' => 'Скидка 15% на беззерновые корма!',
                        'subtitle' => 'Подарите своему питомцу здоровье и активную жизнь',
                        'image' => 'dog1.jpg',
                        'button' => 'Подробнее'
                    ],
                    [
                        'title' => 'Скидка 10% на корма для кошек!',
                        'subtitle' => 'Позаботьтесь о здоровье вашего питомца',
                        'image' => 'cat1.png',
                        'button' => 'Подробнее'
                    ]
                ];

                foreach ($promotions as $promotion) {
                    echo "<div class='promotion-card'>";
                    echo "<img src='images/{$promotion['image']}' alt='Promotion Image'>";
                    echo "<h3>{$promotion['title']}</h3>";
                    echo "<p>{$promotion['subtitle']}</p>";
                    echo "<button>{$promotion['button']}</button>";
                    echo "</div>";
                }
                ?>
            </div>
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
</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Акции - Cat & Dog Food Manufacturer</title>
    <link rel="stylesheet" href="cssstyles.css">
</head>
<body class="promotions">
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
        <section class="content">
            <h1>Акции</h1>
            <div class="promotion-grid">
                <?php
                $promotions = [
                    [
                        'title' => 'Скидка 15% на беззерновые корма!',
                        'subtitle' => 'Подарите своему питомцу здоровье и активную жизнь',
                        'image' => 'dog1.jpg',
                        'button' => 'Подробнее'
                    ],
                    [
                        'title' => 'Скидка 10% на корма для кошек!',
                        'subtitle' => 'Позаботьтесь о здоровье вашего питомца',
                        'image' => 'cat1.png',
                        'button' => 'Подробнее'
                    ]
                ];

                foreach ($promotions as $promotion) {
                    echo "<div class='promotion-card'>";
                    echo "<img src='images/{$promotion['image']}' alt='Promotion Image'>";
                    echo "<h3>{$promotion['title']}</h3>";
                    echo "<p>{$promotion['subtitle']}</p>";
                    echo "<button>{$promotion['button']}</button>";
                    echo "</div>";
                }
                ?>
            </div>
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
</body>
>>>>>>> c153a4d57e1be019bcaf23affdbc7b511e3de56e
</html>