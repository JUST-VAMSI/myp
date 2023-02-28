<?php
session_start();
$conn=mysqli_connect('localhost','root','','data123');
if((isset($_GET['yessell']) || isset($_GET['atocsell'])) && isset($_SESSION['uname']))
{

    ?>
    <html>
        <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <style>
          *
          {
            font-family:italic;
          }
          body{
            background-color:#f0f0f0;
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
          .container{
            margin-top:10%;
          }
          .head4{
            margin-top:4%;
            color:red;
          }
          .container h1{
            color:green;
          }
          /* .container h2{
            color:green;
          } */
          /* input[type="number"]{
            width:20%;
            font-size:20px;
            height:5%;
          } */
          input[type="submit"]{
            color:white;
            background-color:#0086F8;
            width:10%;
            height:5%;
            font-size:20px;
            border:none;
            border-radius:5px;
          }
          input[type="number"],input[type="submit"]{
            margin-top:2%;
          }
          label{
            font-size:30px;
          }
          input[type='radio']
                {
                  accent-color:cyan; 
                  height:20px;
                  width:20px;
                }
          @media only screen and (max-width:1000px){
            .fas{
                  display:inline-block;
                  color:#fff;
                  font-size:40px;
                  margin-left:5%;
                }
            .nav-link,.ic{
                  font-size:30px;
                }
                .container{
                  margin-top:40%;
                }
                .head4{
                  font-size:40px;
                }
                .container h1{
                  font-size:50px;
                }
                /* input[type="number"]{
                  width:50%;
                  font-size:40px;
                  height:5%;
                } */
                input[type="submit"]{
                  width:30%;
                  height:5%;
                  font-size:40px;
                }
                input[type="number"],input[type="submit"]{
                  margin-top:4%;
                }
                
          }
        </style>
        </head>
        <body class="text-center text-sm-center">
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
           <div class="container">
            <h1>Confirm Order</h1>
            <?php
            if(isset($_GET['yessell']))
            { $yes="SELECT * FROM products";
              $test=mysqli_query($conn,$yes);
              while($ty=mysqli_fetch_assoc($test))
              {
                if($_GET['yessell'] == $ty['proname'])
                {
                  $ord=$ty['proname'];
                  break;
                }
              }
              ?>
            <form action="sellcheck.php?pp=<?= $ord ?>" method="post">
               <pre><input type="radio" name="payment" value="cash on delivery" id="radiobut1" onclick="Radio()"><label> cash on delivery</label></pre></br>
               <pre><input type="radio" name="payment" value="Online payment" id="radiobut2" onclick="Radio()"><label> Online payment</label></pre></br>
               <input type="submit" name="sub" value="Place order" class="buttonsubmit">
            </form>
            <?php
            }
            elseif(isset($_GET['atocsell']))
            { 
              ?>
            <form action="sellcheck.php?addtoc='atoc'" method="post">
            <pre><input type="radio" name="payment" value="cash on delivery" id="radiobut1" onclick="Radio()"><label> cash on delivery</label></pre></br>
               <pre><input type="radio" name="payment" value="Online payment" id="radiobut2" onclick="Radio()"><label> Online payment</label></pre></br>
               <input type="submit" name="sub" value="Place order" class="buttonsubmit">
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
<script>
  function Radio()
        {
            var v=document.getElementById("radiobut1").checked;
            if(v==true)
            {
                return true;
            }
            var l=document.getElementById("radiobut2").checked;
            if(l==true)
            {
                return true;
            }
        }
</script>