<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Calculator</title>
</head>
<body>
    <div class="container">
        <form action="calculate.php" method="post">
            <div class="form-group">
                <label for="first_number">First Number</label>
                <input type="text" name="first_number" class="form-control" placeholder="First Number">
            </div>

            <div class="form-group">
                <label for="second_number">Second Number</label>
                <input type="text" name="second_number" class="form-control" placeholder="Second Number">
            </div>

            <div class="form-check">
                <input type="radio" class="form-check-input" value="add" name="operator">
                <label for="add">Add</label>
            </div>

            <div class="form-check">
                <input type="radio" class="form-check-input" value="subtract" name="operator">
                <label for="subtract">Subtract</label>
            </div>

            <div class="form-check">
                <input type="radio" class="form-check-input" value="multiply" name="operator">
                <label for="multiply">Multiply</label>
            </div>

            <div class="form-check">
                <input type="radio" class="form-check-input" value="division" name="operator">
                <label for="division">Division</label>
            </div>



            <div class="form-group">
            <button class="form-control btn btn-primary">Calculate</button>
            </div>
        </form>
    </div>
</body>
</html>


<?php
	if(isset($_POST['submit'])){
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$operator = $_POST['operator'];
		switch($operator){
			case "add":
				$result = $num1 + $num2;
				echo "The sum of $num1 and $num2 is: ".$result;
				break;
			case "sub":
				$result = $num1 - $num2;
				echo "The difference between $num1 and $num2 is: ".$result;
				break;
			case "mul":
				$result = $num1 * $num2;
				echo "The product of $num1 and $num2 is: ".$result;
				break;
			case "div":
				if($num2 == 0){
					echo "Cannot divide by zero.";
				}
				else{
					$result = $num1 / $num2;
					echo "The quotient of $num1 and $num2 is: ".$result;
				}
				break;
			default:
				echo "Invalid operation selected.";
		}
	}

    var_dump($_POST);
?>




