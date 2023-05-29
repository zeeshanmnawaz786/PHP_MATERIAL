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