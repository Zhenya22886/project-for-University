<?php
session_start();
require_once './conn/connector.php';

$login = $_POST['login'];
$pass  = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];

// Check if any fields are empty
if (empty($login) || empty($pass) || empty($repeatpass)) {
    $_SESSION['message'] = 'Усі поля повинні бути заповнені';
    header('Location: sign_up.php');
    exit();
}

// Check if passwords match
if ($pass !== $repeatpass) {
    $_SESSION['message'] = 'Паролі не співпадають';
    header('Location: sign_up.php');
    exit();
}

// Check if the login already exists
$loginCheckQuery = "SELECT * FROM `users` WHERE `login` = '$login'";
$result = mysqli_query($connect, $loginCheckQuery);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['message'] = 'Користувач з таким логіном вже існує';
    header('Location: sign_up.php');
    exit();
}

// If everything is okay, proceed with registration
$pass = md5($pass);
$insertQuery = "INSERT INTO `users` (`id`, `login`, `pass`) VALUES (NULL, '$login', '$pass')";

if (mysqli_query($connect, $insertQuery)) {
    $_SESSION['message'] = 'Реєстрація пройшла успішно, Увійдіть в акаунт';
    header('Location: sign_in.php');
} else {
    $_SESSION['message'] = 'Помилка реєстрації, спробуйте пізніше';
    header('Location: sign_up.php');
}
?>
