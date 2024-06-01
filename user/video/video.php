<?php
 include('../include/connect.php');
 session_start();
 if(isset($_POST['click1']))
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

 <?php

 if(isset($_POST['click']))
 {
  $user_name = $_POST['tfd'];
  $email_id = $_POST['tf'];
  $mobile_no = $_POST['fl'];
  $password = $_POST['de'];
  
  $insert_query = "insert into user_registration_table(user_name,email,mobile_number,password) values ('$user_name','$email_id','$mobile_no','$password')";
  $insert_query1 ="insert into user_login_table(user_name,password) values('$user_name','$password')";
 $result = mysqli_query($con,$insert_query);
  $result1 = mysqli_query($con,$insert_query1);
  
  if($insert_query)

  {
    echo"<script> alert('found')</script>";
  }
  $result = mysqli_query($con,$insert_query);
  if($result) 
  {  
    echo"<script> alert('user registered not successfully')</script>";

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
  <!-- style.css link -->
  <link rel="stylesheet" href="styles.css">
   <!-- Link Swiper's CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  
</head>
<body>
 

  <header id="navbar">
    <h2  class="brand" style="cursor:pointer;">Tourist</a></h2>
     
      <div class="menu-btn"></div>

      <div class="navigation">
      <div  class="navigation-item">
      <a  href="\tour and travel\user\video\video.php">HOME</a>
      <a href="\tour and travel\user\video\tour.php">Tour</a>
      <a href="\tour and travel\user\cab_booking.php">Cabs</a>
      <a href="\tour and travel\user\hotel_booking.php">Hotel</a>
      <a href="\tour and travel\user\feedback_table.php">Feedback</a>
      <a  href="\tour and travel\admin\admin_login.php">Admin</a>
      
      <button  class="nav1" >Login</button>
      </div>
      </div>
      <button  class="nav" >Login</button>


    
    
  </header>
  <div class="overlay" onclick="closeModal()"> </div>
  

<div class="wrapper">

 
  <span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>
  <div class="form-box  login">
    <h2>Login</h2>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="input-box">
        <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
        <input type="text" name="user_name" required>
        <label>User_Name</label>
      </div>
      <div class="input-box">
        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
        <input type="password" name="password" required>
        <label>Password</label>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">
        Remember me</label>
        <a href="#">Forgot Password?</a>
      </div>
      <input type="submit" class="btn"  name="click1" value="Login">
    <div class="login-register">
      <p>Don't have an account?
        <a href="#" class="register-link">Register</a></p>
    </div>
    </form>
  </div>
 
  <div class="form-box  register">
    <h2>Registration</h2>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="input-box">
        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
        <input type="text" name="tfd" required>
        <label>Username</label>
      </div>
      <div class="input-box">
        <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
        <input type="email" name="tf" required>
        <label>Email</label>
      </div>
      <div class="input-box">
        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
        <input type="text" name="fl" required>
        <label>Mobile_No</label>
      </div>
      <div class="input-box">
        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
        <input type="password" name="de" required>
        <label>Password</label>
      </div>
      <div class="remember-forgot">
        <label class="rember"><input type="checkbox">
          I agree to the terms & conditions</label>
     </div>
      <input type="submit" class="btn"  name="click" value="Register">
    <div class="login-register">
      <p>Already have an account?
        <a href="#" name="click" class="login-link">Login</a></p>
    </div>
  
  </div>
</form>
</div>


  
  <div class="box1 box">
    <video autoplay loop muted plays-inline >
      <source src="nav2,mp4.mp4" type="video/mp4">
    </video>
      <h1>India </h1>
     <a href=""> <button style="z-index:-1;cursor:pointer;" class="red">Explore</button></a>

    </div>

<!-- menu button calling in  java script code -->
    <script type="text/javascript" src="script6.js"> </script>

      <!-- Login form colling up to down -->
<script src="script4.js"></script>

<!-- scroll bar colling with color -->
<script src="script5.js">
  
</script>

<!-- login button transfer to registration form -->
<script src="script.js">

</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>



  <div class="nac">
   <div class="about2">Top destinations in India</div>
   <div class="about3">TAKE A LOOK AT THESE OFFERS</div>

   <div class="container">
       
    <div class="card">
          <div class="imgbox">
            <img  src="\tour and travel\user\video\images\Jodhpur.jpg">
        </div>
        <div class="content" >
          <h2>From $890</h2>
          <h5>Paris, France</h5>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum minima soluta sunt ad ipsam. </p>

        </div>
    </div>
    <div class="card">
        <div class="imgbox">
            <img src="\tour and travel\user\video\images\tajmhal.jpg">
        </div>
        <div class="content" >
          <h2>From $890</h2>
          <h5>Paris, France</h5>
                     <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum minima soluta sunt ad ipsam. </p>

        </div>
    </div>
    <div class="card">
        <div class="imgbox">
            <img src="\tour and travel\user\video\images\C2IMzjJUkAA1xU6.jpg">
        </div>
        <div class="content" >
          <h2>From $890</h2>
          <h5>Paris, France</h5>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum minima soluta sunt ad ipsam. </p>

        </div>
    </div>
    <div class="card">
        <div class="imgbox">
            <img src="\tour and travel\user\video\images\hmdef.webp">
        </div>
        <div class="content" >
          <h2>From $890</h2>
          <h5>Paris, France</h5>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum minima soluta sunt ad ipsam. </p>

        </div>
    </div>
  </div>
  </div>
  


<div class="har">

  <div class="garov">
<div class="har1"><img src="images/last_logo.png.webp" alt=""></div>
 
<div class="har2"></div>

</div>
</div>


  <div class="nac1">
    <div class="about2">Popular destinations in 2018</div>
    <div class="about3">TAKE A LOOK AT THESE OFFERS</div>
 
    <div class="container1">
        
     <div class="card1">
           <div class="imgbox1">
             <img src="\tour and travel\user\video\images\goa.webp">
             
         </div>
         <div class="content1">
          <h2   class="harms">From $890</h2>
          <h5 class="harms2">Paris, France</h5>
            
        </div>
        
     </div>
     <div class="card1">
         <div class="imgbox1">
             <img src="\tour and travel\user\video\images\old.jpg">
         </div>
         <div class="content1">
          <h2 class="harms">From $890</h2>
          <h5 class="harms2">Paris, France</h5>
            
        </div>
         
     </div>
     <div class="card1">
         <div class="imgbox1">
             <img src="\tour and travel\user\video\images\mumbai.jpg">
         </div>
         <div class="content1">
          <h2 class="harms2">From $890</h2>
          <h5 class="harms">Paris, France</h5>
            
        </div>
    </div>
     <div class="card1">
         <div class="imgbox1">
             <img src="\tour and travel\user\video\images\jaipur.jpg">
         </div>
         <div class="content1">
          <h2 class="harms2">From $890</h2>
          <h5 class="harms">Paris, France</h5>
            
        </div>
     </div>
     <div class="card1">
      <div class="imgbox1">
          <img src="\tour and travel\user\video\images\agra.jpg">
      </div>
      <div class="content1">
        <h2 class="harms2">From $890</h2>
        <h5 class="harms">Paris, France</h5>
          
      </div>
   </div>
   
   <div class="card1">
    <div class="imgbox1">
        <img src="\tour and travel\user\video\images\best place.jpg">
       
    </div>
    <div class="content1">
      <h2 class="harms2">From $890</h2>
      <h5 class="harms">Paris, France</h5>
        
    </div>
 </div>
 <div class="card1">
  <div class="imgbox1">
      <img src="\tour and travel\user\video\images\hmdef.webp">
      
  </div>
  <div class="content1">
    <h2 class="harms2">From $890</h2>
    <h5 class="harms">Paris, France</h5>
      
  </div>
</div>
<div class="card1">
  <div class="imgbox1">
      <img src="\tour and travel\user\video\images\Charminar_hyderabad.jpg">
  </div>
  <div class="content1">
    <h2 class="harms2">From $890</h2>
    <h5 class="harms">Paris, France</h5>
      
  </div>
</div>
 </div>
 </div>








 
 


<!-- <div class="slider">
    <div class="about2">Special offers</div>
    <div class="about3">TAKE A LOOK AT THESE OFFERS</div>
 <!-- Swiper --
 <div class="swiper mySwiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide"></div> <!-- <div class="swiper-slide"><img src="\tour and travel\user\video\images\goa.webp" alt=""></div>
    <!-- <div class="swiper-slide">Slide 3</div> --
    <div class="swiper-slide">Slide 4</div>
    <div class="swiper-slide">Slide 5</div>
    <div class="swiper-slide">Slide 6</div>
    <div class="swiper-slide">Slide 7</div>
    <div class="swiper-slide">Slide 8</div>
    <div class="swiper-slide">Slide 9</div> --
  </div>
  <div class="swiper-pagination"></div>
</div>
<!-- Swiper JS --
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Initialize Swiper --
<script src="script7.js"></script>



    


    
</div> -->











<div style="margin-top: 3%;" class="box3 box2">
  
 
    <img src="\tour and travel\user\video\images\jaipur.jpg" alt="">
    <div class="abou2"><a>Subscribe to our Newsletter</a></div>
  <div class="box4">
  <input type="email" id="newsletter_input" class="newsletter_input" placeholder="Your E-mail Address">
  <button type="submit" id="newsletter_button" class="newsletter_button" style="cursor: pointer;">Subscribe</button> 
</div>
</div>

 <footer>
  <div style=" width: 80%;margin-left: 10%;">
 <div class="footer">
  <div>
    <img style="width: 4vw;margin-left: -18%;margin-top:10vh;" src="images/last_logo.png.webp" alt="">
    <h1 class="destino" >DESTINO</h1>
    <h6 style="margin-left: 10%;">TRAVEL AGENCY</h6>
    <div class="footer_about_text ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar sed mauris eget tincidunt. Sed lectus nulla, tempor vel eleifend quis, tempus rut rum metus. Pellentesque ultricies enim eu quam fermentum hendrerit.</div>
    <div class="copyright">
      Copyright ©<script>document.write(new Date().getFullYear());</script>2023 All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
      </div>
    </div>
    <div>
     
      <h2 class="latest">Latest News</h2>
      <div class="footer_img">
        <div class="parrot">
        <img src="images/latest_1.jpg.webp" alt="">
        <div class="footer_latest_item_content">
          <div class="footer_latest_item_title"><a href="#">Brazil Summer</a></div>
          <div class="footer_latest_item_date">Jan 09, 2018</div>
          </div>
        <div>

        </div>
      </div>
      <div class="parrot">
        <img src="images/latest_2.jpg.webp" alt="">
        <div class="footer_latest_item_content">
          <div class="footer_latest_item_title"><a href="#">A perfect vacation</a></div>
          <div class="footer_latest_item_date">Jan 09, 2018</div>
          </div>
      </div>
      </div>
    </div>
    <div style="margin-left: -10%;" class="tags footer_tags">
      <div class="footer_title">Tags</div>
      <ul class="tags_content flex-row flex-wrap align-items-start justify-content-start">
      <li class="tag"><a href="#">travel</a></li>
      <li class="tag"><a href="#">summer</a></li>
      <li class="tag"><a href="#">cruise</a></li>
      <li class="tag"><a href="#">beach</a></li>
      <li class="tag"><a href="#">offer</a></li>
      <li class="tag"><a href="#">vacation</a></li>
      <li class="tag"><a href="#">trip</a></li>
      <li class="tag"><a href="#">city break</a></li>
      <li class="tag"><a href="#">adventure</a></li>
      </ul>
      </div>
 </div>
</div>
</footer> 
</body>
</html>