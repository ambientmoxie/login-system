<?php

    session_start();

    if(!isset($_SESSION["useruid"])) {
        header("location: ../login.php?error=restrictedaccess");   
    }
