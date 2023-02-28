<?php
session_start();
$conn=mysqli_connect("localhost","root","","data123");
if(isset($_GET['dele']) && isset($_SESSION['uname']))
{
    $qs="SELECT * FROM cart";
    $r=mysqli_query($conn,$qs);
    $rm=$_GET['dele'];
    while($row=mysqli_fetch_assoc($r))
    {
        if(($row['email']==$_SESSION['uname']) && ($row['proname'] == $rm))
        {
            $de="DELETE FROM cart WHERE proname='$rm'";
            mysqli_query($conn,$de);
            header("Location: atoc.php?pro='hi'");
            break;
        }
    }
    
    
    
}
else{
    header("Location: main.php");
}

?>