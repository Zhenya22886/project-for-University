<?php
$connect = mysqli_connect('localhost', 'dayplanner_p', 'sjp1312006sjp', 'dayplanner_p');
if(!$connect){
    die('Error connect to DataBase');

}