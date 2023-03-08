<?php
$conn=mysqli_connect("localhost","root","","data123");
if(isset($_POST['pop']))
{
    $name=$_POST['notification'];
    $evdate=$_POST['date'];
    $msg=$_POST['message'];
    $link=$_POST['elink'];
    $active=$_POST['activecheck'];
    $sq="INSERT INTO `notifactions` VALUES('$name','$evdate','$msg','$link','$active')";
    if(mysqli_query($conn,$sq))
    {
        echo 'successful';
    }
}
elseif(isset($_POST['active']))
{
    $notification=$_POST['notify'];
    $act=$_POST['check'];

    $sql="UPDATE `notifactions` SET eveactive='$act' WHERE notification_name='$notification'";
    if(mysqli_query($conn,$sql))
    {
        echo 'successful';
    }
}
?>