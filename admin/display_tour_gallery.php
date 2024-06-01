<?php

include('../include/connect.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> -->
  </head>
  <body>

  <!-- <h1 style="display:flex;justify-content: center;align-items:center;background-color: bisque;height: 70vh;">Edit Concert Table</h1> -->
   <div class="container ">

    <button class=" btn btn-primary my-5">
    <a href="crud.php" class="text-light">Add User </a>
    </button>
    <table class="table">
    <div class="text-center w-100 ">
      <h1 >Tour Gallery</h1>
      </div>
  <thead>
  
    <tr>
      <th scope="col">ID</th>
      <th scope="col"> Tour_id</th>
      <th scope="col">Image</th>
      
    </tr>
  </thead>
  <tbody>

    <?php
    $sql="SELECT * FROM tour_gallery";
    $result=mysqli_query($con,$sql);
    if($result)
    {
   while( $row=mysqli_fetch_assoc($result))
   {
    
    $id=$row['id'];
    $tour_id=$row['tour_id'];
    $image=$row['image'];
    echo'<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$tour_id.'</td>
    <td><img src="../image/'.$image.'" width="100px"</td>
    <td>
    <button class="btn btn-primary"><a href="Edit_tour_gallery.php?updateid='.$id.'" class="text-light">update</a></button>
    <button class="btn btn-primary"><a href="delete_tour_gallery.php?deleteid='.$id.'" class="text-light">Delete</a></button>

</td>
  </tr>';
    
   }
}
    ?>

    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
</div>
   
 </body>
</html>