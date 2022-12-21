<?php
$servername="localhost";
$username="root";
$password="";
$databasename="data123";
$connect=mysqli_connect($servername,$username,$password,$databasename);
if(!$connect)
{
    die("connection failed:".mysqli_connect_error());
}
if(isset($_POST['su']))
{
    $sql="SELECT * FROM `detail`";
    $result=mysqli_query($connect,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
        
        if($row['email']==$_POST['email'])
        {
            $ss="UPDATE `detail` SET pass='$_POST[passw]' WHERE email='$_POST[email]'";
            if(mysqli_query($connect,$ss))
            {
                echo "successfully changed password";
                echo "<p> click here <P><a href='login.php'>login</a>";
            };
            
        }
        
    }
    mysqli_close($connect);
}

?>