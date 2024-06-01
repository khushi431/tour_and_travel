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
  background: url(tour.jpg);
  background-size: cover;
    /* background-position: center; */
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
  margin-top: 1%;
}

/* form{
    box-shadow: 2px 6px 100px #ffffff;
} */
   
</style>

</head>

<?php
 include('../include/connect.php');
 if(isset($_POST['click']))
 { $Booking_id = $_POST['tfd'];
    $Card_type = $_POST['tf'];
    $Card_nunber = $_POST['fl'];
    $name = $_POST['de'];
    $amount= $_POST['not'];
    $exp_date = $_POST['ti'];
    $payment_by_user= $_POST['noc'];
   
    $insert_query = "insert into payment_table(Booking_id,Card_type,Card_nunber,name,amount,exp_date,payment_by_user) values ('$Booking_id','$Card_type','$Card_nunber','$name','$amount','$exp_date','$payment_by_user')";
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
<body>
<div class="container-fluid  text-light ">
<!-- bg-dark -->
      
           <h1 class="display-6 text-center w-100 ">Payment</h1>
      
   
   <section class="container my-2  w-70 text-light p-2 ">
   <!-- bg-dark -->
<form action="" method="post" class="row g-3 p-3" enctype="multipart/form-data">
 
        
<div class="col-md-4">
         
         <label for="inputAddress" class="form-label" >Select Booking id</label>
  
        
        <?php
$query = ("SELECT * FROM tour_booking");
$run = mysqli_query($con, $query);
$rowcount = mysqli_num_rows($run);
?>  
 
    <select  class="form-control" name="tfd">
   
<option selected>Select Booking name</option>
<?php
for($i=1;$i<=$rowcount;$i++)
{
  $row=mysqli_fetch_array($run);

?> 
<option value="<?php echo  $row["booking_id"] ?>"><?php echo  $row["name"] ?> </option>
<?php
}
?>
</select>
      </div>
    
     
          <div class="col-md-4">
            <label for="validationDefault02" class="form-label">Card_type</label>
          <select name="tf" id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option>4</option>
            <option>8</option>
            
          </select>
             </div>
          <div class="col-md-4">
            <label for="validationDefaultUsername" class="form-label">Card_nunber</label>
            <div class="input-group">
              <input type="text" class="form-control" name="fl" id="validationDefault03"  aria-describedby="inputGroupPrepend2" required>
            </div>
          </div>
          
          <div class="col-md-6">
          <label for="inputPassword4" class="form-label">name</label>
          <input type="text" class="form-control" name="de" id="validationDefault05">
        </div>
        
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">amount</label>
          <input type="text" class="form-control" name="not" id="validationDefault05">
        </div>
        <div class="col-6">
          <label for="inputAddress" class="form-label">exp_date</label>
          <input type="date" class="form-control" name="ti" id="validationDefault06" placeholder="">
        </div>
        <div class="col-6">
          <label for="inputAddress2" class="form-label">payment_by_user</label>
          <input type="text" class="form-control" name="noc" id="validationDefault07" placeholder="">
        </div>
          



       
        <div class="col-12">
        
      

          <button type="submit" class="btn btn-primary" name="click">Save</button>
        </div>
      

        </div>


   





      


</form>
</body>
</html>