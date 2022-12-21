<?php
session_start();
$con=mysqli_connect("localhost","root","","data123");
if(isset($_POST['sub']) && isset($_SESSION['uname']))
{
    $r=0;
    $rr=0;
        if(isset($_GET['ran']) && isset($_GET['pp']))
        {
            $r=$_GET['ran'];
            $p=$_GET['pp'];
            $query="SELECT * FROM products";
            $res=mysqli_query($con,$query);
            $qust="SELECT * FROM detail";
            $rrs=mysqli_query($con,$qust);
            while($row=mysqli_fetch_assoc($rrs))
            {
                if($_SESSION['uname'] == $row['email'])
                {
                    $he=$row['firstname'];
                    $he .= 'ord';

                }

            }
            while($yes=mysqli_fetch_assoc($res))
            {
                if($yes['proname']==$p)
                {
                    $oname=$yes['proname'];
                    $oimg=$yes['proimg'];
                    $q="INSERT INTO $he VALUES('$oname','$oimg')";
                    mysqli_query($con,$q);
                    break;
                }
            }
                
        }
        if(isset($_GET['rand']))
        {
            $rr=$_GET['rand'];
            $u=$_SESSION['uname'];
            $detq="SELECT * FROM detail";
            $rest=mysqli_query($con,$detq);
            while($row=mysqli_fetch_assoc($rest))
            {
                if($u == $row['email'])
                {
                    $got=$row['firstname'];
                    $g='ord';
                    $qu="SELECT * FROM $got";
                    $res1=mysqli_query($con,$qu);
                    while($rem=mysqli_fetch_assoc($res1))
                    {
                            $oname=$rem['pname'];
                            $oimg=$rem['pimg'];
                            $got1=$got.$g;
                            $q="INSERT INTO $got1 VALUES('$oname','$oimg')";
                            mysqli_query($con,$q);
                    }

                }
            }
            
           
        }
        if(($_POST['s'] == $r) || ($_POST['s'] == $rr) )
        {
        ?>

    <html>
        <head>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>
        <body class="text-center text-sm-center" style="padding-top:20%;">
            <h1 class="text-success"><i class="bi bi-check-circle-fill"> </i>order success</h1>
            <div class="container-fluid" id="bt">
                <a href="main.php" aria-current="page"><button class="btn btn-warning px-4"><i class="fa fa-shopping-cart me-2"></i>Continue shopping</button></a>
                </div>
        </body>
    </html>
        
   <?php $got="yes";
    }
}
   if(!$got){
    echo "PLEASE ENTER CORRECT CONFORMITION CODE";
   }
?>