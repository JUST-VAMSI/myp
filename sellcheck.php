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

                }
            }


        }
        if(($_POST['s'] == $r) || ($_POST['s'] == $rr) )
        {
            header("Location: conformorder.php");
    
        }
        else{
            echo "PLEASE ENTER CORRECT CONFORMITION CODE";
        }
 }
?>