<?php
echo "Welcome to the stage where we are ready to get connected to a database <br>";
/* 
Ways to connect to a MySQL Database
1. MySQLi extension
2. PDO
*/
// Connecting to the Database
// $servername = "localhost";
// $username = "root";
// $password = "";
 
// Create a connection
$conn = mysqli_connect('localhost', 'root');

// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful";
}
$query = mysqli_query($conn, "SELECT * FROM ashish");
if (!$query) {
    die(mysqli_error($conn));
}
if (mysqli_num_rows($query) > 0) {
    while ($rowdata = mysqli_fetch_assoc($query)) {
        echo '</br>';
        echo "Student Roll Number:-" . '&nbsp;' . '&nbsp;' . $rowdata["rollno"] ;
        echo "Student Name:-" . '&nbsp;' . '&nbsp;' . $rowdata["name"];
    }
}
