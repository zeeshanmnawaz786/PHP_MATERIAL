<!DOCTYPE html>
<html lang="en">
<head>

 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $(document).ready(function () {
        $("button").click(function () {
          $.post(
            "demo_test_post.php",
            { name: "John", age: 25 },
       function(data, status){
    alert("Data: " + data + "\nStatus: " + status);
      });
        });
      });
    </script>
</head>

<body>


<form action="index.php" method="post">
    <input type="text" name="name" placeholder="enter name"><br/>
    <input type="email" name="email" placeholder="enter email"><br/>
    <input type="password" name="pass" placeholder="enter password"><br/>
    <input type="submit" value="submit" name="insertData">
    <button>Click</button>
</form>

<?php
    include("db.php");
    if(isset($_POST["insertData"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        if ($name === "" || $email === "" || $pass === ""){
            echo "Enter all data";
        }
        else{
            $query = "INSERT INTO student (name, email, password) VALUES ('$name', '$email', '$pass')";
            $result = mysqli_query($conn, $query);
            
            if($result){
                echo '<script>window.location.href = "index.php";</script>';
            }
            else{
                echo '<script>alert("Something went wrong");</script>';
            }
        }
    }
?>

</body>
</html>
