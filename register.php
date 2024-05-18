<?php
session_start();
require_once'./conn/connector.php';


$login = $_POST['login'];
$pass  = $_POST['pass'];
$repeatpass= $_POST['repeatpass'];

if ($pass === $repeatpass){
    header('Location: sign_in.php');
    $pass = md5($pass);
    mysqli_query($connect, "INSERT INTO `users`
     (`id`, `login`, `pass`) 
     VALUES 
     (NULL, '$login', '$pass')");
     $_SESSION['message'] = 'Реєстрація пройшла успішно, Увійдіть в акаунт';


}else {
    $_SESSION['message'] = 'Паролі не співпадають';
    header('Location: sign_up.php');
}

?>