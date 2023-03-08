<html>
    <head>
        <title>Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD125VohhpuuCOmLASjC" crossorigin="anonymous">
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
        background-color:#f0f0f0;
    }
    .start{
    margin-top:3%;
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
input[type="text"],input[type="date"],select,textarea{
    border:1px solid gray;
    border-radius:8px;
    width:100%;
    margin-top:4%;
    
}
/* input[type="checkbox"],input[type="radio"]{
    accent-color:cyan;
} */
/* .button1{
    background-color:red;
    color:white;
    border:1px solid black;
    border-radius:5px;
    width:80px;
    font-size:18px;
    margin-top:2%;
} */
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
        margin-top:2%;
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
    .row input[type="text"],input[type="date"],select,textarea{
    margin-top:3%;
   }
   input[type="text"],input[type="date"],select{
    height:90px;
    font-size:40px;
   }
   textarea{
    height:250px;
    font-size:40px;
   }
   /* input[type="checkbox"],input[type="radio"]{
    height:30px;
    width:30px;
   } */
   .sp,.sp1{
    font-size:40px;
    float:left;
    color:coral;
   }
   .button2{
    margin-top:2%;
   }
}
        </style>
    </head>
    <body class="text-center justify-content-center">
    <h1 class="start">EVENT ACTIVE FORM</h1>
    <form  action="poptest.php" method="post" class="text-center">
        <div class="container">
            <h1 class="end">EVENT ACTIVE FORM</h1>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <pre class="hide">Notification:</pre> 
                </div>
                <div class="col-lg-6 col-sm-12">
                    <input type="text" name="notify" placeholder="Notification">
                </div>
                <div class="row">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <pre class="hide">Active:</pre> 
                </div>
                <div class="col-lg-6 col-sm-12">
                <select name="check">
                    <option value="NO">NO</option>
                    <option value="YES">YES</option>
                </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <input type="submit" name="active" class="button2">
                </div>
            </div>
        </div>
    </form>
    </body>
</html>