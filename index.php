<?php

    $x = 1;

    for ($x; $x <= 100; $x++) {
        
        if ($x % 3 == 0 && $x % 5 == 0) {
            echo "<p> FizzBuzz</p>";
        } elseif ($x % 3 == 0) {
            echo "<p> Fizz</p>";
        } elseif ($x % 5 == 0) {
            echo "<p>Buzz</p>";
        } else {
            echo "<p> $x</p>";
        }

    };

?>