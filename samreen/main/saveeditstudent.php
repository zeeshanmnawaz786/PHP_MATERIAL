<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['name'];
$h = $_POST['last_name'];
$b = $_POST['report'];
$c = $_POST['yoa'];
$d = $_POST['parent'];
$e = $_POST['dob'];
$f = $_POST['student_id'];
$g = $_POST['gender'];
// query

$query = "UPDATE student 
        SET name='$a',last_name='$h', report='$b', yoa='$c', parent='$d', dob='$e',student_id='$f',gender='$g'
		WHERE id=$id";
$result=mysqli_query($conn,$query);

if($result){
    header ("Location: students.php");
}

?>