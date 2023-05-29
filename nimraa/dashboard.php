<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management Admin Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="./css/dashboard.css">
</head>

<body>


    <section id="menu" class="active">
        <div class="logo">
            <img src="Images/HMS logo.jpg">
            <h2>Hospital Admin Panel</h2>
        </div>
        <div class="items">
            <li><i class="fa-solid fa-table-columns"></i><a href="./dashboard.php">Dashboard</a></li>
            <li><i class="fa-solid fa-bed"></i><a href="./patient/patient.php" >Patient</a></li>
            <li><i class="fa-solid fa-user-doctor"></i><a href="./doctor/doctor.php" >Doctor</a></li>
            <li><i class="fa-sharp fa-regular fa-calendar-check"></i><a href="./appoinment/appoinment.php">Appoinment</a></li>
            <li><i class="fa-solid fa-house"></i><a href="about.html" target="_blank">About</a></li>
            <li><i class="fa-solid fa-phone"></i></i><a href="contact.html" target="_blank">Contact</a></li>
        </div>
    </section>

    <section id="interface">
        <div class="nav">
            <div class="n1">
                <div>
                    <i id="btn" class="fa-solid fa-bars"></i>
                </div>
                <div class="search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Search">
                </div>
            </div>

            <div class="profile">
                <label>Profile</label>
                <img src="Images/Profile img.png" alt="">
            </div>
        </div>

        <h2 class="name">Dashboard</h2>
        
        <div class="val">
            <div class="val1">
                <i class="fa-sharp fa-solid fa-bed-pulse"></i>
                <div>
                    <h3>12,786</h3>
                    <a href="patient.html" target="_blank">Patients</a>
                </div>
            </div>
            <div class="val1">
                <i class="fa-solid fa-stethoscope"></i>
                <div>
                    <h3>150</h3>
                    <a href="doctor.html" target="_blank">Doctors</a>
                </div>
            </div>
            <div class="val1">
                <i class="fa-sharp fa-regular fa-calendar-check"></i>
                <div>
                    <h3>1,259</h3>
                    <a href="appoinment.html" target="_blank">Appoinments</a>
                </div>
            </div>
   
        </div>

        <div class="table">
            <table width="100%">
                <thead>
                    <tr>
                        <th class="head" colspan="6"><h2> All Appoinment</h2></th>
                    </tr>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Doctor Name</td>
                        <td>Day</td>
                        <td>Start Time</td>
                        <td>End Time</td>
                    </tr>
                </thead>
                <tbody>
     <?php include("./db/dbconn.php") ?>

                
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
    </section>
</body>

</html>