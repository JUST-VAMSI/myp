<?php
session_start();
$con=mysqli_connect("localhost","root","","data123");
if(isset($_POST['sub']) && isset($_SESSION['uname']))
{
        if(isset($_GET['ran']) && isset($_GET['pp']) && ($_POST['s'] == $_GET['ran']))
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
                    header("Location: conformorder.php");
                }
            }
   
        }
        elseif(isset($_GET['rand']))
        {
            $rr=$_GET['rand'];
            $u=$_SESSION['uname'];
            $detq="SELECT * FROM detail";
            $rest=mysqli_query($con,$detq);
            while($row=mysqli_fetch_assoc($rest))
            {
                if(($u == $row['email']) && ($_POST['s'] == $_GET['rand']))
                {
                    
                    $got=$row['firstname'];
                    $g='ord';
                    $goted = $got.$g;
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
                    header("Location: conformorder.php");

                }
            }


        }
        else{
            echo "PLEASE ENTER CORRECT CONFORMITION CODE";
        }
        
 }
?>