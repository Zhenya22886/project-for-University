<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" href="/style.css">

</head>
<body>
    <div id="sign_up">
    <form action="./register.php" method="post">
    <label for="">Логін</label> <br>
        <input type="text" placeholder="login" name="login"><br><br>
        <label for="">Пароль</label> <br>
        <input type="password" placeholder="password" name="pass"><br><br>
        <label for="">повторіть пароль</label> <br>
        <input type="password" placeholder="repeat_password" name="repeatpass"><br><br>
        <button id="BtnSignUp">Зареєструватися</button>
    </form>
    </div>
    
</body>
</html>