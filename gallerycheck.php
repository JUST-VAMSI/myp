<?php
session_start();
if(isset($_POST['gsub']) && isset($_SESSION['uname']))
{
    $con=mysqli_connect("localhost","root","","data123");
    if($con)
    {
        $n=$_POST['gname'];
        $gi=$_POST['gimg'];
        $q="INSERT INTO gallery VALUES('$n','$gi')";
        $r=mysqli_query($con,$q);
        if($r)
        {
            echo 'success';
        }
        else{
            echo 'fail';
        }
    }
}
?>