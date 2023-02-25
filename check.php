<?php
session_start();
    $servername="localhost";
    $username="root";
    $password="";
    $databasename="data123";
    $connect=mysqli_connect($servername,$username,$password,$databasename);
    if(!$connect)
    {
        die("connection failed:".mysqli_connect_error());
    }
    

    if(isset($_POST['siva']))
    {
        $sql="SELECT * FROM `detail`";
        $result=mysqli_query($connect,$sql);
        
        $v=0;
        while($row=mysqli_fetch_assoc($result))
        {
            
            if(($row['email']==$_POST['logname']) && ($row['pass']==$_POST['logpass']))
            {
                    $_SESSION['uname']=$_POST['logname'];
                    $v=1;
            }
            
        }
        if($v==1)
        {
          header("Location: main.php");
        }
        else{
          header("Location: login.php?che='please check your email and password'");
        }
        mysqli_close($connect);
    }
    
?>