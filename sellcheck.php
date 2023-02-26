<?php
session_start();
$con=mysqli_connect("localhost","root","","data123");
if(isset($_POST['sub']) && isset($_SESSION['uname']))
{
        if(isset($_GET['pp']))
        {
            $p=$_GET['pp'];
            $query="SELECT * FROM products";
            $res=mysqli_query($con,$query);
            $qust="SELECT * FROM add_address";
            $rrs=mysqli_query($con,$qust);
            while($row=mysqli_fetch_assoc($rrs))
            {
                if($_SESSION['uname'] == $row['email'])
                {
                    $em=$row['email'];
                    while($yes=mysqli_fetch_assoc($res))
                    {
                        if($yes['proname']==$p)
                        {
                            $oname=$yes['proname'];
                            $oimg=$yes['proimg'];
                            $q="INSERT INTO orderpage VALUES('$em','$oname','$oimg')";
                            mysqli_query($con,$q);
                            header("Location: conformorder.php?orderconfirm='yes'");
                        }
                    }

                }

            }
   
        }
        elseif(isset($_GET['addtoc']))
        {
            $u=$_SESSION['uname'];
            $detq="SELECT * FROM add_address";
            $rest=mysqli_query($con,$detq);
            while($row=mysqli_fetch_assoc($rest))
            {
                if($u == $row['email'])
                {
                    $qu="SELECT * FROM cart";
                    $res1=mysqli_query($con,$qu);
                    while($rem=mysqli_fetch_assoc($res1))
                    {
                        if($row['email'] == $rem['email'])
                        {
                            $ema=$row['email'];
                            $oname=$rem['proname'];
                            $oimg=$rem['proimg'];
                            $q="INSERT INTO orderpage VALUES('$ema','$oname','$oimg')";
                            mysqli_query($con,$q);
                        }
                            
                    }
                    header("Location: conformorder.php?orderconfirm='yes'");

                }
            }


        }
        
 }
?>