<?php
        include_once ('include/connection.php');
        if(isset($_POST['button'])){
            $email = $_POST['email']; 
            $password = $_POST['pass'];

            if($email !="" && $password !=""){
                    $select = mysqli_query($conn,"SELECT * FROM `login` WHERE `email`='$email'");
                   if(mysqli_num_rows($select) > 0){
                    $msg = "Email is already Exists";
                    header("Location: index.php?msg=$msg");
                   }
                   else{
                    mysqli_query($conn,"INSERT INTO `login`(`email`, `password`) VALUES ('$email','$password')");
                    $msg = "Successfully inserted";
                    header("Location: Login.php?msg=$msg");
                   }
                
            }
            else{
                $msg = "Plz fill all the fields";
                header("Location: index.php?msg=$msg");
            }
        }
        else{
            $msg = "Something went wrong";
            header("Location: index.php?msg=$msg");
        }
?>