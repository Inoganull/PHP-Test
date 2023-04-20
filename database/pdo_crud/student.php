<?php

    try {
        $pdo = new PDO("mysql:dbname=school;host=localhost", 'root', '');

        $statement = $pdo->query("select * from students where id = 1");


        if ($statement) {
            $student = $statement->fetch(PDO::FETCH_OBJ);

            echo "<p>{$student->id} - {$student->name} age: {$student->age} email: {$student->email}</p>";
        } else {
            echo "Something went wrong";
        }   

    } catch(PDOException $e) {
        die($e->getMessage());
    } catch(Exception $e) {
        die($e->getMessage());
    }
    
?>