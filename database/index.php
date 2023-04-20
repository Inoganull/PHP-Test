<?php

    try {
        $pdo = new PDO("mysql:dbname=school;host=localhost", 'root', '');
        die(var_dump($pdo));
    } catch(PDOException $e) {
        die($e->getMessage());
    }
    
?>