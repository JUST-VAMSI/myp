<?php
if(isset($_GET['ad']))
{?>
    <html>
        <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <style>
          body{
            background-color:#f0f0f0;
          }
          .fas{
            display:none;
          }
          .home{
            margin:0% 5%;
          }
          form{
            margin-top:10%;
          }
          .buttonaddress{
            background-color:lightpink;
            color:blue;
            border:none;
            border-radius:5px;
            width:10%;
            height:5%;
            margin-top:2%;
          }
          textarea{
            width:40%;
            height:20%;
            font-size:22px;
          }
          @media only screen and (max-width:1000px){
            .fas{
              display:inline-block;
              color:#fff;
              font-size:40px;
              margin-left:5%;
            }
            .nav-link{
              font-size:30px;
            }
            form{
              margin-top:40%;
            }
            .buttonaddress{
              width:30%;
              height:5%;
              margin-top:2%;
              font-size:40px;
            }
            textarea{
              width:70%;
              height:20%;
              font-size:40px;
            }
          }
        </style>
        </head>
        <body class="text-center">
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
            <form action="adchange.php" method="post">
                    <h1>Address:</h1>
                    <textarea name="add" cols="30" rows="5"></textarea><br>
                    <button class="buttonaddress" type="submit" name="addcha">submit</button>
            </form>
        </body>
    </html>
<?php
}
?>