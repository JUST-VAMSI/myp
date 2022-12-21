<DOCTYPE html>
<html>
    <head>
        <title>pass change</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
   
    <style>
body{
        background-image:url('background1.jpg');
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:cover;
    }
    </style>
     <body>
     <div class="container bg-dark text-light d-flex justify-content-center" style="border-radius:10px; width:50%;margin-top:10%;">
    <form action="chi.php" method="post" class="text-center" style="padding-top:20px;" class="form-control form-control-sm" >
    <table>
        <h3 class="text-primary">Change Your Password</h3>
        <tr>
        <td><label class="text-light">Email:</label></td>
        <td><input type="email" class="form-control form-control-sm" name="email"></td>
</tr>
<tr>
    <td><label class="text-light">New Password:</td>
    <td><input type="password" class="form-control form-control-sm" name="passw" id="word"></td>
</tr>
<tr>
    <td></td>
    <td><input type="checkbox" name="sel" onclick="chec();" id="che"><label class="text-light" style="margin-left:2%;">show password</label></td>
</tr>
<tr>
    <td></td>
    <td><input type="submit" value="submit" class="bg-success" style="border-radius:5px;" name="su"><td>
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
