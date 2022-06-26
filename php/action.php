<?php
$servername = "localhost";
$username = "root";
$password = "7567702014";
$database="college_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
$id=$_POST['Id'];
$name=$_POST['Name'];
$sem=$_POST['Sem'];
$mobile=$_POST['Phone-Number'];

$sql = "INSERT INTO tblstudent (Id, Name, Sem, Phone_Number)
VALUES ('$id', '$name', $sem, $mobile)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>