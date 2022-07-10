<?php
    $conn = new mysqli("localhost","root","","collegedb");
    if($conn){
        echo "Connection established";
    }else{
        echo "Connection failed".mysqli_error($conn);
    }
?>