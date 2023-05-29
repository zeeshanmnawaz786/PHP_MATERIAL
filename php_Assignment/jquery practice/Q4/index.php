<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

<?php
include ("db.php");

$query = "select * from student";
$result = mysqli_query($conn, $query);
if (!$result){
    echo "something wrong happened";
}
else{
    while($row = mysqli_fetch_array($result)){
    ?>
    <tr><?php echo $row["name"]; ?></tr>
    <tr><?php echo $row["email"]; ?></tr>
    <tr><?php echo $row["password"]; ?></tr>
    <tr><a href="update.php?id=<?php echo $row["id"]; ?>">Update</a> </tr><br/>
    <?php
    }
}
?>

    
</body>
</html>