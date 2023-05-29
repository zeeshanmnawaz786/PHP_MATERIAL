<?php
include ("db.php");
if (isset($_GET["id"])){
    $id = $_GET["id"];
echo $id;
    $query = "delete from student where id = $id";
    $result = mysqli_query($conn, $query);
    if ($result){
        header("Location:index.php");
    }
}
?>