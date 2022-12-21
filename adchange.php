<?php
session_start();
$conne=mysqli_connect("localhost","root","","data123");
if(isset($_POST['addcha']) && isset($_SESSION['uname']))
{
    $c=$_POST['add'];
    $qu="UPDATE `detail` SET useraddress='$c' ";
    mysqli_query($conne,$qu);
    header("Location: atoc.php?yes='hello'");
}
?>