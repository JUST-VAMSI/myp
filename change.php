<DOCTYPE html>
<html>
    <head>
        <title>pass change</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
   
    <style>
        *{
            font-family:italic;
        }
body{
        /* background-image:url('background1.jpg');
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:cover; */
        background-color:#f0f0f0;
    }
    .container{
    /* background-color:rgba(0,0,0,0.7); */
    background-color:white;
    width:50%;
    padding:3% 2%;
    border-radius:10px;
}
   .start{
        margin-top:5%;
        /* color:#f0f0f0; */
    }
    .end{
        display:none;
    }
   input[type="email"],input[type="password"],input[type="text"]{
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
   .container{
    margin-top:20%;
    width:100%;
    height:1000px;
   }
   .hide{
    display:none;
   }
   .row input[type="email"],input[type="password"],input[type="text"]{
    margin-top:10%;
   }
   input[type="email"],input[type="password"],input[type="text"]{
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
   .button{
    width:180px;
    height:70px;
    font-size:36px;
   }
}
    </style>
     <body class="text-center">
        <h1 class="start">Change Your Password</h1>
    <form action="chi.php" method="post" class="text-center">
        <div class="container">
        <h1 class="end">Change Your Password</h1>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <p class="hide">Email:</p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input type="email" name="email" placeholder="Email">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <p class="hide">New Password:</p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input type="password" class="form-control form-control-sm" name="passw" id="word" placeholder="New Password">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-12">
                </div>
                <div class="col-lg-9 col-sm-12">
                    <pre class="sp"><input type="checkbox" name="sel" onclick="chec();" id="che">show password</pre>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <input type="submit" value="submit" class="button" name="su">
                </div>
            </div>
    </div>
</form>
</body>
</html>
<script type="text/javascript">
    function chec()
    {
        $v=document.getElementById("che").checked;
        if($v==true)
        {
            document.getElementById("word").type="text";
        }
        else{
            document.getElementById("word").type="password";
        }
        
    }
    </script>
