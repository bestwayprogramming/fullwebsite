<?php
    include "connection.php";
    $sql="SELECT * FROM `tblstudent`";
    $result=mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <tr>
                <?php 
                while ($row = mysqli_fetch_array($result));
                ?>
            </tr>
    </table>
</body>
</html>