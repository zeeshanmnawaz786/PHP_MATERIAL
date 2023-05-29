<?php
    include_once "include/connection.php";
    $email = $_SESSION['email'];

    if($email ==""){
        $msg = "Don't Allow to Direct Acceess";
        header("Location: Login.php?msg=$msg");
    }
   
    

?>