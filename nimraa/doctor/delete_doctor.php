<?php include("../db/dbconn.php") ?>
<?php 

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "delete from doctor where id = $id";
    $result = mysqli_query($conn, $query);
    if(!$result){
        echo "Error: ". mysqli_error($conn);
    }
    else{
        header('location:./doctor.php');
        exit();
    }
}

?>