<?php
session_start();
$conn=mysqli_connect("localhost","root","","data123");
if((isset($_GET['sell'])) || isset($_SESSION['uname']))
{
    $pro=$_GET['sell'];
    $q="SELECT * FROM `products`";
    $result=mysqli_query($conn,$q);
    if($result)
    {
      
?>
 <html>
                <head>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
                </head>
                <body class="text-center" style="background-color:lightgray;">
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary text-light mt-2 fw-bold sticky-top">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">   
                  <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
              </span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link text-light" aria-current="page" href="main.php" style="margin-left:10px;">HOME</a>
                </li>
              </ul>
            </div>
          </nav>
          <?php
    if($result->num_rows>0)
    {
      $connect=mysqli_connect("localhost","root","","data123");
      $que="SELECT * FROM `detail`";
      $rest=mysqli_query($connect,$que);
      while($row=mysqli_fetch_assoc($rest))
      {
         if($row['email']==$_SESSION['uname'])
         {
          ?>
             <div class="py-4" style="border-radius:5px;">
             <div class="container bg-light" style="border-radius:5px ;">
                 <div class="row text-center text-sm-center">
                   <div class="col-md-6 mt-2">
                       <p><b>Delivery to : </b><?= $row['useraddress'] ?></p>
                   </div>
                   <div class="col-md-6 mt-1 mb-1">
                       <a href="address.php?ad='okk'"><button class="btn btn-primary">change</button></a>
                   </div>
                 </div>
               </div>
               </div>
             
           
      <?php
         break;
         }
       }?>
       <div class="col-lg-12 col-sm-12 col-xs-12 mt-1 mb-1">
       <a href="sell.php?yessell=<?= $pro ?>"><button class="btn btn-warning px-4 mt-2">Place order</button></a>
     </div>
   </div>
   <?php
    }
}
    }?>