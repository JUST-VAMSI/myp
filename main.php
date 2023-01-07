<?php
session_start();
$connect=mysqli_connect("localhost","root","","data123");
if(isset($_SESSION['uname']))
{    
  ?>
    <!DOCTYPE html>
    <html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    <style>
      .col-sm-4:hover{
          transform:scale(1.06);
          transition-duration: .2s;
      }
      @media only screen and (max-width:1000px)
      {
        .h{
          font-size:50px;
        }
        .nav-link,.dropdown-item,.ic{
          font-size:30px;
        }
        
      }
    </style>
    </head>
    <body class="justify-content-center text-center text-sm-center"style="background-color:#f0f0f0;">
    <div class="row container d-flex justify-content-center" style="width:100%;padding-left:18%;">
    <h1 class="text-center h">FURNITURE</h1>
    <h2 class="text-center h">ALL IN ONE</h2>
    </div>
    <nav class="navbar navbar-expand-lg text-light bg-primary fw-bold text-center text-sm-center sticky-top" style="color:white;">
<div class="container-fluid">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item dropdown bg-primary text-light">
<a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
<button><i class="bi bi-file-person"></i></button>
</a>
<ul class="dropdown-menu bg-dark text-light" aria-labelledby="navbarDropdown">
<li><a class="dropdown-item text-success" href="main.php"><?php echo $_SESSION['uname'].'<br>'; ?></a></li>
</ul>
</li>
</ul>
<button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon">   
                  <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
              </span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item">
<a class="nav-link text-light" aria-current="page" href="main.php">HOME</a>
</li>
<li class="nav-item dropdown bg-primary text-light">
<a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
PRODUCTS
</a>
<ul class="dropdown-menu bg-dark text-light text-center text-sm-center" aria-labelledby="navbarDropdown">
<li><a class="dropdown-item text-primary" href="#door">DOORS</a></li>
<li><hr class="dropdown-divider"></li>
<li><a class="dropdown-item text-primary" href="#cot">COTS</a></li>
<li><hr class="dropdown-divider"></li>
<li><a class="dropdown-item text-primary" href="#sofa">SOFAS</a></li>
<li><hr class="dropdown-divider"></li>
<li><a class="dropdown-item text-primary" href="#dining">Dining tables</a></li>
</ul>
</li>
<li class="nav-item">
<a class="nav-link text-light" href="#gallery">GALLERY</a>
</li>
<li class="nav-item">
<a class="nav-link text-light" href="#">CONTACT US</a>
</li>
<li class="nav-item text-light">
<a class="nav-link text-light" href="logout.php" name="logout">LOGOUT</a>
</li>
</ul>

<a href="atoc.php?ac='helo'"><button class="btn btn-primary px-4 f-right ic"><i class="fa fa-shopping-cart me-2"></i></button></a>
<a href="order.php?main='order'"><button class="btn btn-primary px-4 f-right ic"><i class="bi bi-bag-fill"></i></button></a>
</div>
</div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide mt-2" data-bs-ride="carousel">
<div class="carousel-indicators">
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
</div>
<div class="carousel-inner">
<div class="carousel-item active">
<img src="cupslide10.jpg" class="d-block" alt="..." aspect-ratio="1032/502" height="500px" width="100%">
</div>
<div class="carousel-item">
<img src="cotnet1.jpg" class="d-block" alt="..." aspect-ratio="1500/1000" height="500px" width="100%">
</div>
<div class="carousel-item">
<img src="sofanet2.jpeg" class="d-block" alt="..." aspect-ratio="1280/698" height="500px" width="100%">
</div>
<div class="carousel-item">
<img src="dainnet3-transformed.jpeg" class="d-block" alt="..." aspect-ratio="1280/720" height="500px" width="100%">
</div>
<div class="carousel-item">
<img src="door6.jpg" class="d-block" alt="..." aspect-ratio="1136/852" height="500px" width="100%">
</div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</button>
</div>
<?php
   
    
    if(!$connect)
    {
       die("connection failed: ".mysqli_connect_error());
    }
    $sql_query="SELECT * FROM `Products`";
    $result=mysqli_query($connect,$sql_query);
    ?>

<h2  style="margin-top:3%;" class="h">PRODUCTS</h2>
<h3 class="text-primary text-center h" id="door">DOORS</h3>
<hr>

<div class="row">
<?php
      if($result->num_rows > 0){
    while($row=mysqli_fetch_assoc($result))
        {
          if($row['proid']==6){
            ?>
            <h3 class="text-primary h" id="cot">COTS</h3>
            <hr>
            <?php
            }
             if($row['proid']==11){
            ?>
            <h3 class="text-primary h" id="sofa">SOFAS</h3>
            <hr>
            <?php
            }
            if($row['proid']==16){
              ?>
              <h3 class="text-primary h" id="dining">DINING TABLES</h3>
              <hr>
              <?php
              }
              ?>

            
                <div class="col-sm-4 col-lg-3 text-center mt-2" style="border-radius:5px;">
                <img src="<?php echo $row['proimg']?>" alt="..." height="300px" width="250px" style="border-radius:8px;">
                <h6 class="card-title" name="pname"><?php echo $row['proname']?></h6>
                  <p class="card-text">RS.<?php echo $row['proprice']?></p>
                   <a href="product.php?prod=<?=$row['proname'] ?>" class="btn btn-warning"> BUY NOW</a>
          </div>
             <?php  
        
      }
    }
        ?>
    </div>
<hr>
<footer class="sticky-bottom text-center text-sm-center bg-secondary">
<section class="mb-4 text-center">
        <a class="btn btn-outline-light m-1 ic" href="https://www.facebook.com/sai.h.5437" target="_blank"><i class="fab fa-facebook-f"></i></a>
         <a class="btn btn-outline-light m-1 ic" href="https://wa.me/message/CPLWJQ3BJTYXB1" target="_blank"> <i class="fab fa-whatsapp"></i></a>
         <a class="btn btn-outline-light m-1 ic" href="https://www.instagram.com/artist_vamsi/" target="_blank"><i class="fab fa-instagram"></i></a>
         <a class="btn btn-outline-light m-1 ic" href="https://www.linkedin.com/in/vamsi-veeramalla-15137724a/" target="_blank"> <i class="fab fa-linkedin-in"></i></a>
         <a class="btn btn-outline-light m-1 ic" href="https://github.com/JUST-VAMSI" target="_blank"><i class="fab fa-github"></i></a>
         
</section>
    <div
         class="text-center p-3 ic"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2022 Copyright: carpenter's
    </div>
  </footer>

    </body>
    </html>
    
  <?php  
}
else
{
    header('Location: login.php');
}
?>