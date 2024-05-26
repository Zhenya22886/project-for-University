<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DayPlanner</title>
    <link rel="stylesheet" href="style_1.css">
</head>
<body>
    <header>
        <div class="container">
            <span class="logo">DayPlanner <img src="Images/3358.png_860-removebg-preview.png" width="45px" height="45px"></span>
            <nav class="header">
                <ul class="nav-links">
                    <li class="session"><?= $_SESSION['user']['login'] ?></li>
                    <li><a href="./log_out.php" class="log_out">log out</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <p id="currentDate"></p>
    <div id="dayOnWeek">
    <ul id="dayOnWeekElements">
            <li><div id="Sunday">Su</div></li>
            <li><div id="Monday">Mo</div></li>
            <li><div id="Tuesday">Tu</div></li>
            <li><div id="Wednesday">We</div></li>
            <li><div id="Thursday">Th</div></li>
            <li><div id="Friday">Fr</div></li>
            <li><div id="Saturday">Sa</div></li>
        </ul>
    </div>
    <div id="CurrentDiv">
     <div id="main_div">
        <p class="CurrentDay"> Оберіть день, щоб додати завдання</p>
        <div id="add_task">
            <ul id="Add_Task_Icon">
                <li><a>+</a></li>
            </ul>
        </div>

     </div>
    </div>

    <div class="social-container">
        <ul class="social-icons">
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-codepen"></i></a></li>
        </ul>
    </div>
    </main>
    <footer>
        <span class="logo">DayPlanner <img src="Images/3358.png_860-removebg-preview.png" width="45px" height="45px"></span>
        <div id="footer_center">
            <div id="first_div">
                <p class="Upp">Контактна інформація</p>
                <ul>
                    <li>телефонуйте: <a href="tel:+380956178489">+380956178489</a></li>
                    <li><a href="mailto:kommnata4@gmaul.com">Пишіть на пошту</a></li>
                    <li><a href="#">Часті запитання</a></li>
                </ul>
            </div>
            <div id="second_div">
                <ul>
                    <li><a href="#">Про нас</a></li>
                    <li><a href="#">Політика конфіденційності</a></li>
                    <li><a href="#">Умови використання</a></li>
                </ul>
            </div>
            <div id="third_div">
                <p class="Upp">Акаунт</p>
                <ul>
                    <li><a href="./log_out.php">вийти</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="index.js"></script>
</body>
</html>