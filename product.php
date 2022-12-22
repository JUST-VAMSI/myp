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
<style>
  {
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
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color:white;">
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
                  <div class="row mt-5">
                    <div class="col-lg-4 col-sm-12 col-xs-12">
                      <div class="shadow">
                    <img src="<?php echo $row['proimg']?>" alt="..." height="500px" width="420px" style="border-radius:5px;">
                    </div>
                  </div>
                    <div class="col-lg-8 col-sm-12 col-xs-12">
                        <h4 class="fw-bold"><?= $row['proname']; ?></h4>
                        <hr>
                        <p><?= $row['prosdes']?></p>
                        <div class="row">
                          <div class="col-lg-3 col-xs-6">
                            <h5>RS.<s class="text-danger"><?= $row['promrp']?></s></h5>
                        </div>
                        <div class="col-lg-1 col-xs-6">
                        <h5>RS.<span class="text-success"><?= $row['proprice']?></span></h5>
                            </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                            <a href="cart.php?car=<?= $row['proname']?>"><button class="btn btn-primary px-4 mt-2"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</button></a>
                        </div>
                        <div class="col-lg-6">
                            <a href="beforesell.php?sell=<?= $row['proname']?>"><button class="btn btn-warning px-4 mt-2">BUY</button></a>
                        </div>
                      </div>

                      <hr>

                      <h6>Product description</h6>

                        <p><?= $row['prodes'] ?></p>
                        <hr>
                        <h4><?= $row['promtitle'] ?></h4>

                          <h6>Product meta description</h6>

                            <p><?= $row['promdes'] ?></p>

                            <hr>

                              <h6>Product meta keywords</h6>

                                <p><?= $row['promkeywords'] ?></p>
                    </div>
                  </div>
             <?php
          }
             
        }
        mysqli_close($connect);
?>
<footer class="position-sticky text-center bg-secondary"style="margin-top:100%;">
<div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2022 Copyright: carpenter's
    </div>
</footer>

</body>
<?php
}
?>