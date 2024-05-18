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
    <form action="./login.php" method="post">
        <label for="">Логін</label> <br>
        <input type="text" placeholder="login" name="login"> <br><br>
        <label for="">Пароль</label> <br>
        <input type="password" placeholder="password" name="pass"> <br> <br>
        <p>
            У вас немає акаунту - <a href="./sign_up.php">Зареєструватися</a>
        </p>
        <button id="BtnSignIn">Увійти</button> <br><br>
        
    </form>
</div>
    
</body>
</html>