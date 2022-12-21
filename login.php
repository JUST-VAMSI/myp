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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
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
<body class=" text-center mt-5" >
<h1 class="text-success">Login Form</h1>
         <pre><p class="text-light">Don't have an account? Please <a href="pro.php" name="log" class="text-warning">Register</a></p></pre>
<div class="container bg-dark text-light d-flex justify-content-center" style="border-radius:10px; width:100%;height:100%;">
    <form action="check.php" method="post" class="text-center" style="padding-top:20px;" class="form-control form-control-sm" >
    <table>

        <tr>
            <td><label class="text-light">User Name:</label></td>
            <td><input type="text" id="lname" name="logname" class="form-control form-control-sm" placeholder="Email" style="width:170%;"></td>
        </tr>
        <tr>
            <td><label class="text-light">Password:</label></td>
            <td><input type="password" id="lpass" name="logpass" class="form-control form-control-sm" placeholder="Enter password" style="width:170%;"></td>
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

