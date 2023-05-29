<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- Bootstrap CSS -->
  
  <link rel="stylesheet" href="../dashboard.html" />
  <link rel="stylesheet" href="../navbar.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Patient</title>

    <link rel="stylesheet" href="../css/appoinment.css" />
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
         <div class="mid" style="padding-top:0px">
          <ul class="navbar">
            <li><a href="../patient/patient.php">Patients</a></li>
            <li><a href="../doctor/doctor.php">Doctors</a></li>
            <li><a href="./appoinment.php">Appoinments</a></li>
          </ul>
        </div>

        <!-- Right box for buttons -->
                 <div class="right"  style="padding-top:10px">

          <button class="btn">Call Us Now</button>
          <button class="btn">Email Us</button>
        </div>
      </header>
    </div>

   <div class="appoinment mt-3 mb-4">
        <h1 class="appoinment m-auto w-50 " style="padding: 5px 130px">Appoinment Update</h1>
        <div>
    </div>
    </div>

    <?php include("../db/dbconn.php") ?>

    <?php 

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "select * from appoinment where id = $id";
        $result = mysqli_query($conn, $query);
        if (!$result) {
        echo "No appoinment found" . mysqli_error($conn);
        }
        else{
        $row = mysqli_fetch_array($result);

        if(isset($_POST['update_appoinment'])){
            $p_name = $_POST['p_name'];
            $d_name = $_POST['d_name'];
            $day = $_POST['day'];
            $start_time = $_POST['start_time'];
            $end_time = $_POST['end_time'];

            if ($p_name === '' || $d_name === '' || $day === ''  || $start_time === ''  || $end_time === ''){
                echo '<script>alert("Please fill in all the fields")</script>';
                    echo '<script>window.location.href = "./appoinment.php";</script>';
            }
            else{
                $query = "update appoinment set p_name = '$p_name', d_name = '$d_name', day = '$day' , start_time = '$start_time', end_time = '$end_time' where id = $id";
                $result = mysqli_query($conn, $query);
                if (!$result) {
                    echo mysqli_error($conn);
                }
                else{
                    header('location:./appoinment.php');
                    exit();
                }
            }
        }
    ?>
    <div class="m-auto  w-50 ">
        <div class="mb-5 bg-white p-4 rounded">
        <form action="update_appoinment.php?id=<?php echo $id; ?>" method="post">
            <div class="mb-3">
                <label for="inputPateintName" class="form-label">Patient Name</label>
                <input type="text" name="p_name" value="<?php echo $row['p_name']; ?>" class="form-control" id="inputPateintName">
            </div>
            <div class="mb-3">
                <label for="inputDoctorName" class="form-label">Doctor Name</label>
                <input type="text" name="d_name" value="<?php echo $row['d_name']; ?>" class="form-control" id="inputDoctorName">
            </div>
            <div class="mb-3">
                <label for="inputDay" class="form-label">Day</label>
                <input type="text" name="day" value="<?php echo $row['day']; ?>" class="form-control" id="inputDay">
            </div>
            <div class="mb-3">
                <label for="inputStartTime" class="form-label">Start Time</label>
                <input type="text" name="start_time" value="<?php echo $row['start_time']; ?>" class="form-control" id="inputStartTime">
            </div>
            <div class="mb-3">
                <label for="inputEndTime" class="form-label">End Time</label>
                <input type="text" name="end_time" value="<?php echo $row['end_time']; ?>" class="form-control" id="inputEndTime">
            </div>
            <input type="submit" name="update_appoinment" value="UPDATE" class="btn btn-success" style="margin:0px">
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
