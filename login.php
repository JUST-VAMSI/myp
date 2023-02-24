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
        /* background-image:url('background1.jpg');
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:cover; */
        background-color:#f0f0f0;
    }
    .start{
        margin-top:5%;
        /* color:#f0f0f0; */
        color:green;
    }
    .end{
        display:none;
    }
    .sma{
        display:none;
    }
.container{
    /* background-color:rgba(0,0,0,0.7);
    color:white; */
    width:50%;
    padding:3% 2%;
    border-radius:10px;
    background-color:white;
    box-shadow:2px 2px gray;
}

input[type="text"],input[type="password"]{
    /* background-color:black; 
    color:white; */
    border:1px solid gray;
    width:100%;
    border-radius:8px;
}
.button{
    background-color:#5EC942;
    font-size:20px;
    color:#f0f0f0;
    width:100px;
    border:1px solid black;
    border-radius:7px;
}
.button:hover{
    transform: scale(1.2,1.2);
    transition-duration: .2s;
}
input[type="checkbox"]{
    accent-color:cyan;
}
.fp:hover{
    transform: scale(1.07,1.07);
    transition-duration: .2s;
}
@media only screen and (max-width:1000px)
{
   .start{
    display:none;
   }
   .end{
        display:inline-block;
        margin-top:30%;
        /* color:#f0f0f0; */
        font-size:90px;
    }
    .sma{

        display:inline-block;
        font-size:30px;
    }
   .container{
    margin-top:30%;
    width:100%;
    height:1000px;
   }
   .hide{
    display:none;
   }
   .row input[type="text"],input[type="password"]{
    margin-top:10%;
   }
   input[type="text"],input[type="password"]{
    height:90px;
    font-size:40px;
   }
   input[type="checkbox"]{
    height:30px;
    width:30px;

   }
   .sp{
    font-size:40px;
   }
   .fp{
    font-size:40px;
   }
   .button{
    width:180px;
    height:70px;
    font-size:36px;
   }
}
    </style>
    
    </head>
<body class=" text-center" >
<h1 class="start">Sign in</h1>
         <pre><p class="hide">Don't have an account? Please <a href="pro.php" name="log" class="text-primary">Register</a></p></pre>
    <form action="check.php" method="post" class="text-center">
    <div class="container">
    <h1 class="end">Sign in</h1>
    <pre><p class="sma">Don't have an account? Please <a href="pro.php" name="log" class="text-primary">Register</a></p></pre>
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <p class="hide">User Name:</P>
            </div>
            <div class="col-lg-6 col-sm-12">
                <input type="text" id="lname" name="logname" placeholder="Email">
            </div>
            
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <p class="hide">Password:</P>
            </div>
            <div class="col-lg-6 col-sm-12">
                <input type="password" id="lpass" name="logpass" placeholder="Enter password">
            </div>
            
        </div>
        <div class="row">
        <div class="col-lg-3 col-sm-12">
                
            </div>
            <div class="col-lg-9 col-sm-12">
                <pre class="sp"><input type="checkbox" onclick="check();" name="lcheck" id="lcheckbox">show password</pre>
            </div>
            
        </div>
        
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <a href="change.php" class="btn text-primary fp">forgot password</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <input type="submit" value="submit" class="button" name="siva">
            </div>
        </div>
        </div> 
    </form> 

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

