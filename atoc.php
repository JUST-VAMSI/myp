<?php
session_start();
$conn=mysqli_connect("localhost","root","","data123");
if(isset($_SESSION['uname']) && (isset($_GET['ac']) || isset($_GET['yes']) || isset($_GET['pro'])))
{
    $q="SELECT * FROM `detail`";
    $result=mysqli_query($conn,$q);
    if($result)
    {
      while($row=mysqli_fetch_assoc($result))
      {
        if($row['email']==$_SESSION['uname'])
        {
          $v=$row['firstname'];
          $p="SELECT * FROM `$v`";
          $res=mysqli_query($conn,$p);
        }
        
      }
      
   
   
    ?>
    <html>
                <head>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
                <style>
                  #sticky{
                    position: -webkit-sticky;
                    position: sticky;
                    bottom: 0;

                  }
                  </style>
                </head>
                <body class="text-center" style="background-color:lightgray;">
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary text-light mt-2 fw-bold sticky-top">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="main.php" style="margin-left:10px;">HOME</a>
                </li>
              </ul>
            </div>
          </nav>
          <?php
    if($res->num_rows>0)
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
       }
       $p=0;
        while($row=mysqli_fetch_assoc($res))
        {?>
            
            <div class="py-4" style="background-color:lightgray;">
                <div class="container text-center text-sm-center text-md-center mt-3" style="border-radius:5px">
                  <div class="row bg-light" style="border-radius:8px ;">
                    <div class="col-lg-4 col-sm-4 col-xs-4 mt-3">
                      <div class="shadow">
                    <img src="<?php echo $row['pimg']?>" alt="..." height="150px" width="100px" style="border-radius:5px;">
                    </div>
                  </div>
                  <div class="col-lg-8 col-sm-8 col-xs-8 mt-3">
                  <h6 class="fw-bold"><?= $row['pname']; ?></h6>
                  <hr>
                  <p><?= $row['psdes'] ?></p>
                    <div class="row">
                        <div class="col-lg-3 col-sm-3 col-xs-3">
                            <P>RS.<s class="text-danger"><?= $row['pmrp'] ?></s></P>
                        </div>
                        <div class="col-lg-1 col-sm-1 col-xs-1">
                            <P>RS.<span class="text-success"><?= $row['pprice'] ?></span></P>
                            <?php
                            $p+=$row['pprice'];

                            ?>
                        </div>
                    </div>
                    <a href="del.php?dele=<?= $row['pname'] ?>">
                        <button class="btn text-center text-light mb-1 ms-5" style="background-color:red;">Remove</button></a>
                  </div>
                  </div>
            </div>
       
            </div>
            </body>
                   </html>
       <?php }
       ?>
       <div class="container text-center teext-sm-center text-md-center mt-2" id="sticky">
          <div class="row bg-light" style="border-radius:8px;">
          <div class="col-lg-6 col-sm-6 col-xs-6 mt-3">
            <h2>Total: <?php echo $p ?></h2>
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-6 mt-1 mb-1">
            <a href="sell.php?atocsell='get'"><button class="btn btn-warning px-4 mt-2">BUY</button></a>
          </div>
        </div>
       <?php
        }
   
    else{
        ?>
        <html>
            <head>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </head>
    <body class="text-center">
        <div class="container-fluid">
                <h6 style="margin-top:20%;">Your Cart Is empty!</h6>
                <a href="main.php" aria-current="page"><button class="btn btn-primary px-4"><i class="fa fa-shopping-cart me-2"></i>Shop Now</button></a>
                </div>
                </body>
                </html>
        <?php
         }

    }

    
}
?>
