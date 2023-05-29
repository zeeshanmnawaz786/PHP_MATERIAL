<?php
session_start();
include_once "connect.php";

    $email = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM `user` WHERE username = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        if($email == $row['username'] && $password == $row['password']) {
            $_SESSION['SESS_MEMBER_ID'] = $row['id'];
            $_SESSION['SESS_FIRST_NAME'] = $row['name'];
            $_SESSION['SESS_LAST_NAME'] = $row['position'];
            header("location: main/index.php");
            exit();
        }
    }
    else{
        echo "Invalid Credentials!";
    }

?>

