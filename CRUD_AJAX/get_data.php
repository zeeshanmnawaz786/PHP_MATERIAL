<?php
include("db.php");

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

echo "<table border='1px solid black' width='70%'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>";

while ($row = mysqli_fetch_array($result)) {
    echo "<tr>
            <td>" . $row["id"] . "</td>
            <td>" . $row["name"] . "</td>
            <td>" . $row["email"] . "</td>
            <td><button id=" . $row["id"] . " class='deleteButton'>Delete</button>
            <button id=" . $row["id"] . " class='updateButton'>Update</button></td>
            </tr>";
        }
        
        echo "</table>";
        ?> 