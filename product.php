<?php
   session_start();
    $connect=mysqli_connect("localhost","root","","data123");
    if(!$connect)
    {
       die("connection failed: ".mysqli_connect_error());
    }
    $sql_query="SELECT * FROM `Products`";
    $result=mysqli_query($connect,$sql_query);
    ?>
    <?php
    if(isset($_GET['prod']) && isset($_SESSION['uname']))
    {
      $product=$_GET['prod'];
    ?>
    <html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<style>
  *{
    font-family:italic;
  }
 .fas{
  display:none;
 }
 .row{
  width:100%;
 }
  .home{
    margin:0% 5%;
  }
  .he{
    font-family:italic;
    margin-top:5%;
    opacity:1;
  }
  .im{
    margin:5% 0%;
    box-shadow:2px 2px 4px 4px rgba(0,0,0,0.2);
    border-radius:5px;
  }
  .im:hover{
    transform:scale(1.06);
    transition-duration:0.5s;
  }
  .rowdiv{
    margin-top:5%;
    height:10%;
    width:100%;
    background-color:lightgreen;
    border-radius:5px;
    justify-content:center;
  }
  .rowdiv .col-lg-4 .hp{
    color:red;
    margin:10% 0%;
  }
  .rowdiv .col-lg-8 .hp{
    float:left;
    color:green;
    margin:5% 0%;
  }
  .hpi{
    float:left;
    opacity:0.8;
    margin-top:3%;
  }
  .hpii{
    float:left;
    opacity:0.8;
  }
  .hpi1{
    float:left;
    margin-left:5%;
    font-size:20px;
  }
  .button1{
    margin:5% 0%;
    width:50%;
    height:60%;
    border-radius:5px;
  }
  .button2{
    margin:5% 0%;
    width:50%;
    height:60%;
    background-color:gold;
    border:gold;
    border-radius:5px;
  }
  .sticky{
    position:sticky;
    bottom:0;
  }
  .button1:hover,.button2:hover{
    transform:scale(1.06);
    transition-duration:0.2s;
  }
  .fot{
    margin-top:100%;
  }
  @media only screen and (max-width:1000px)
  {
      .onerow{
        height:100%;
      }
      .row{
        width:100%;
      }
      .fas{
          display:inline-block;
          color:#fff;
          font-size:40px;
          margin-left:5%;
        }
        .nav-link,.ic{
          font-size:30px;
        }
        .col-lg-6 img{
          width:950px;
          height:1000px;
        }
        .he{
          font-size:50px;
        }
        .rowdiv{
          height:15%;
          width:100%;
          border-radius:10px;
        }
        .rowdiv .col-lg-4 .hp{
          font-size:50px;
          margin:18% 0%;
        }
        .rowdiv .col-lg-8 .hp{
          font-size:50px;
          margin:9% 0%;
        }
        .hpi{
          font-size:40px;
          margin-left:3%;
        }
        .hpii{
          font-size:40px;
          margin-left:3%;
        }
        .hpi1{
          font-size:30px;
          margin-left:5%;
        }
        .sticky{
          position:sticky;
          bottom:0;
        }
        .button1{
          font-size:50px;
          height:80%;
          width:100%;
        }
        .button2{
          font-size:50px;
          height:80%;
          width:100%;
        }
  }
  </style>
</head>
<body style="background-color:#f0f0f0;" class="text-center text-sm-center"> 
      <?php
      
    while($row=mysqli_fetch_assoc($result))
        {
          if($row['proname']==$product){
            ?>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary mt-2 fw-bold text-center text-sm-center sticky-top"> 
                  <button class="navbar-toggler">
                  <i class="fas fa-bars" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"></i>
                  </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 home">
                <li class="nav-item">
                <a class="nav-link text-light" aria-current="page" href="main.php">HOME</a>
                </li>
              </ul>
            </div>
          </nav>
          
          
          <div class="row onerow">
            <div class="col-lg-6 col-sm-12">
              <img src= '<?= $row['proimg'] ?>' width="500px" height="600px" class="im">
            </div>
            <div class="col-lg-6 col-sm-12">
              <h1 class="he"><?= $row['proname'] ?></h1>
              <div class="row rowdiv">
                <div class="col-lg-4 col-sm-4">
                <s><h4 class="hp"><span><?= $row['promrp'] ?></span></h4></s>
                </div>
                <div class="col-lg-8 col-sm-8">
                  <h3 class="hp"><span><?= $row['proprice'] ?></span></h3>
                </div>
              </div>
              <div class="row">
              <div class="col-lg-12 col-sm-12">
                <h4 class="hpi">Product small description</h4>
              </div>
              <div class="col-lg-12 col-sm-12">
                <p class="hpi1"><?= $row['prosdes'] ?></p>
              </div>
              <div class="col-lg-12 col-sm-12">
                <h4 class="hpii">Product Description</h4>
              </div>
              <div class="col-lg-12 col-sm-12">
                <p class="hpi1"><?= $row['prodes'] ?></p>
              </div>
              <div class="col-lg-12 col-sm-12">
                <h4 class="hpii">Product Meta title</h4>
              </div>
              <div class="col-lg-12 col-sm-12">
                <p class="hpi1"><?= $row['promtitle'] ?></p>
              </div>
              <div class="col-lg-12 col-sm-12">
                <h4 class="hpii">Product Meta Description</h4>
              </div>
              <div class="col-lg-12 col-sm-12">
                <p class="hpi1"><?= $row['promdes'] ?></p>
              </div>
              <div class="col-lg-12 col-sm-12">
                <h4 class="hpii">Product Meta Keywords</h4>
              </div>
              <div class="col-lg-12 col-sm-12">
                <p class="hpi1"><?= $row['promkeywords'] ?></p>
              </div>
            </div>
            </div>
            <div class="row sticky">
                <div class="col-lg-6 col-sm-6">
                  <a href="cart.php?car=<?= $row['proname']?>"><button class="button1"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</button></a>
                </div>
                <div class="col-lg-6 col-sm-6">
                  <a href="beforesell.php?sell=<?= $row['proname']?>"><button class="button2">BUY NOW</button></a>
                </div>
          </div>
          </div>
             <?php
          }
             
        }
        mysqli_close($connect);
?>
<footer class="fot bg-secondary">
 <div
         class="text-center p-3 ic"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2022 Copyright: carpenter's
    </div>
</footer>
</body>
<?php
}
?>