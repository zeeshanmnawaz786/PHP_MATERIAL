<?php
    include_once ("include/connection.php");

    if(isset($_POST['submit'])){
        $name = $_POST['logname'];
        $password = $_POST['logpassword'];
        if($name == "admin" && $password == "admin"){
            $msg = "Successfully Login";
            header("Location: Dashboard.php?msg=$msg");
        } 
        $msg = "Something is Wrong";
        header("Location: index.php?msg=$msg");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="projectt.css">
    
    <title>Project</title>
</head>
<body style="background-color: orange;">
    <div class="mainadmin">
        <div class="first">
                <h1>CHMSC Student Management System</h1><br>
                <label for="Name">Name:</label>
                <input type="Name" id="name" name="name" required><br><br>
                <label for="password">Password:</label>
                <input type="password" id="password" class="password" name="password" required><br><br>
                <a href="index.php" class="active"><Button id="btn" class="btn">Login</Button></a>
                
            </div>
    </div>
</body>
</html>