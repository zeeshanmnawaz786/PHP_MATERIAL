<?php

include("db.php");

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
 
if ($id != '' && $name != '' && $email != ''){
    $query = "UPDATE `users` SET `name`='$name',`email`='$email' WHERE id='$id'";
    $result = mysqli_query($conn, $query);
}
?>