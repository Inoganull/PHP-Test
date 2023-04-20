<?php

    try {
        $pdo = new PDO("mysql:dbname=school;host=localhost", 'root', '');

        $statement = $pdo->query("
            UPDATE `students` 
            SET `name` = 'Gonni', `gender` = 'female', `email` = 'gonni@gmail.com'
            WHERE `id` = 7"
        );

        if ($statement) {
            echo "Student info is updated";
        } else {
            echo "Something went wrong";
        }   

    } catch(PDOException $e) {
        die($e->getMessage());
    } catch(Exception $e) {
        die($e->getMessage());
    }
    
?>