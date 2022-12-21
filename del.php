<?php
session_start();
$conn=mysqli_connect("localhost","root","","data123");
if(isset($_GET['dele']) && isset($_SESSION['uname']))
{
    $qs="SELECT * FROM detail";
    $r=mysqli_query($conn,$qs);
    while($row=mysqli_fetch_assoc($r))
    {
        if($row['email']==$_SESSION['uname'])
        {
            $v=$row['firstname'];
            $p="SELECT * FROM `$v`";
            $res=mysqli_query($conn,$p);
            $r=$_GET['dele'];
            while($row=mysqli_fetch_assoc($res))
            {
                if($row['pname']==$r)
                {
                    $de="DELETE FROM `$v` WHERE pname='$r'";
                    mysqli_query($conn,$de);
                    header("Location: atoc.php?pro='hi'");
                    break;
                }
            
                
            }
            break;
        }
    }
    
    
    
}
else{
    echo 'not';
}

?>