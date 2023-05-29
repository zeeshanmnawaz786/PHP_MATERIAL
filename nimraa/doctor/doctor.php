<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- Bootstrap CSS -->
  
  <link rel="stylesheet" href="../dashboard.html" />
  <link rel="stylesheet" href="../navbar.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Patient</title>

    <link rel="stylesheet" href="../css/doctor.css" />
  </head>

  <body>

     <?php include("../db/dbconn.php") ?>

          <!-- insert doctor data -->
<?php
if(isset($_POST['add_doctor'])){
    $d_name = $_POST['d_name'];
    $d_email = $_POST['d_email'];
    $d_gender = $_POST['d_gender'];

    if ($d_name === '' || $d_email === '' || $d_gender === ''){
        echo '<script>alert("Please fill in all the fields")</script>';
            echo '<script>window.location.href = "doctor.php";</script>';
    }
    else{
        $query = "insert into doctor values(null, '$d_name', '$d_email', '$d_gender')";
        $result = mysqli_query($conn, $query);
    
        if($result){
            echo '<script>window.location.href = "./doctor.php";</script>';
        }
        else{
            echo '<script>alert("Something went wrong")</script>';
        }
    }
}
?>
     <!-- insert doctor data -->


    <div class="back">
        <header class="header">
    
            <!-- Left box for logo -->
            <div class="left">
                <img src="../Images/HMS logo.jpg" alt="">
                <div>
                  <a href="../dashboard.php">
                    HOSPITAL MANAGEMENT
                  </a>
                </div>
            </div>
    
            <!-- Mid box for nav bar -->
            <div class="mid"   style="padding-top:0px">
                <ul class="navbar">
                    <li> <a href="../patient/patient.php" >Patients</a></li>
                    <li> <a href="./doctor.php">Doctors</a></li>
                    <li> <a href="../appoinment/appoinment.php">Appoinments</a></li>
                </ul>
            </div>
    
            <!-- Right box for buttons -->
            <div class="right"  style="padding-top:10px">
                <button class="btn">Call Us Now</button>
                <button class="btn">Email Us</button>
            </div>
        </header>
    </div>
    
    <div class="doctor">
        <h1 class="doctor">Doctors</h1>
              <div>
        <button class="btn btnn" style="margin-top: 0px" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Doctor</button>
      </div>
    </div>

    <div class="tab">
        <table width="100%">
            <tr id="head">
                <th>Doctor_ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            <tbody>

            <!-- get doctor data -->

    <?php
    $query = "select * from doctor";
    $result = mysqli_query($conn, $query);
    if (!$result) {
      echo "No Doctor found".mysqli_error($conn);
    }
    else{
      while($row = mysqli_fetch_array($result)){
        ?>
          <tr>
            <td class="no"><?php echo $row['id']; ?></td>
            <td class="name" style="margin-top: 5px"><?php echo $row['name']; ?></td>
            <td class="email"><?php echo $row['email']; ?></td>
            <td class="gender"><?php echo $row['gender']; ?></td>
          <td><a href="update_doctor.php?id=<?php echo $row['id']; ?>" class="btn btn-success" style="margin-top: 0px">Update</a></td>
          <td><a href="delete_doctor.php?id=<?php echo $row['id']; ?>" class="btn btn-warning" style="margin-top: 0px">Delete</a></td>
        </tr>

        <?php
      }
    }
    ?>
        </tbody>
      </table>
    </div>
<!-- get doctor data -->
   
            </tbody>
        </table>
    </div>


       <!-- Modal -->
      <form action="./doctor.php" method="post" >
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Doctor</h5>
              </div>
              <div class="modal-body">
          <div class="mb-3">
            <label for="inputDoctorName" class="form-label">Docotr Name</label>
            <input type="text" name="d_name" class="form-control" placeholder="Enter Doctor name" id="inputDoctorName">
          </div>
          <div class="mb-3">
            <label for="inputDoctorEmail" class="form-label">Doctor Email</label>
            <input type="text" name="d_email" class="form-control" placeholder="Enter Doctor email" id="inputDoctorEmail">
          </div>

          <div class="mb-3">
            <label for="inputDoctorGender" class="form-label">Doctor Gender</label>
            <input type="text" name="d_gender" class="form-control" placeholder="Enter Doctor gender" id="inputDoctorGender">
          </div>
        </div>
        <input type="submit" name="add_doctor" value="ADD" class="btn btn-success" style="margin: 0px 15px 10px 15px;">
        </div>
        </div>
        </div>
      </form>

        <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</body>
</html>