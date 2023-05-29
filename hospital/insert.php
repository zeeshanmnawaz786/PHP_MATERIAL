   <?php include("conn.php") ?>


<?php
if(isset($_POST['add_appoin'])){
    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $email = $_POST['email'];
    $p_no = $_POST['p_no'];

    if ($fname === '' || $lname === '' || $email === '' || $p_no === ''){
        echo '<script>alert("Please fill in all the fields")</script>';
            echo '<script>window.location.href = "index.php";</script>';


    }
    else{
        $query = "insert into appoin values(null, '$fname', '$lname', '$email', '$p_no')";
        $result = mysqli_query($conn, $query);

        if($result){
            echo '<script>window.location.href = "index.php";</script>';
        }
        else{
            echo '<script>alert("Something went wrong")</script>';
        }
    }
}
?>