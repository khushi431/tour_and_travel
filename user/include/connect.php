
<?php
$con=mysqli_connect('localhost','root','','tour_and_travel');

// if(mysqli_connect_error()){
//     echo"<script>alert('cannot connect to the database');</script>";
//     exit();
// }

if($con)
{
    echo"connection successful for video";
}
else{
    echo"connection not successful";
}
?>