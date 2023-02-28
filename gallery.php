<?php
session_start();
$conn=mysqli_connect("localhost","root","","data123");
$res=0;
$ch="SELECT * FROM detail";
$chres=mysqli_query($conn,$ch);
while($row=mysqli_fetch_assoc($chres))
{
    if($_SESSION['uname'] == $row['email'])
    {
        $res=1;
    }
}
if($res==1)
{?>
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
body{
        /* background-image:url('background1.jpg');
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:cover; */
        background-color:#f0f0f0;
    }
    .start{
        margin-top:5%;
        /* color:#f0f0f0; */
        color:green;
    }
    .end{
        display:none;
    }
    .sma{
        display:none;
    }
.container{
    /* background-color:rgba(0,0,0,0.7);
    color:white; */
    width:50%;
    padding:3% 2%;
    border-radius:10px;
    background-color:white;
    box-shadow:2px 2px gray;
}

                    input[type="text"],input[type="password"],input[type="file"]{ 
                        border:1px solid gray;
    width:100%;
    height:100%;
    border-radius:8px;
    font-size:20px;
                    }
                    .button2{
                        background-color:#5EC942;
                        font-size:18px;
                        color:#f0f0f0;
                        width:80px;
                        border:1px solid black;
                        border-radius:5px;
                        margin-top:2%;
                    }
                    .button2:hover{
                        transform: scale(1.2,1.2);
                        transition-duration: .2s;
                    }
                    @media only screen and (max-width:1000px){
                       
                        .start{
                            display:none;
                        }
                        .end{
                                display:inline-block;
                                margin-top:30%;
                                /* color:#f0f0f0; */
                                font-size:90px;
                            }
                            
                        .container{
                            margin-top:20%;
                            width:100%;
                            height:1000px;
                        }
                        .hide{
                            display:none;
                        }
                        .row input[type="text"],input[type="file"]{
                            margin-top:10%;
                        }
                        input[type="text"],input[type="file"]{
                            height:90px;
                            font-size:40px;
                        }
                        .button2{
                            margin-top:5%;
                            font-size:30px;
                            width:120px;
                        }
                    }
        </style>
        </head>
        <body class="text-center">
            <h1 class="start">Gallery Form</h1>
            <form action="gallerycheck.php" method="post" class="text-center" style="padding-top:20px;" class="form-control form-control-sm" >
                <div class="container">
                    <h1 class="end">Gallery Form</h1>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <pre class="hide">Name:</pre>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <input type="text" name="gname" placeholder="Image name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <pre class="hide">Img:</pre>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <input type="file" name="gimg" placeholder="Image">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <input type="submit" value="submit" class="button2" name="gsub">
                        </div>
                    </div>
            
            <td></td>
            <td></td>
        </tr>
                </div>
            </form> 
 
        </body>
    </html>

<?php
}
else
{
    echo 'Your are not eligible to open this page';
}
?>