<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "anish";

// Create a connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Conneccccccction was successful<br>";
}

// Create a db
// $sql = "CREATE DATABASE ashish";
$sql="INSERT INTO `anishs` (`sr`, `name`, `roll`, `class`) VALUES ('5', 'sachin', '3', '4')";
$result = mysqli_query($conn, $sql);

// Check for the database creation success
if($result){
    echo "The db wasssss created successfully!<br>";
}
else{
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}
