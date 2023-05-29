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

   <div class="back">
      <header class="header">
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
         <div class="mid"   style="padding-top:0px">
          <ul class="navbar">
            <li><a href="./patient.php">Patients</a></li>
            <li><a href="../doctor/doctor.php">Doctors</a></li>
            <li><a href="../appoinment/appoinment.php">Appoinments</a></li>
          </ul>
        </div>

        <!-- Right box for buttons -->
                 <div class="right"  style="padding-top:10px">

          <button class="btn">Call Us Now</button>
          <button class="btn">Email Us</button>
        </div>
      </header>
    </div>

    <div class="pat">
      <h1 class="patient m-auto w-25">Patients Update </h1>
   
    </div>

    <?php include("../db/dbconn.php") ?>

    <?php 

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "select * from patients where id = $id";
        $result = mysqli_query($conn, $query);
        if (!$result) {
        echo "No patient found" . mysqli_error($conn);
        }
        else{
        $row = mysqli_fetch_array($result);

        if(isset($_POST['update_patient'])){
        $p_name = $_POST['p_name'];
        $p_email = $_POST['p_email'];
        $p_address = $_POST['p_address'];
        $p_gender = $_POST['p_gender'];

        if ($p_name === '' || $p_email === '' || $p_address === ''  || $p_gender === ''){
            echo '<script>alert("Please fill in all the fields")</script>';
                echo '<script>window.location.href = "./patient.php";</script>';
    }
            else{
                $query = "update patients set name = '$p_name', email = '$p_email', address = '$p_address' , gender = '$p_gender' where id = $id";
                $result = mysqli_query($conn, $query);
                if (!$result) {
                    echo mysqli_error($conn);
                }
                else{
                    header('location:./patient.php');
                    exit();
                }
            }
        }
    ?>
    <div class="m-auto  w-50 ">
        <div class="mb-5  bg-white p-4 rounded">
        <form action="update_patient.php?id=<?php echo $id; ?>" method="post">
                <div class="mb-3">
                <label for="inputPateintName" class="form-label">Patient Name</label>
                <input type="text" name="p_name" value="<?php echo $row['name']; ?>" class="form-control" placeholder="Enter patient name" id="inputPateintName">
            </div>
            <div class="mb-3">
                <label for="inputPateintEmail" class="form-label">Patient Email</label>
                <input type="text" name="p_email" value="<?php echo $row['email']; ?>" class="form-control" placeholder="Enter patient email" id="inputPateintEmail">
            </div>
            <div class="mb-3">
                <label for="inputPateintAddress" class="form-label">Patient Address</label>
                <input type="text" name="p_address" value="<?php echo $row['address']; ?>" class="form-control" placeholder="Enter patient address" id="inputPateintAddress">
            </div>
            <div class="mb-3">
                <label for="inputPateintGender" class="form-label">Patient Gender</label>
                <input type="text" name="p_gender" value="<?php echo $row['gender']; ?>" class="form-control" placeholder="Enter patient gender" id="inputPateintGender">
            </div>
            <input type="submit" name="update_patient" value="UPDATE" class="btn btn-success" style="margin:0px">
        </form>
    </div>
</div>
    <?php 
        }


    
    }
    else{
        echo "No student ID specified";
    }

    ?>

       <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  </body>
</html>
