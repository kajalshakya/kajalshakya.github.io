<?php

$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
echo "$firstname";

$servername = "localhost";
$username = "root";
$password = "";
$database="kajaldb";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql = "INSERT INTO name (firstname, lastname)
VALUES ( '$firstname', '$lastname')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



?>
