<?php

include("db.php");

$id = $_POST['id'];

$query = "DELETE FROM `users` WHERE id='$id'";
$result = mysqli_query($conn, $query);

?>