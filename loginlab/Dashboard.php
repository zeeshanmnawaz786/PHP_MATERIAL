<?php
    session_start();
    include 'include/checklogin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1 >Welcome  to Dashboard </h1>
    <p>Your Email is :  <?php echo $_SESSION['email']; ?></p>
    <a href="logout.php">LOg Out</a>
</body>
</html>