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

   
h1{
      text-align: center;
    }
    body{
  background: url(waterfall.jpg);
  background-size: cover;
    background-position: center;
  background-repeat: no-repeat;
}
.container-fluid{
  width: 50%;
  height: 60vh;
  margin-top: 2%;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-radius: 20px;
    border:1px solid rgba(255, 255, 255, 0.18);
    box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);

}
.display-6{
  margin-top: 10%;
}
</style>

</head>
<?php
include('../include/connect.php');
$id=$_GET['updateid'];
if(isset($_POST['click']))
{
   
  $tour_id = $_POST['tfd'];
  $day = $_POST['tf'];
  $day_detail = $_POST['fl'];
  
   
    $sql="update tour_details set tour_id='$tour_id',day='$day',day_detail='$day_detail' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result) 
    {
      echo"<script> alert('data inserted successfully')
      </script>";
      // window.location.href='admin.php?insert_display4';
      }
      else{
        die(mysqli_error($con));
      }

    }
    

?>

   <body>
    
  

   <div class="container-fluid  text-light py-3 ">
<!-- bg-dark -->
      
           <h1 class="display-6 text-center w-100">Tour_Details</h1>
      
   
   <section class="container my-2  w-50 text-light p-2 ">
   <!-- bg-dark -->
<form action="" method="post" class="row g-3 p-3" enctype="multipart/form-data">
<div class="col-md-12">
          <label for="inputAddress" >Select Tour name</label>
    
          
          <?php
 $query = ("select * from tour_table");
 $run = mysqli_query($con, $query);
 $rowcount = mysqli_num_rows($run);
 ?>  
   
      <select  class="form-control" name="tfd">
     
  <option selected>Select Tour name</option>
  <?php
  for($i=1;$i<=$rowcount;$i++)
  {
    $row=mysqli_fetch_array($run);
  
  ?> 
 <option value="<?php echo  $row["tour_id"] ?>"><?php echo  $row["tour_name"] ?> </option>
  <?php
  }
  ?>
  </select>
        </div>
        
          
        <div class="col-md-6">
          <label for="inputState"  class="form-label">no_of_days</label>
          <select name="tf" id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option>Sunday</option>
            <option>Monday</option>
            <option>Tuesday</option>
            <option>Wednesday</option>
            <option>Thursday</option>
            <option>Friday</option>
            <option>Saturday</option>
          </select>
        </div>


     
       
       
        
        <div class="col-md-6">
            <label for="validationDefault01" class="form-label">Day_Detail</label>
            <input type="text" class="form-control" name="fl" id="validationDefault01" value="" required>
          </div>


       
        <div class="col-12">
        
      

          <button type="submit" class="btn btn-primary" name="click">Save</button>
        </div>
      




   


</div>


      


</form>
</body>
</html>