<?php
    include_once "include/connection.php";

    if(isset($_POST["btn"]))
    {
        $name = $_POST["name"];
        $gender = $_POST["gender"];
        $curriculum = $_POST["curriculum"];
        $promoted = $_POST["promoted"];
        $numbers = $_POST["numbers"];


        if($name != "" && $gender != "" && $curriculum != "" && $promoted !="" && $numbers !="")
        {
            if($query = mysqli_query($conn,"insert into `sms` (`name`,`gender`,`curriculum`,`promoted`,`numbers`) values (`$name`,`$gender`,`$curriculum`,`$promoted`,`$numbers`)"))
            {
                $msg = "Student Record has been inserted successfully..";
                header("Location: deshboard.php?success=$msg");
            }
            else{
                $msg ="Sorry Something went wrong";
                header("Location: form.php?error=$msg");
            }
        }
        else{
            $msg = "Please fill all the required fields";
            header("Locatoin: form.php?error=$msg");
        }

    }
?>