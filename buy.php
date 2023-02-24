<?php
session_start();
$check=0;
$conn=mysqli_connect("localhost","root","","data123");
$sqq="SELECT * FROM `admin`";
$res=mysqli_query($conn,$sqq);
while($row=mysqli_fetch_assoc($res))
{
    if($_SESSION['uname'] == $row['email'])
    {
        $check=1;
        break;
    }
}
if($check==1)
{
?>
<html>
    <head>
        <title>Product form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD125VohhpuuCOmLASjC" crossorigin="anonymous">
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
}
.end{
        display:none;
    }
.container{
    background-color:#f0f0f0;
    width:50%;
    padding:2% 2%;
    border-radius:10px;
}
.sma{
    display:none;
}
input[type="text"],input[type="password"],textarea,input[type="email"],input[type="number"],input[type="file"]{
    border:1px solid gray;
    border-radius:8px;
    width:100%;
    margin-top:2%;
}
input[type="checkbox"],input[type="radio"]{
    accent-color:cyan;
}
.button1{
    background-color:red;
    color:white;
    border:1px solid black;
    border-radius:5px;
    width:80px;
    font-size:18px;
    margin-top:2%;
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
.button1:hover,.button2:hover{
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
        /* color:#f0f0f0; */
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
   }
    .row input[type="text"],input[type="password"],textarea,input[type="email"],input[type="number"],input[type="file"]{
    margin-top:3%;
   }
   input[type="text"],input[type="password"],input[type="email"],input[type="number"],input[type="file"]{
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
   .button1,.button2{
    margin-top:2%;
   }
}
</style>
    </head>
<body class="text-center">
    <h1 class="start">PRODUCT INSERT FORM</h1>
    <form  action="test.php" method="post" class="text-center">
        <div class="container">
            <h1 class="end">PRODUCT INSERT FORM</h1>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <pre class="hide">PRODUCT ID:</pre> 
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input type="number" name="pid" class="" placeholder="Product id" >
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <pre class="hide">PRODUCT NAME:</pre> 
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input type="text" name="pname" class="" placeholder="Product name">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <pre class="hide">MRP:</pre> 
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input type="number" name="pmrp" class="" placeholder="MRP">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <pre class="hide">PRICE:</pre> 
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input type="number" name="pprice" class="" placeholder="Price">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <pre class="hide">QUANTITY:</pre> 
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input type="number" name="pqty" class="" placeholder="Quantity">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <pre class="hide">IMAGE:</pre> 
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input type="file" name="pimg" class="" placeholder="IMG">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <pre class="hide">SHORT-DES:</pre> 
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input type="text" name="psdes" class="" placeholder="Short-des">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <pre class="hide">DESCRIPTION:</pre> 
                </div>
                <div class="col-lg-6 col-sm-12">
                    <textarea rows="3" cols="40" name="pdes" placeholder="Description"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <pre class="hide">META-TITLE:</pre> 
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input type="text" name="pmtitle" class="" placeholder="Meta-title">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <pre class="hide">META-DESCRIPTION:</pre> 
                </div>
                <div class="col-lg-6 col-sm-12">
                    <textarea rows="3" cols="40" name="pmdes" placeholder="Meta-description"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <pre class="hide">META-KEYWORDS:</pre> 
                </div>
                <div class="col-lg-6 col-sm-12">
                    <textarea rows="3" cols="40" name="pmkeywords" placeholder="Meta-keywords"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <input type="reset" value="Reset" class="button1">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input type="submit" name="pinsert" class="button2">
                </div>
            </div>
        </div>
    </form>


</body>
</html>
<?php
}
else{
    echo 'your are not eligible to open this page';
}
?>