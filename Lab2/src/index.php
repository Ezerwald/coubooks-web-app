<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>CouBooks home page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
# Add Greeter
use classes\Greeter;

require_once 'classes/Greeter.php';  // No use
$greeter = new Greeter();

# Connect MySQL DB
$env = parse_ini_file(__DIR__ . '/../.env');

try{
    $pdo = new PDO("mysql:host=" . $env['DB_HOST'] . ";dbname=" . $env['DB_NAME'] . ";charset=utf8mb4",
            $env['DB_USER'],
            $env['DB_PASS']);
} catch (PDOException $e){
    die('DB connection failed: ' . $e->getMessage());
}

# Load Feedbacks
require_once 'classes/Feedback.php';  // Simple!
$feedbacks = Feedback::getAll($pdo);
?>

<div class = "main-wrapper">
    <div class = "round-container blue-container">
        <header>
            <div class = "logo">
                <h1>COUBOOKS</h1>
                <h2>A WEBTECH DEMO SITE</h2>
            </div>

            <nav>
                <ul>
                    <li><a href="index.php"><em>Home</em></a></li>
                    <li><a href="courses.php">Courses</a></li>
                    <li><a href="reservation.php">Reservation</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
            </nav>
        </header>
    </div>

    <div class = "main-section round-container white-container">
        <section>
            <h1><?= $greeter->getGreeting() ?></h1>
            <h2>Are you ready to study?</h2>
            <p>When in need of a course book you should have a look at out course book website for EA.
                Here you can find an overview of all course material that is needed for every course within the EA program.
                Select your phase and see what is needed</p>
        </section>

        <aside>
            <div>
                <h2>Opening Hours:</h2>
                <ul>
                    <li>Mon: 9am-11am</li>
                    <li>Tue: 9am-11am</li>
                    <li>Wed: 9am-11am</li>
                </ul>
            </div>

            <div>
                <h2>Feedback</h2>
                <?php if (empty($feedbacks)): ?>
                    <p>No feedback yet. <em>Share your thoughts!</em></p>
                <?php else: ?>
                    <?php foreach ($feedbacks as $feedback): ?>
                        <div class="feedback-item">
                            <span class="feedback-author"><?= htmlspecialchars($feedback->getAuthor()) ?></span>:
                            <?= htmlspecialchars($feedback->getText()) ?>
                            <div class="feedback-date"><?= $feedback->getCreated() ?></div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </aside>
    </div>

    <footer class = "round-container blue-container">
        <p>Copyright @ 2022 WebTech. KUL All Rights Reserved.</p>
        <a>Privacy Policy</a> <p>|</p> <a>Terms of Use</a>
    </footer>
</div>
</body>
</html>