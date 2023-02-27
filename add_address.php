<?php
session_start();
$conn=mysqli_connect('localhost','root','','data123');
?>
<html>
    <head>
        <title>address</title>
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
}
input[type="checkbox"],input[type="radio"]{
    accent-color:cyan;
}
.row{
    margin-top:2%;
    justify-content:center;
}
.button1{
    background-color:gold;
    font-size:18px;
    border:none;
    border-radius:5px;
    width:40%;
    height:100%;
    margin-top:2%;
}
.button1:hover{
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
        margin-top:2%;
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
    margin-top:20%;
    width:100%;
    height:auto;
    background:none;
    box-shadow:none;
   }
    .row input[type="text"],input[type="password"],textarea,input[type="email"],input[type="number"]{
    margin-top:3%;
   }
   input[type="text"],input[type="password"],input[type="email"],input[type="number"]{
    height:90px;
    font-size:40px;
   }
   textarea{
    height:250px;
    font-size:40px;
   }
   input[type="checkbox"],input[type="radio"]{
    height:30px;
    width:30px;
   }
   .sp,.sp1{
    font-size:40px;
    float:left;
    color:coral;
   }
   .button1{
    margin-top:5%;
    font-size:40px;
    width:50%;
    height:100%;
   }
}
</style>
    </head>
    <?php
    $check="SELECT * FROM `add_address`";
    $result=mysqli_query($conn,$check);
    $q=0;
    if(isset($_GET['car']) || isset($_GET['sell']))
    {
    while($row=mysqli_fetch_assoc($result))
    {
        if($_SESSION['uname'] == $row['email'])
        {
            if(isset($_GET['car']))
            {
                $q=1;
                $ch="SELECT * FROM `products`";
                $carres=mysqli_query($conn,$ch);
                while($carrow=mysqli_fetch_assoc($carres))
                {
                    if($_GET['car'] == $carrow['proname'] )
                    {
                        $caryes=$carrow['proname'];
                        header("Location: cart.php?car=$caryes");
                    }
                }
                
                
                
            }
            elseif(isset($_GET['sell']))
            {
                $q=1;
                $se="SELECT * FROM `products`";
                $seres=mysqli_query($conn,$se);
                while($serow=mysqli_fetch_assoc($seres))
                {
                    $seyes=$serow['proname'];
                    header("Location: beforesell.php?sell=$seyes");
                }
                
            }
        }
    }
}
    if(($q==0 && (isset($_GET['car']) || isset($_GET['sell']) || isset($_GET['edit'])) && isset($_SESSION['uname'])))
    {
    ?>
<body class="text-center">
    <h1 class="start">Address</h1>
    <form onsubmit="return total();" <?php
    if(isset($_GET['car']))
    { $c=$_GET['car'];
    ?>
    action="addcheck.php?cart=<?= $c ?>" 
    <?php
    }
      elseif(isset($_GET['sell'])){
        $a=$_GET['sell'];
        ?>
        action="addcheck.php?buy=<?= $a ?>"
        <?php
      }  
      elseif(isset($_GET['edit'])){
        $edt=$_GET['edit'];
        ?>
        action="addcheck.php?edyes=<?= $edt ?>"
        <?php
      }  
    ?> method="post">
    <div class="container">
    <h1 class="end">Address</h1>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <p class="hide">Full name:</p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input onkeyup="FullName();" type="text" id="Fname" name="fname" placeholder="FullName" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <p class="hide">Mobile number:</p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input type="number" name="mobile" onkeyup="Mobile();" id="mobile" placeholder="+91" required>
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <p class="hide">Gender:</p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <p class="sp1">
                        <label>Male</label><input type="radio" name="r1" value="male" id="radiobut1" onclick="Radio();">
                        <label>Female</label><input type="radio" name="r1" value="female" id="radiobut2" onclick="Radio();">
                        <label>Other</label><input type="radio" name="r1" value="other" id="radiobut3" onclick="Radio();">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <p class="hide">Pincode:</p>
                </div>
                <div class="col-lg-6 col-sm-12">
                <input type="number" name="pin" onkeyup="pinman();" id="pin" placeholder="Pincode" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <p class="hide">State:</p>
                </div>
                <div class="col-lg-6 col-sm-12">
                <input type="text" name="state" onkeyup="stateman();" id="state" placeholder="state" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <p class="hide">House No.:</p>
                </div>
                <div class="col-lg-6 col-sm-12">
                <input type="text" name="house" onkeyup="houseman();" id="house" placeholder="House No." required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <p class="hide">Road name:</p>
                </div>
                <div class="col-lg-6 col-sm-12">
                <input type="text" name="road" onkeyup="roadman();" id="road" placeholder="Road name" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <input type="submit" value="Save Address" name="add_address" class="button1">
                </div>
            </div>
        </div>
    </form>
    
    
</body>
<?php
    }
    // else{
    //     header("Location: main.php");
    // }
?>
</html>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
        function FullName()
        {
            var v=document.getElementById("Fname").value;
            var reg=/^[a-z A-Z]+$/;
            if(v.length>=3 && v.match(reg))
            {
                document.getElementById("Fname").style.border="2px solid green";
                return true ;
            }
            else{
                document.getElementById("Fname").style.border="2px solid red";
                return false;
            }
        }
        function Radio()
        {
            var v=document.getElementById("radiobut1").checked;
            if(v==true)
            {
                return true;
            }
            var l=document.getElementById("radiobut2").checked;
            if(l==true)
            {
                return true;
            }
            var s=document.getElementById("radiobut3").checked;
            if(s==true)
            {
                return true;
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
        function pinman()
        {
            var v=document.getElementById("pin").value;
            var reg=/^[1-9]+/;
            if(v.length==6 && v.match(reg))
            {
                document.getElementById("pin").style.border="2px solid green";
                return true;
            }
            else{
                document.getElementById("pin").style.border="2px solid red";
                return false;
            }
        }
       
        function stateman()
        {
            var v=document.getElementById("state").value;
            var reg=/^[a-z A-Z]+$/;
            if(v.length>=3 && v.match(reg))
            {
                document.getElementById("state").style.border="2px solid green";
                return true ;
            }
            else{
                document.getElementById("state").style.border="2px solid red";
                return false;
            }
        }
        function houseman()
        {
            var v=document.getElementById("house").value;
            var reg=/^[a-z A-Z 0-9]+/;
            if(v.length>=3 && v.match(reg))
            {
                document.getElementById("house").style.border="2px solid green";
                return true ;
            }
            else{
                document.getElementById("house").style.border="2px solid red";
                return false;
            }
        }
        function roadman()
        {
            var v=document.getElementById("road").value;
            var reg=/^[a-z A-Z]+$/;
            if(v.length>=3 && v.match(reg))
            {
                document.getElementById("raod").style.border="2px solid green";
                return true ;
            }
            else{
                document.getElementById("road").style.border="2px solid red";
                return false;
            }
        }
        function total()
        {
           if(FullName() && Email() && Radio() && pin() && Mobile() && state() && house() && road())
           {
                return true;
           }
           else
           {
                return false;
           }
        }
    </script>