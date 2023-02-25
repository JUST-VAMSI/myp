<html>
    <head>
        <title>form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
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
    
.start{
    margin-top:3%;
    /* color:#f0f0f0; */
    color:green;
}
.end{
        display:none;
    }
.container{
    /* background-color:rgba(0,0,0,0.7); */
    background-color:white;
    width:50%;
    padding:2% 2%;
    border-radius:10px;
    box-shadow:2px 2px 2px 2px gray;
}
.sma{
    display:none;
}
input[type="text"],input[type="password"],textarea,input[type="email"],input[type="number"]{
    /* background-color:rgba(0,0,0,0.5);  */
    background-color:white;
    border-radius:8px;
    color:black;
    border:1px solid gray;
    width:100%;
    height:100%;
    font-size:20px;
}
input[type="checkbox"],input[type="radio"]{
    accent-color:cyan;
}
.row{
    margin-top:2%;
    justify-content:center;
   }
.button2{
    background-color:#5EC942;
    font-size:18px;
    color:#f0f0f0;
    width:80px;
    border:1px solid black;
    border-radius:5px;
    margin-top:2%;
}
.button2:hover{
    transform: scale(1.2,1.2);
    transition-duration: .2s;
}
.sp1{
    float:left;
}
@media only screen and (max-width:1000px)
{
    .start{
    display:none;
   }
   .end{
        display:inline-block;
        margin-top:25%;
        color:green;
        font-size:90px;
    }
    .hide{
        display:none;
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
    .row input[type="text"],input[type="password"],textarea,input[type="email"],input[type="number"]{
    margin-top:3%;
   }
   input[type="text"],input[type="password"],input[type="email"]{
    height:90px;
    font-size:50px;
   }
   input[type="checkbox"]{
    height:40px;
    width:40px;
   }
   .sp,.sp1{
    font-size:40px;
    float:left;
    color:coral;
   }
   .button2{
    margin-top:5%;
    font-size:40px;
    width:40%;
    height:90%;
   }
}
</style>
    </head>
<body class="text-center">
    <h1 class="start">Sign up</h1>
        <pre><p class="hide">Already an user? Please <a href="login.php" name="log" class="text-primary">login</a></p></pre>
    <form onsubmit="return hello();" action="connect.php" method="post">
    <div class="container">
    <h1 class="end">Sign up</h1>
    <pre><p class="sma">Already an user? Please <a href="login.php" name="log" class="text-primary">login</a></p></pre>
             <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <p class="hide">Email:</p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input type="email" onkeyup="Email();" id="emailname" name="Emailname" placeholder="@gmail.com">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <p class="hide">Create password:</p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input onkeyup="Cpass();" id="CPass" type="password" name="pass" placeholder="password">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-12">
                    
                </div>
                <div class="col-lg-9 col-sm-12">
                    <pre class="sp"><input type="checkbox" id="check" onclick="Check();" name="cbox"> show password</pre>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <p class="hide">Confirm password:</p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input type="password" onkeyup="repass();" id="RePass" name="pass" placeholder="re-enter password">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <input type="submit" value="submit" name="vamsi" class="button2">
                </div>
            </div>
        </div>
    </form>
    
    
</body>
</html>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
        function Cpass()
        {
            var v=document.getElementById("CPass").value;
            var reg=/[a-z A-Z]+[! @ # $ % ^ & * ?]+[\d]+/;
            if(v.length>=8 && v.match(reg))
            {
                document.getElementById("CPass").style.border="2px solid green"
                return true;
            }
            else{
                document.getElementById("CPass").style.border="2px solid red";
                return false;
            }
        }
        function repass()
        {
            var v=document.getElementById("CPass").value;
            var l=document.getElementById("RePass").value;
            if(v.length>=8 && v==l)
            {
                document.getElementById("RePass").style.border="2px solid green"
                return true;
            }
            else{
                document.getElementById("RePass").style.border="2px solid red";
                return false;
            }
        }
        function Check()
        {
            var v=document.getElementById("check").checked;
            if(v==true)
            {
                document.getElementById("CPass").type="text";
                document.getElementById("RePass").type="text";
            }
            else{
                document.getElementById("CPass").type="password";
                document.getElementById("RePass").type="password";
            }
        }
        function Email()
        {
            var v=document.getElementById("emailname").value;
            var reg=/^[a-z A-Z \d]+(@gmail.com)$/;
            if(v.match(reg))
            {
                document.getElementById("emailname").style.border="2px solid green";
                return true;
            }
            else{
                document.getElementById("emailname").style.border="2px solid red";
                return false;
            }
        }

        function Mobile()
        {
            var v=document.getElementById("mobile").value;
            var reg=/^[6 7 9 8]+/;
            if(v.length==10 && v.match(reg))
            {
                document.getElementById("mobile").style.border="2px solid green";
                return true;
            }
            else{
                document.getElementById("mobile").style.border="2px solid red";
                return false;
            }
        }
        function hello()
        {
           if(Cpass() && repass() && Email())
           {
                return true;
           }
           else
           {
                return false;
           }
        }
    </script>