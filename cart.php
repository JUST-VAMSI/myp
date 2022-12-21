<?php
session_start();
$conn=mysqli_connect("localhost","root","","data123");
if(isset($_GET['car']) && isset($_SESSION['uname']))
{
    $s="SELECT * FROM `products`";
    $result=mysqli_query($conn,$s);
    $n="SELECT * FROM `detail`";
    $res=mysqli_query($conn,$n);
    $c=0;
    while($row=mysqli_fetch_assoc($result))
    {
        
        if($row['proname']==$_GET['car'])
        {
            $pn=$_GET['car'];
            $pi=$row['proimg'];
            $psdes=$row['prosdes'];
            $pmrp=$row['promrp'];
            $pprice=$row['proprice'];
            $check=$_SESSION['uname'];
            while($r=mysqli_fetch_assoc($res))
            {
                if($r['email']==$check)
                {
                    $v=$r['firstname'];
                    $qu="INSERT INTO `$v` VALUES('$pn','$pi','$psdes','$pmrp','$pprice')";

                    if(mysqli_query($conn,$qu))
                    {
                        $c=1;
                    }
                }
            }
            
        }
    }
    if($c==1)
    {
        ?>
        <script>alert("successfully added")</script>
        <html>
            <head>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
            </head>
            <style>
                </style>

            <body class="text-center">
                <div class="container-fluid" id="bt">
                <a href="main.php" aria-current="page"><button class="btn btn-warning px-4" style="margin-top:20%;"><i class="fa fa-shopping-cart me-2"></i>Continue shopping</button></a>
                </div>
            </body>
        </html>
        <?php

    }
    else{
        echo 'Not Added';
    }

}
?>