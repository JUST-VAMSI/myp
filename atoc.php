<?php
session_start();
$conn=mysqli_connect("localhost","root","","data123");
if(isset($_SESSION['uname']) && (isset($_GET['ac']) || isset($_GET['yes']) || isset($_GET['pro']) || isset($_GET['cart'])))
{
    $q="SELECT * FROM `add_address`";
    $result=mysqli_query($conn,$q);
    if($result)
    {
      
   
   
    ?>
    <html>
                <head>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
                <style>
                  .fas{
                    display:none;
                  }
                  .home{
                    margin:0% 5%;
                  }
                  .container-fluid{
                    margin-top:10%;
                  }
                  .buttonshop{
                    color:blue;
                    border-radius:5px;
                    background-color:lightpink;
                    border:none;
                    width:10%;
                    height:6%;
                  }
                  .rowone{
                    width:100%;
                    height:20%;
                    margin:2% 0%;
                    background-color:white;
                    padding:3% 0%;
                    font-size:20px;
                  }
                  .buttonedit{
                    color:blue;
                    background-color:lightpink;
                    border:none;
                    border-radius:5px;
                    height:60%;
                    width:30%;
                    float:right;
                  } 
                  .rowmiddle{
                    margin-top:2%;
                    border-radius:5px;
                    background-color:white;
                  }
                  .row .col-lg-6 img{
                    margin:2% 0%;
                    box-shadow:2px 2px 4px 4px rgba(0,0,0,0.1);
                    border-radius:5px;
                    
                  }
                  .row .col-lg-6 img:hover{
                    transform:scale(1.06);
                    transition-duration:.2s;
                  }
                  .row .colone{
                    margin:2% 0%;
                  }
                  .row .col-lg-6 .left{
                    float:left;
                  }
                  .row .colone p{
                    font-size:30px;
                  }
                  .buttonremove{
                    color:white;
                    background-color:red;
                    border:none;
                    border-radius:5px;
                    width:20%;
                    height:130%;
                    font-size:25px;
                  }
                  .rowtwo{
                    margin:3% 0%;
                    padding:2% 0%;
                    background-color:white;
                    position:sticky;
                    bottom:0;
                  }
                  .buttonplaceorder{
                    background-color:gold;
                    border:none;
                    width:30%;
                    height:100%;
                    border-radius:5px;

                  }
                  .buttonedit:hover,.buttonremove:hover,.buttonplaceorder:hover{
                    transform:scale(1.06);
                    transition-duration:.2s;
                  }
                 @media screen and (max-width:1000px){
                  .fas{
                    display:inline-block;
                    color:#fff;
                    font-size:40px;
                    margin-left:5%;
                  }
                  .nav-link{
                    font-size:30px;
                  }
                  .container-fluid{
                    justify-content:center;
                    margin-top:60%;
                  }
                  .head6,.buttonshop{
                    font-size:40px;
                  }
                  .buttonshop{
                    width:40%;
                    height:6%;
                  }
                  .buttonedit{
                    width:40%;
                    height:40%;
                    font-size:40px;
                  } 
                  .rowone{
                    height:20%;
                    font-size:30px;
                    padding-top:10%;
                    padding-bottom:20%;
                  }
                  .row .col-lg-6 img{
                    margin:5% 0%;
                    width:300px;
                    height:500px;
                  }
                  .row .colone{
                    margin:5% 0%;
                  }
                  .row .colone p{
                    font-size:40px;
                  }
                  .row .colone h4{
                    font-size:50px;
                  }
                  .buttonremove{
                    width:40%;
                    height:130%;
                    font-size:40px;
                  }
                  .rowtwo{
                    height:10%;
                    position:sticky;
                    bottom:0;
                  }
                  .rowtwo .col-lg-6 h2{
                    font-size:40px;
                    margin:5% 0%;
                  }
                  .buttonplaceorder{
                    
                    height:90%;
                    width:70%;
                    border-radius:5px;
                    font-size:40px;
                    margin-bottom:2%;

                  }
                 }
                  </style>
                </head>
                <body class="text-center text-sm-center" style="background-color:#f0f0f0;">
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
          <?php
      $connect=mysqli_connect("localhost","root","","data123");
      $que="SELECT * FROM `add_address`";
      $rest=mysqli_query($connect,$que);
      $qur="SELECT * FROM `cart`";
       $res=mysqli_query($conn,$qur);
       if($res->num_rows>0)
       {
      while($row=mysqli_fetch_assoc($rest))
      {
         if($row['email']==$_SESSION['uname'])
         {
          ?>
                 <div class="row rowone">
                   <div class="col-lg-6 col-sm-6">
                       <p><b>Delivery to : </b><?= $row['fullname'].", ".$row['mobile'].", ".$row['pincode'].", ".$row['state'].", ".$row['house No'] ?></p>
                   </div>
                   <div class="col-lg-6 col-sm-6">
                       <a href=""><button class="buttonedit">Edit</button></a>
                   </div>
                 </div>
             
           
      <?php
         break;
         }
       }
       
       $p=0;
       while($rw=mysqli_fetch_assoc($result))
      {
        if($rw['email']==$_SESSION['uname'])
        {
           while($row=mysqli_fetch_assoc($res))
           {
              if($row['email']==$rw['email'])
              {?>
                <div class="row rowmiddle">
                <div class="col-lg-6 col-sm-6 col-xs-6">
                     <img src="<?php echo $row['proimg']?>" alt="..." height="300px" width="250px">
                 </div>
                  <div class="col-lg-6 col-sm-6 col-xs-6 colone">
                    <h4 class="fw-bold"><?= $row['proname']; ?></h4>
                    <hr>
                    <p><?= $row['prodes'] ?></p>
                    <div class="row">
                      <div class="col-lg-6 col-sm-6 col-xs-6">
                      <s><P class="text-danger"><?= $row['promrp'] ?></P></s>
                      </div>
                      <div class="col-lg-6 col-sm-6 col-xs-6">
                        <P class="left">RS.<span class="text-success"><?= $row['proprice'] ?></span></P>
                      </div>
                    </div>
                    <div class="row">
                      <a href="del.php?dele=<?= $row['proname'] ?>">
                      <button class="buttonremove">Remove</button></a>
                    </div>
                  </div>
              </div>
                <?php
                    $p+=$row['proprice'];

                
        
              }
           }
        }
        
      }
      ?>
          <div class="row rowtwo">
          <div class="col-lg-6 col-sm-6 col-xs-6">
            <h2>Total: <?php echo $p ?></h2>
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-6">
            <a href="sell.php?atocsell='get'"><button class="buttonplaceorder">Place Order</button></a>
        </div>
        </div>
        </body>
         </html>
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
                <img src="cart.gif" alt=".." width="300px" height="300px">
                <h6 class="head6">Your Cart Is empty!</h6>
                <a href="main.php" aria-current="page"><button class="buttonshop"><i class="fa fa-shopping-cart me-2"></i>Shop Now</button></a>
                </div>
                </body>
                </html>
        <?php
         }

    }

    
}
?>
