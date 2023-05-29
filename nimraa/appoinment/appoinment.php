<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../dashboard.php">
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../css/appoinment.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Appoinments</title>

</head>

<body>

     <?php include("../db/dbconn.php") ?>

          <!-- insert appoinment data -->
<?php
if(isset($_POST['add_appoinment'])){
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
        $query = "insert into appoinment values(null, '$p_name', '$d_name', '$day', '$start_time', '$end_time')";
        $result = mysqli_query($conn, $query);
    
        if($result){
            echo '<script>window.location.href = "./appoinment.php";</script>';
        }
        else{
            echo '<script>alert("Something went wrong")</script>';
        }
    }
}
?>
     <!-- insert appoinment data -->

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
                    <li> <a href="../doctor/doctor.php" >Doctors</a></li>
                    <li> <a href="./appoinment.php" >Appoinments</a></li>
                </ul>
            </div>
    
            <!-- Right box for buttons -->
            <div class="right"  style="padding-top:10px">

                <button class="btn">Call Us Now</button>
                <button class="btn">Email Us</button>
            </div>
        </header>
    </div>

    <div class="appt">
        <h1 class="appoinment">Appoinments</h1>
        <div>
        <button class="btn btn-danger" style="margin-top: 0px" data-bs-toggle="modal" data-bs-target="#exampleModal">Create </button>
    </div>
    </div>

    <div class="tab">
        <table width="100%">
            <tr id="head">
                <th>Appt_ID</th>
                <th>Patient Name</th>
                <th>Doctor Name</th>
                <th>Day</th>
                <th>Start Time</th>
                <th>EndTime</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>

            <tbody>

<!-- get appoinment data -->

    <?php
    $query = "select * from appoinment";
    $result = mysqli_query($conn, $query);
    if (!$result) {
      echo "No Appoinment found".mysqli_error($conn);
    }
    else{
      while($row = mysqli_fetch_array($result)){
        ?>
          <tr>
            <td class="no"><?php echo $row['id']; ?></td>
            <td class="p_name" style="margin-top: 5px"><?php echo $row['p_name']; ?></td>
            <td class="d_name" style="margin-top: 5px"><?php echo $row['d_name']; ?></td>
            <td class="day"><?php echo $row['day']; ?></td>
            <td class="start_time"><?php echo $row['start_time']; ?></td>
            <td class="end_time"><?php echo $row['end_time']; ?></td>
          <td><a href="update_appoinment.php?id=<?php echo $row['id']; ?>" class="btn btn-success" style="margin-top: 0px">Update</a></td>
          <td><a href="delete_appoinment.php?id=<?php echo $row['id']; ?>" class="btn btn-warning" style="margin-top: 0px">Delete</a></td>
        </tr>

        <?php
      }
    }
    ?>
        </tbody>
      </table>
    </div>
<!-- get appoinment data -->

    </tbody>
        </table>
    </div>
       <!-- Modal -->
      <form action="./appoinment.php" method="post" >
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Appoinment</h5>
              </div>
              <div class="modal-body">
   
              <!-- patients name fetch -->

           <?php
              $query = "SELECT name FROM patients";
              $result = mysqli_query($conn, $query);
              
              if (!$result) {
                echo "No Patients found: " . mysqli_error($conn);
              } else {
                // Start the dropdown menu
                echo '<select name="p_name" style="display: block; width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #212529; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem; transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;">';

                // Loop through each row and add the name to the dropdown
                while ($row = mysqli_fetch_assoc($result)) {
                  echo '<option value="' . $row["name"] . '" >' . $row["name"] . '</option>';
                }

                // End the dropdown menu
                echo '</select>';
              }
          ?>


          <!-- doctors fetch -->
          <label for="inputDoctorName" class="form-label">Doctor Name</label>
          <?php
              $query = "SELECT name FROM doctor";
              $result = mysqli_query($conn, $query);
              
              if (!$result) {
                echo "No Appointment found: " . mysqli_error($conn);
              } else {
                // Start the dropdown menu
                echo '<select name="d_name" style="display: block; width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #212529; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem; transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;">';

                // Loop through each row and add the name to the dropdown
                while ($row = mysqli_fetch_assoc($result)) {
                  echo '<option value="' . $row["name"] . '" >' . $row["name"] . '</option>';
                }

                // End the dropdown menu
                echo '</select>';
              }
          ?>


          <div class="mb-3">
            <label for="inputDay" class="form-label">Day</label><br/>
            <select name="day"  class="form-select" aria-label="Default select example" id="inputDay" style="display: block; width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #212529; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem; transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;">
              <option selected>select Day</option>
              <option value="Monday">Monday</option>
              <option value="Tuesday">Tuesday</option>
              <option value="Wednesday">Wednesday</option>
              <option value="Thursday">Thursday</option>
              <option value="Friday">Friday</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="inputStartTime" class="form-label">Start Time</label>
            <input type="time" name="start_time" class="form-control" id="inputStartTime">
          </div>
          <div class="mb-3">
            <label for="inputEndTime" class="form-label">End Time</label>
            <input type="time" name="end_time" class="form-control" id="inputEndTime">
          </div>
        </div>
        <input type="submit" name="add_appoinment" value="ADD" class="btn btn-success" style="margin: 0px 15px 10px 15px;">
        </div>
        </div>
        </div>
      </form>

        <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  </body>
</html>
