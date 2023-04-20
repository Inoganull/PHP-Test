<?php

    try {
        $pdo = new PDO("mysql:dbname=school;host=localhost", 'root', '');
        $statement = $pdo->query("
            insert into `students`(`name`, `email`, `gender`, `dob`, `age`)
            values('Francis', 'francis@gmail.com', 'male', '1994-2-12', 26)
        ");
        
        if ($statement) {
            echo "Student info is created";
        } else {
            echo "Something went wrong";
        }   

    } catch(PDOException $e) {
        die($e->getMessage());
    } catch(Exception $e) {
        die($e->getMessage());
    }
    
?>