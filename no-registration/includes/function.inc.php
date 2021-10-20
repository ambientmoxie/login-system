<?php

if (isset($_POST['submit'])){
    $username = $_POST['uid'];
    $password = $_POST['pwd'];

    $wantedUser= "maxime";
    $wantedPassword = "benoit";
     
    if( $username === $wantedUser and $password === $wantedPassword ) {
        header('Location: ../dev/index.html');
    }else {
        header('Location: ../index.php');
        exit;
    }
}else {
    header('Location: ../index.php');
}