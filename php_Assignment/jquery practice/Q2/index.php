<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    include("db.php");

    $query = "SELECT * FROM student";
    $result = mysqli_query($conn, $query);
      if (!$result) {
      echo "No students found".mysqli_error($conn);
    }
    else{
      
      while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
          <td><?php echo $row['name']; ?></td><br/>
          <td><?php echo $row['email']; ?></td><br/>
          <td><?php echo $row['password']; ?></td>
        </tr>

        <?php
      }
    }
    ?>  
</body>
</html>
