<?php session_start(); ?>

<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
 </head>
 <body>
    <div class="container">

        <?php if($_SESSION['logged_in']): ?>
            <p>Hello, <?php echo $_SESSION['username']; ?></p>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
            </div>

            <button class="btn btn-primary">Login</button>
            </form>
        <?php endif; ?>
        
    </div>
 </body>
 </html>