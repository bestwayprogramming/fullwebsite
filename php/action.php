<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="college_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {0
  die("Connection failed: " . $conn->connect_error);
} 
$id=$_POST['ID'];
$rn=$_POST['ROLL_NO'];
$studname=$_POST['STUD_NAME'];
$email=$_POST['EMAIL_ID'];
$mobile=$_POST['MOBILE_NUMBER'];
$dept=$_POST['DEPARTMENT'];
$sem=$_POST['SEMESTER'];
$dob=$_POST['DATE_OF_BIRTH'];
$ads=$_POST['ADDRESS'];


$sql = "INSERT INTO tblstudent (`ID` ,`ROLL_NO` ,`STUD_NAME` ,`EMAIL_ID` ,`MOBILE_NUMBER` ,`DEPARYTMENT` ,`SEMESTER` ,`DATE_OF_BIRTH` ,`ADDRESS`)
VALUES ('$id','$rn','$studname','$email','$mobile','$dept','$sem','$dob','$ads')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>