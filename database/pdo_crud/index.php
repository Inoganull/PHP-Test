<?php

    try {
        $pdo = new PDO("mysql:dbname=school;host=localhost", 'root', '');

        $statement = $pdo->query("select * from students");


        if ($statement) {
            $students = $statement->fetchAll(PDO::FETCH_OBJ);

            foreach($students as $student) {
                echo "<p>{$student->id} - {$student->name} age: {$student->age}</p>";
            }        
        } else {
            echo "Something went wrong";
        }  
    } catch(PDOException $e) {
        die($e->getMessage());
    } catch(Exception $e) {
        die($e->getMessage());
    }
    
?>