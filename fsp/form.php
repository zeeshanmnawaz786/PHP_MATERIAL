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
        <h1>Student Search Record</h1>
    </div>
    <div class="student table">

        <form action="insert.php" method="post">
            
            <label>Student Name</label>
            <input type="text" name="name" placeholder="Enter Student Name" /><br><br>
            <label>Gender</label>
            <select class="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <label>Curriculum</label>
            <input type="text" name="curriculum" placeholder="curruculum" /><br><br>
            <label>Numbers</label>
            <input type="number" name="number"/><br><br>
            <input type="submit" name="btn" value="submit" />
            
        </form>
    </div>
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