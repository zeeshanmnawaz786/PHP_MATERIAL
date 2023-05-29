<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- Bootstrap CSS -->
  
  <link rel="stylesheet" href="../dashboard.html" />
  <link rel="stylesheet" href="../navbar.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Patient</title>

    <link rel="stylesheet" href="../css/patient.css" />
  </head>

  <body>

     <?php include("../db/dbconn.php") ?>


     <!-- insert patient data -->
<?php
if(isset($_POST['add_patient'])){
    $p_name = $_POST['p_name'];
    $p_email = $_POST['p_email'];
    $p_address = $_POST['p_address'];
    $p_gender = $_POST['p_gender'];

    if ($p_name === '' || $p_email === '' || $p_address === ''  || $p_gender === ''){
        echo '<script>alert("Please fill in all the fields")</script>';
            echo '<script>window.location.href = "./patient.php";</script>';
    }
    else{
        $query = "insert into patients values(null, '$p_name', '$p_email', '$p_address', '$p_gender')";
        $result = mysqli_query($conn, $query);
    
        if($result){
            echo '<script>window.location.href = "patient.php";</script>';
        }
        else{
            echo '<script>alert("Something went wrong")</script>';
        }
    }
}
?>
     <!-- insert patient data -->

    <div class="back" >
      <header class="header" >
        <!-- Left box for logo -->
        <div class="left">
          <img src="../Images/HMS logo.jpg" alt="" />
                          <div>
                  <a href="../dashboard.php">
                    HOSPITAL MANAGEMENT
                  </a>
                </div>
        </div>

        <!-- Mid box for nav bar -->
        <div class="mid" style="padding-top:0px">
          <ul class="navbar" >
            <li><a href="./patient.php">Patients</a></li>
            <li><a href="../doctor/doctor.php">Doctors</a></li>
            <li><a href="../appoinment/appoinment.php" >Appoinments</a></li>
          </ul>
        </div>

        <!-- Right box for buttons -->
        <div class="right" style="padding-top:10px">
          <button class="btn">Call Us Now</button>
          <button class="btn">Email Us</button>
        </div>
      </header>
    </div>

    <div class="pat">
      <h1 class="patient">Patients </h1>
      <div>
        <button class="btn btn-danger" style="margin-top: 0px" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Patient</button>
      </div>
    </div>

    <div class="tab">
      <table width="100%">
        <tr id="head">
          <th>Patient_ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Address</th>
          <th>Gender</th>
          <th>Update</th>
          <th>Delete</th>
        </tr>

        <tbody>

<!-- get patient data -->

    <?php
    $query = "select * from patients";
    $result = mysqli_query($conn, $query);
    if (!$result) {
      echo "No patient found".mysqli_error($conn);
    }
    else{
      while($row = mysqli_fetch_array($result)){
        ?>
          <tr>
            <td class="no"><?php echo $row['id']; ?></td>
            <td class="name" style="margin-top: 5px"><?php echo $row['name']; ?></td>
            <td class="email"><?php echo $row['email']; ?></td>
            <td class="add"><?php echo $row['address']; ?></td>
            <td class="gender"><?php echo $row['gender']; ?></td>
          <td><a href="update_patient.php?id=<?php echo $row['id']; ?>" class="btn btn-success" style="margin-top: 0px">Update</a></td>
          <td><a href="delete_patient.php?id=<?php echo $row['id']; ?>" class="btn btn-warning" style="margin-top: 0px">Delete</a></td>
        </tr>

        <?php
      }
    }
    ?>
        </tbody>
      </table>
    </div>
<!-- get patient data -->


    <!-- Modal -->
      <form action="patient.php" method="post" >
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Patient</h5>
              </div>
              <div class="modal-body">
          <div class="mb-3">
            <label for="inputPateintName" class="form-label">Patient Name</label>
            <input type="text" name="p_name" class="form-control" placeholder="Enter patient name" id="inputPateintName">
          </div>
          <div class="mb-3">
            <label for="inputPateintEmail" class="form-label">Patient Email</label>
            <input type="text" name="p_email" class="form-control" placeholder="Enter patient email" id="inputPateintEmail">
          </div>
          <div class="mb-3">
            <label for="inputPateintAddress" class="form-label">Patient Address</label>
            <input type="text" name="p_address" class="form-control" placeholder="Enter patient address" id="inputPateintAddress">
          </div>
          <div class="mb-3">
            <label for="inputPateintGender" class="form-label">Patient Gender</label>
            <input type="text" name="p_gender" class="form-control" placeholder="Enter patient gender" id="inputPateintGender">
          </div>
        </div>
        <input type="submit" name="add_patient" value="ADD" class="btn btn-success" style="margin: 0px 15px 10px 15px;">
        </div>
        </div>
        </div>
      </form>

        <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  </body>
</html>
