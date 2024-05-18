<?php
session_start();
require_once'./conn/connector.php';

$login = $_POST['login'];
$pass  = md5($_POST['pass']);


$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass' ");

if (mysqli_num_rows($check_user) > 0){

    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user']= [
        "login" => $user['login']
    ];
    header('location: ./home.php');

} else {
    $_SESSION['message1'] = 'Не правильний логін або пароль ';
    header('Location: ./sign_in.php');
}
?>