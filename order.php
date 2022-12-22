<?php
session_start();
$conn=mysqli_connect("localhost","root","","data123");
if(isset($_SESSION['uname']) && isset($_GET['main']))
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
          $v .= 'ord';
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
                  </style>
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
          if($res->num_rows>0)
          {
            while($row=mysqli_fetch_assoc($res))
            {?>
                
                <div class="py-4" style="background-color:lightgray;">
                    <div class="container text-center text-sm-center text-md-center mt-3" style="border-radius:5px">
                      <div class="row bg-light" style="border-radius:8px ;">
                        <div class="col-lg-4 col-sm-4 col-xs-4 shadow" style="border-radius:5px;">
                             <img src="<?php echo $row['oimg']?>" alt="..." height="128px" width="90px" style="border-radius:5px;">
                        </div>
                      <div class="col-lg-8 col-sm-8 col-xs-8 mt-3">
                        <h6 class="fw-bold"><?= $row['oname']; ?></h6>
                      </div>
                     </div>
                    </div>
                 </div>
                 </body>
                       </html>
          <?php
            }
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
                <h6 style="margin-top:20%;">No Orders!</h6>
                <a href="main.php" aria-current="page"><button class="btn btn-primary px-4"><i class="fa fa-shopping-cart me-2"></i>Shop Now</button></a>
                </div>
                </body>
                </html>
        <?php
         } 
    }
   
   
    ?>
<?php
}
?>