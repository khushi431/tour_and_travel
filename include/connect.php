<?php
$con=mysqli_connect('localhost','root','','tour and travel');

// if(mysqli_connect_error()){
//     echo"<script>alert('cannot connect to the database');</script>";
//     exit();
// }

if($con)
{
    // echo"connection successful";
}
else{
    echo"connection not successful";
}
?>