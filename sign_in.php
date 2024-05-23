<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Sign in</title>
</head>
<body>
    
    <div id="sign_in">
        <label >
        <?php
             echo $_SESSION['message'];
             unset($_SESSION['message']);
             ?>
        </label>
    <form action="./login.php" method="post">
        <label for="">Логін</label> <br>
        <input type="text"  name="login"> <br><br>
        <label for="">Пароль</label> <br>
        <input type="password"  name="pass"> <br> <br>
        <p id="warn_1">
        <?php
             echo $_SESSION['message1'];
             unset($_SESSION['message1']);
             ?>
        </p>
        <p>
            У вас немає акаунту - <a href="./sign_up.php">Зареєструватися</a>
        </p>
        
        <button type="submit" id="BtnSignIn">Увійти</button> <br><br>
        <label class="am_home"><a href="./index.html">на головну</a></label>
        
    </form>
</div>
    
</body>
</html>