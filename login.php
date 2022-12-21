<?php
session_start();
if(!isset($_SESSION['uname']))
{
    
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
body{
        background-image:url('background1.jpg');
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:cover;
    }
    td {
    padding: 5px;
}

    </style>
    
    </head>
<body>
<div class="container bg-dark text-light d-flex justify-content-center" style="border-radius:10px; width:50%;height:100%;margin-top:10%;">
    <form action="check.php" method="post" class="text-center" style="padding-top:20px;" class="form-control form-control-sm" >
    <table>
         <h1 class="text-primary">Login Form</h1>
         <tr><pre><p>Don't have an account? Please <a href="pro.php" name="log" class="text-warning">Register</a></p></pre></tr>
        <tr>
            <td><label class="text-light">User Name:</label></td>
            <td><input type="text" id="lname" name="logname" class="form-control form-control-sm" placeholder="Email"></td>
        </tr>
        <tr>
            <td><label class="text-light">Password:</label></td>
            <td><input type="password" id="lpass" name="logpass" class="form-control form-control-sm" placeholder="Enter password"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="checkbox" onclick="check();" name="lcheck" id="lcheckbox"><label class="text-light" style="margin-left:2%;">show password</label></td>
        </tr>
        
        <tr>
            <td></td>
            <td><a href="change.php">forgot password</a></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="submit" class="bg-success" style="border-radius:5px;margin-bottom:5%;" name="siva">
        </tr>
        
    </form> 
</div> 
</body>
</html> 

<script type="text/javascript">
    function check()
    {
        var v=document.getElementById("lcheckbox").checked;
        if(v==true)
        {
            document.getElementById("lpass").type="text";
        }
        else{
            document.getElementById("lpass").type="password";
        }
    }
</script>
<?php
}
else if(isset($_SESSION['uname']))
{
    header('Location: main.php');
}
?>

