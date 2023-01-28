<?php
session_start();
$connect=mysqli_connect("localhost","root","","data123");
if(isset($_SESSION['uname']))
{ 
  if(isset($_GET['cart'])){
    ?>
    <script>alert("successfully added")</script>
    <?php
  }   
  ?>
    <!DOCTYPE html>
    <html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    <style>
      .rowone{
        justify-content:center;
        text-align:center;
      }
      .rowone .col-sm-6{
          margin:2%;
          border-radius:5px;
          width:400px;
          background-color:white;
      }
      .rowone .col-sm-6:hover{
          transform:scale(1.06);
          transition-duration: .2s;
      }
      .contactrow{
        padding-top:2%;
      }
      .buttonbuy{
        margin-bottom:2%;
      }
      .col-sm-6 img{
        margin-top:2%;
      }
      .contactrow .col-lg-4,.contactrow .col-lg-3,.contactrow .col-lg-5{
        padding-left:2%;
      }
      .onecol{
       text-align:left;
      }
      .twocol2{
        text-align:left;
      }
      .onecol div{
        margin-top:5%;
      }
      .twocol2 div{
        margin-top:2.8%;
      }
      .insta{
        color:#E4405F;
        background-color:white;
      }
      .linkin{
        background-color:blue;
      }
      .git{
        color:#4183c4;
        background-color:white;
      }
      @media only screen and (max-width:1000px)
      {
        .h{
          font-size:50px;
        }
        .nav-link,.dropdown-item,.ic{
          font-size:30px;
        }
      .rowone .col-sm-6{
          width:440px;
      }
        .col-sm-6 img{
          width:300px;
          height:300px;
          margin-top:5%;
        }
        .col-sm-6 .card-title{
          margin-top:4%;
          font-size:30px;
        }
        .col-sm-6 .card-text{
          font-size:30px;
        }
        .col-sm-6 .btn-warning{
          font-size:30px;
        }
        .contactrow h1{
          font-size:40px;
        }
        .contactrow .col-lg-3 h6, .contactrow .col-lg-5 h6{
          font-size:25px;
        }
        .map{
          display:none;
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
<a class="nav-link text-light" href="#contactus">CONTACT US</a>
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
<img src="dainnet3-transformed.jpeg" class="d-block" alt="..." aspect-ratio="1280/720" height="500px" width="100%">
</div>
<div class="carousel-item">
<img src="cotnet1.jpg" class="d-block" alt="..." aspect-ratio="1500/1000" height="500px" width="100%">
</div>
<div class="carousel-item">
<img src="sofanet2.jpeg" class="d-block" alt="..." aspect-ratio="1280/698" height="500px" width="100%">
</div>
<div class="carousel-item">
<img src="c7.jpg" class="d-block" alt="..." aspect-ratio="1802/1200" height="500px" width="100%">
</div>
<div class="carousel-item">
<img src="pexels-tirachard-kumtanom-887822.jpg" class="d-block" alt="..." aspect-ratio="5472/3648" height="500px" width="100%">
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
<div class="row rowone">
<?php
      if($result->num_rows > 0){
    while($row=mysqli_fetch_assoc($result))
        {
          if($row['proid']==1){
            ?>
            <h3 class="text-primary text-center h" id="door">DOORS</h3>
            <hr>
            <?php
          }
          if($row['proid']==7){
            ?>
            <h3 class="text-primary h" id="cot">COTS</h3>
            <hr>
            <?php
            }
             if($row['proid']==13){
            ?>
            <h3 class="text-primary h" id="sofa">SOFAS</h3>
            <hr>
            <?php
            }
            if($row['proid']==19){
              ?>
              <h3 class="text-primary h" id="dining">DINING TABLES</h3>
              <hr>
              <?php
              }
              ?>

            
                <div class="col-sm-6 col-lg-4 text-center product">
                <img src="<?php echo $row['proimg']?>" alt="..." height="300px" width="250px" style="border-radius:8px;">
                <h6 class="card-title" name="pname"><?php echo $row['proname']?></h6>
                  <p class="card-text">RS.<?php echo $row['proprice']?></p>
                   <a href="product.php?prod=<?=$row['proname'] ?>" class="btn btn-warning buttonbuy"> BUY NOW</a>
          </div>
             <?php  
        
      }
    }
        ?>
    </div>
<hr>
<footer class="sticky-bottom text-center text-sm-center bg-secondary">
  <section>
    <div class="row contactrow">
      <h1 id="contactus">CONTACT US</h1>
      <div class="col-lg-3 col-sm-3 onecol">
       <div><h6><b>NAME:</b></h6></div>
       <div><h6><b>S/O:</b></h6></div>
       <div><h6><b>EMAIL:</b></h6></div>
       <div><h6><b>MOBILE NO.:</b></h6></div>
       <div><h6><b>WORK EXPIRENCE:</b></h6></div>
       <div><h6><b>VILLAGE:</b></h6></div>
       <div><h6><b>DISTRICT:</b></h6></div>
       <div><h6><b>STATE:</b></h6></div>
      </div>
      <div class="col-lg-5 col-sm-5 twocol2">
       <div><h6>VEERAMALLA SATHIBABU</h6></div>
       <div><h6>VEERAMALLA SIVAYYA</h6></div>
       <div><h6>vsathibabuvsathibabu51@gmail.com</h6></div>
       <div><h6>9912691390</h6></div>
       <div><h6>35 YEARS</h6></div>
       <div><h6>GANDEPALLI</h6></div>
       <div><h6>KAKINADA</h6></div>
       <div><h6>A.P</h6></div>
      </div>
      <div class="col-lg-4 col-sm-4 map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15250.594835326598!2d81.9545959283756!3d17.138626666580894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a37764a2a71c0cf%3A0x81a52f7cb9a3d0db!2sGandepalli%2C%20Andhra%20Pradesh%20533297!5e0!3m2!1sen!2sin!4v1673936603208!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      </div>
    </div>
  </section>
<section class="mb-4 text-center">
        <a class="btn btn-outline-light m-1 ic bg-primary" href="https://www.facebook.com/sai.h.5437" target="_blank"><i class="fab fa-facebook-f"></i></a>
         <a class="btn btn-outline-light m-1 ic bg-success" href="https://wa.me/message/CPLWJQ3BJTYXB1" target="_blank"> <i class="fab fa-whatsapp"></i></a>
         <a class="btn btn-outline-light m-1 ic insta" href="https://www.instagram.com/artist_vamsi/" target="_blank"><i class="fab fa-instagram"></i></a>
         <a class="btn btn-outline-light m-1 ic linkin" href="https://www.linkedin.com/in/vamsi-veeramalla-15137724a/" target="_blank"> <i class="fab fa-linkedin-in"></i></a>
         <a class="btn btn-outline-light m-1 ic git" href="https://github.com/JUST-VAMSI" target="_blank"><i class="fab fa-github"></i></a>
         
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