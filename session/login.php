<?php

    if ($_POST['username'] === "alice" && $_POST['password'] === 'admin') {
        session_start();
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = "alice";
        $_SESSION['password'] = "admin";
        
        header("location: index.php");

    } else {
        echo "Your username and Password is not match";
    }

?>