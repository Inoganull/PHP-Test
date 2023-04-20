<?php

    try {
        $pdo = new PDO("mysql:dbname=school;host=localhost", 'root', '');

        $statement = $pdo->query("
            DELETE FROM `students` 
            WHERE `id` = 8
            ");

        
        if ($statement) {
            echo "Student info is deleted";
        } else {
            echo "Something went wrong";
        }    

    } catch(PDOException $e) {
        die($e->getMessage());
    } catch(Exception $e) {
        die($e->getMessage());
    }
    
?>