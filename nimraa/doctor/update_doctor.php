<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- Bootstrap CSS -->
  
  <link rel="stylesheet" href="../dashboard.html" />
  <link rel="stylesheet" href="../navbar.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Doctor</title>

    <link rel="stylesheet" href="../css/doctor.css" />
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
            <li><a href="../patient/patient.php"a>Patients</a></li>
            <li><a href="./doctor.php">Doctors</a></li>
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
        <h1 class="doctor doct m-auto w-50 " style="padding: 5px 130px">Doctor Update</h1>
              <div>
      </div>
    </div>

    <?php include("../db/dbconn.php") ?>

    <?php 

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "select * from doctor where id = $id";
        $result = mysqli_query($conn, $query);
        if (!$result) {
        echo "No docotr found" . mysqli_error($conn);
        }
        else{
        $row = mysqli_fetch_array($result);

        if(isset($_POST['update_doctor'])){
        $d_name = $_POST['d_name'];
        $d_email = $_POST['d_email'];
        $d_gender = $_POST['d_gender'];

        if ($d_name === '' || $d_email === ''  || $d_gender === ''){
            echo '<script>alert("Please fill in all the fields")</script>';
                echo '<script>window.location.href = "./doctor.php";</script>';
    }
            else{
                $query = "update doctor set name = '$d_name', email = '$d_email', gender = '$d_gender' where id = $id";
                $result = mysqli_query($conn, $query);
                if (!$result) {
                    echo mysqli_error($conn);
                }
                else{
                    header('location:./doctor.php');
                    exit();
                }
            }
        }
    ?>
    <div class="m-auto  w-50 ">
        <div class="mb-5  bg-white p-4 rounded">
        <form action="update_doctor.php?id=<?php echo $id; ?>" method="post">
                <div class="mb-3">
                <label for="inputDoctorName" class="form-label">Doctor Name</label>
                <input type="text" name="d_name" value="<?php echo $row['name']; ?>" class="form-control" placeholder="Enter Doctor name" id="inputDoctorName">
            </div>
            <div class="mb-3">
                <label for="inputDoctorEmail" class="form-label">Doctor Email</label>
                <input type="text" name="d_email" value="<?php echo $row['email']; ?>" class="form-control" placeholder="Enter Doctor email" id="inputDoctorEmail">
            </div>
            <div class="mb-3">
                <label for="inputDoctorGender" class="form-label">Doctor Gender</label>
                <input type="text" name="d_gender" value="<?php echo $row['gender']; ?>" class="form-control" placeholder="Enter Doctor gender" id="inputDoctorGender">
            </div>
            <input type="submit" name="update_doctor" value="UPDATE" class="btn btn-success" style="margin:0px">
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
