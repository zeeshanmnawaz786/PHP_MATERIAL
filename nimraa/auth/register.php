<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Log in</title>
    <link rel="stylesheet" href="auth.css" />
  </head>

  <body>

   <!-- backend -->
      <?php include("../db/dbconn.php") ?>


<?php
if(isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if ($username === '' || $email === '' || $pass === ''){
        echo '<script>alert("Please fill in all the fields")</script>';
        echo '<script>window.location.href = "register.php";</script>';
    }
    else{
        $query = "insert into register values(null, '$username', '$email', '$pass')";
        $result = mysqli_query($conn, $query);

        echo $result;

        if($result){
            echo '<script>window.location.href = "login.php";</script>';
        }
        else{
            echo '<script>alert("Something went wrong")</script>';
        }
    }
}
?>
   <!-- backend -->

    <div class="form">
      <div class="chat">
        <div class="text"></div>
      </div>
      <form action="register.php" method="post">
        <h1>Register</h1>
        <input type="text" name="username" placeholder="Enter username"  size="42" />
        <input type="eamil" name="email" placeholder="Enter your email"  size="42" />
        <input type="password" name="pass" placeholder="Enter your password"  size="42" />
        <input type="submit" value="Register" name="register" id="sub"/>
      </form>
    </div>
  </body>
</html>
