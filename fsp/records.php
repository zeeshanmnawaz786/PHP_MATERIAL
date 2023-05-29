<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="projectt.css">
    <link rel="stylesheet" href="masterlist.php">
    <link rel="stylesheet" href="records.php">
    <link rel="stylesheet" href="report.php">
    <link rel="stylesheet" href="deshboard.php">

    <title>record</title>
</head>
<body>
    <div class="desh">
        <h1>CHMSC Student Management System</h1>
        <a href="index.php" class="deshadmin">LOGOUT</a>
    </div>
    <div class="student">
        <h1>Promoted Student</h1>
    </div>
    <div class="student table">
        <table cellspacing="0">
            <tr>
                <td colspan="4">
                    <strong>Promote Student List</strong>
                </td>
                <td>
                    <button>
                        <a href="form.php">Form</a>
                    </button>
                </td>
            </tr>
            <tr>
            <th>lrn No</th>
            <td>Student Name</td>
            <td>Gender</td>
            <td>Curriculum</td>
            <td>Promoted Student</td>
        </tr>
            </tr>
            <?php
            $i=1;
            $query = mysqli_query($conn, "select * from `sms`");
            while($row = mysqli_fetch_array($query))
            {
        ?>
            <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $row["name"];?></td>
            <td><?php echo $row["gender"];?></td>
            <td><?php echo $row["curriculum"];?></td>


            </tr>
            <?php
        $i++;
            }
        ?>
           
        </table>
    </div>
    <div class="links">
        <a href="deshboard.php"><div class="side">Deshboard</div></a><br><br>
        <a href="masterlist.php"><div class="side">Masterlist</div></a><br><br>
        <a href="records.php"><div class="side">Records</div></a><br><br>
        <a href="report.php"><div class="side">Reports</div></a><br><br>
        <a href="form.php"><div class="side">Form</div></a><br><br>

    </div>
    
</body>
</html>