<?php
session_start();
$conn=mysqli_connect("localhost","root","","data123");
if(isset($_GET['car']) && isset($_SESSION['uname']))
{
    $s="SELECT * FROM `products`";
    $result=mysqli_query($conn,$s);
    $n="SELECT * FROM `detail`";
    $res=mysqli_query($conn,$n);
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
                        header("Location: main.php?cart='yes'");
                    }
                }
            }
            
        }
    }
}
else{
    echo "page not open";
}
?>