<?php
	include('../connect.php');
	$id=$_GET['id'];
	$query = "DELETE FROM student WHERE id ='$id'";
	$result=mysqli_query($conn,$query);
	if($result){
		header ("Location: students.php");
	}
	
?>