<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <style>

   
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
body{
    background: url(bg.jpeg);
}
/* form{
    box-shadow: 2px 6px 100px #ffffff;
} */
   
</style>

</head>

<?php
 include('../include/connect.php');
 if(isset($_POST['click']))
 {
  $taxi_for_day = $_POST['tfd'];
  $taxi_for = $_POST['tf'];
  $from_location = $_POST['fl'];
  $destination = $_POST['de'];
  $noof_traveller= $_POST['not'];
  $taxi_id = $_POST['ti'];
  $noof_cars= $_POST['noc'];
  $email_id = $_POST['ei'];
  $suggestions = $_POST['s'];
  $date= $_POST['d'];
  $insert_query = "insert into cab_booking(taxi_for_day,taxi_for,from_location,destination,noof_traveller,taxi_id,noof_cars,email_id,suggestions,date) values ('$taxi_for_day','$taxi_for','$from_location','$destination','$noof_traveller','$taxi_id','$noof_cars','$email_id','$suggestions','$date')";
  if($insert_query)

  {
    echo"<script> alert('found')</script>";
  }
  $result = mysqli_query($con,$insert_query);
  if($result) 
  {  
    echo "<script>alert ('category added successfully')
    </script>";
  }


}

?>

<div class="container-fluid  text-light py-3 ">
<!-- bg-dark -->
       <header class="text-center">
           <h1 class="display-6 text-center w-100">Cab_Booking</h1>
       </header>
   </div>
   <section class="container my-2  w-50 text-light p-2 ">
   <!-- bg-dark -->
<form action="" method="post" class="row g-3 p-3" enctype="multipart/form-data">
        <div class="col-md-4">
            <label for="validationDefault01" class="form-label">Taxi_for_day</label>
            <input type="text" class="form-control" name="tfd" id="validationDefault01" value="" required>
          </div>
          <div class="col-md-4">
            <label for="validationDefault02" class="form-label">Taxi_for</label>
            <input type="text" class="form-control" name="tf" id="validationDefault02" value="" required>
          </div>
          <div class="col-md-4">
            <label for="validationDefaultUsername" class="form-label">From_location</label>
            <div class="input-group">
              <span class="input-group-text" id="inputGroupPrepend2"></span>
              <input type="text" class="form-control" name="fl" id="validationDefault03"  aria-describedby="inputGroupPrepend2" required>
            </div>
          </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Destination</label>
          <input type="text" class="form-control" name="de" id="validationDefault04">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">No_of_Traveller</label>
          <input type="text" class="form-control" name="not" id="validationDefault05">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Taxi_Id</label>
          <input type="text" class="form-control" name="ti" id="validationDefault06" placeholder="">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">No_of_Cars</label>
          <input type="text" class="form-control" name="noc" id="validationDefault07" placeholder="">
        </div>
        <div class="col-md-4">
          <label for="inputCity" class="form-label">Email_Id</label>
          <input type="email" class="form-control" name="ei" id="inputemail">
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">suggestions</label>
          <input type="text" class="form-control" name="s" id="validationDefault07">
          
        </div>
        <div class="col-md-4">
          <label for="inputZip" class="form-label">Date</label>
          <input type="date" class="form-control" name="d" id="inputdate">
        </div>
        
        <div class="col-12">
        
      

          <button type="submit" class="btn btn-primary" name="click">Save</button>
        </div>
      



   





      


</form>
</section>
</body>
</html>