<?php
if(isset($_GET['yessell']) || isset($_GET['atocsell']))
{
    $randomint=rand(101,999);
    ?>
    <html>
        <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        </head>
        <body style="background-color:#f0f0f0;" class="text-center text-sm-center">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary text-light mt-2 fw-bold text-center text-sm-center sticky-top">
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
          <h6 class="text-danger mt-4">All orders available only in cash on Delivery</h6>
           <div class="container" style="margin-top:20%;">
            <h1 class="text-info">Conform Order</h1>
            <h2 class="text-success"><?php echo $randomint ?></h2>
            <?php
            if(isset($_GET['yessell']))
            { $pro=$_GET['yessell'];
              ?>
            <form action="sellcheck.php?ran=<?= $randomint ?> && pp=<?= $pro ?> " method="post">
               <input type="text" name="s" class="mt-2" placeholder="Enter above code"> <br>
               <input type="submit" name="sub" value="submit" class="btn btn-primary mt-2">
            </form>
            <?php
            }
            if(isset($_GET['atocsell']))
            { 
              ?>
            <form action="sellcheck.php?rand=<?= $randomint ?>" method="post">
               <input type="text" name="s" class="mt-2" placeholder="Enter above code"> <br>
               <input type="submit" name="sub" value="submit" class="btn btn-primary mt-2">
            </form>
            <?php
            }
            ?>
            </div>
        </body>
    </html>

    <?php
}
?>