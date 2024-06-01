<?php
 include('../include/connect.php');
 session_start();
 if(isset($_POST['click']))
 {
  
    if(!empty($_POST['user_name']) && !empty($_POST['password']))
    {
        $get_username=mysqli_real_escape_string($con,$_POST['user_name']);
        $get_password=mysqli_real_escape_string($con,$_POST['password']);
        $sql="SELECT * FROM user_login_table WHERE user_name= '$get_username' AND password = '$get_password' ";

        if($result=mysqli_query($con,$sql)){

            if(mysqli_num_rows($result)==1)
            {
              echo"<script> alert('valid')</script>"; 
            }
            else
            {
              echo"<script> alert('invalid')</script>";
            }               
        }
      }
     

}

?>

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
    background:url(bg.jpeg);
}
.remember-forgot{
  margin-top: 5%;
    font-size: .9em;
    
    /* color: #162938; */
    font-weight: 500;
    /* margin: -15px 0 15px; */
    display: flex;
   
     }

     .remember-forgot a:hover{
      text-decoration: underline;
    }
    .remember-forgot a{
      color: white;
      text-decoration: none;
      margin-left: 50%;
    }
    
    .login-register{
      font-size: .9em;
      font-weight: 500;
      margin-top: 3%;
    }
    .login-register p a{
     color: white;
     text-decoration: none;
     font-weight: 600;
    }
    .login-register p a:hover{
      text-decoration: underline;
    }

   
</style>

</head>


<body>
<div class="container-fluid  text-light py-3 ">
<!-- bg-dark -->
       <header class="text-center">
           <h1 class="display-6">User_Login</h1>
       </header>
   </div>
   <section class="container my-2  w-50 text-light p-2  ">
   <!-- bg-dark -->
    
<form action="" method="post" class="row g-3 p-3" enctype="multipart/form-data">
        <div class="col-md-4">
            <label for="validationDefault01" class="form-label">User_Name</label>
            <input type="text" class="form-control"  name="user_name" id="validationDefault01" value="" required>
          </div>
          
        
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="validationDefault05" aria-describedby="inputGroupPrepend2" required>
        </div>
        
        <div class="col-12">
        
        <div class="remember-forgot">
        <label><input type="checkbox">
        Remember me</label>
        <a href="#">Forgot Password?</a>
      </div>
       <div class="login-register">
      <p>Don't have an account?
        <a href="User_Registration.php" class="register-link">Register</a></p>
    </div>

    <input type="submit" class="btn btn-primary"  name="click" value="Login">
   </div>
      




   





      


</form>
</section>
</body>
</html>