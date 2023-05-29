<?php
        session_start();

        include_once ('include/connection.php');
        if(isset($_POST['button'])){
          $_SESSION['email'] =  $email = $_POST['email']; 
            $password = $_POST['pass'];

            if($email !="" && $password !=""){
                    $select = mysqli_query($conn,"SELECT * FROM `login` WHERE `email`='$email' && `password`='$password' && `status`=1");
                    if($array = mysqli_fetch_array($select)){
                        $msg = "Successfully Login";
                        header("Location: Dashboard.php?msg=$msg");
                    }
                    else{
                        $msg = "Plz fill all the fields";
                        header("Location: Login.php?msg=$msg");
                    }
            }
            else{
                $msg = "Plz fill all the fields";
                header("Location: Login.php?msg=$msg");
            }
        }
        else{
            $msg = "Something went wrong";
            header("Location: Login.php?msg=$msg");
        }
?>
