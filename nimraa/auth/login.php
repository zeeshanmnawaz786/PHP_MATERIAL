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
   <?php session_start(); ?>

   <?php
    
    if(isset($_POST['login'])){
     $username = $_POST['username'];
    $password = $_POST['pass'];

    $query = "SELECT * FROM register WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (!$result){
        die("Query failed".mysqli_error());
        }
        else{
            $row = mysqli_num_rows($result);
            echo $row;
            if($row > 0){
                $_SESSION['username'] = $username;
                header('location:../dashboard.php');
        }
        else{
            header('location:.login.php?message=Email or password is incorrect');
        }
    }
}
   ?>
  <!-- backend -->

    <div class="form">
      <div class="chat">
        <div class="text"></div>
      </div>
      <form action="login.php" method="post">
        <h1>Log in</h1>
        <input type="text" name="username" placeholder="Username" size="42" />
        <input type="password" name="pass" placeholder="Password" size="42" />
        <input type="submit" value="LOG IN" name="login" id="sub" />
      </form>
    </div>
  </body>
</html>
