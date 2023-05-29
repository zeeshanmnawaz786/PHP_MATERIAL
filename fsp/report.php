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

    <title>report</title>
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
        <table cellspacing="0">
            <tr>
                <td colspan="4">
                    <strong>Student Number List</strong>
                </td>
                <td>
                    <button value="submit" class="submitt">Submit</button>        
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="number" class="record">Recordsperpage</td>
                <td colspan="3">Search<input type="text" class="search"></td>
            
            </tr>

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