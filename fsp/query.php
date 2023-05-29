<?php
include_once "include/connection.php";
if(isset($_POST["button"])){
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $curriculum = $_POST["curriculum"];
    $promoted = $_POST["promoted"];
    $numbers = $_POST["numbers"];
    if($name != "" && $gender != "" && $curriculum != "" && $promoted !="" $numbers !=""){
    mysqli_query($conn,"insert into `student` (`name`,`gender`,'curriculum','promoted','numbers') values ('$name','$gender','$curriculum','$promoted','$numbers')");  
echo "Success";
}
else{
    echo "Fill your form";
}
}
?>
