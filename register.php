<?php
require_once('./db.php');
$login = $_POST['login'];
$pass  = $_POST['pass'];
$repeatpass= $_POST['repeatpass'];

if(empty($login) || empty($pass) || empty($repeatpass)){
    echo"Заповніть всі поля";
} else {
    if($pass !=$repeatpass){
        echo "Паролі не співпадають";
    } else {
        $sql = "INSERT into users (login, pass) VALUES ('$login','$pass')";
        if($conn -> query($sql) ===TRUE){
            echo "Реєстрація успішна";

        }else {
            echo "Помилка" . $conn-> error;
        }
        

    }
}

?>