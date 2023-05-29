<?php
include("db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM student WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "No students found: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_assoc($result);

        if(isset($_POST["updateData"])){
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["pass"];

            if ( $name ==="" || $email === "" || $password === "" ){
                echo "Error updating";
            }
            else{
                $query = "update student set name = '$name', email = '$email', password = '$password' where id = $id";
                $result = mysqli_query($conn, $query);
                if (!$result) {
                  echo mysqli_error($conn);
              }
              else{
                  header('location:index.php');
                  exit();
              }
            }
        }
?>
        <form action="update.php?id=<?php echo $id; ?>" method="post">
            <input type="text" name="name" value="<?php echo $row['name']; ?>"><br/><br/>
            <input type="email" name="email" value="<?php echo $row["email"];?>"><br/><br/>
            <input type="password" name="pass" value="<?php echo $row["password"];?>"><br/><br/>
            <input type="submit" value="Update" name="updateData">
        </form>
<?php
    }
}
?>
