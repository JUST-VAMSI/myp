<?php
session_start();
if(isset($_SESSION['uname']))
{?>
    <html>
        <head>
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
        <body>
        <div class="container bg-dark text-light d-flex justify-content-center" style="border-radius:10px; width:50%;height:auto;margin-top:10%;">
    <form action="gallerycheck.php" method="post" class="text-center" style="padding-top:20px;" class="form-control form-control-sm" >
    <table>
         <h1 class="text-primary">Gallery Form</h1>
        <tr>
            <td><label class="text-light">Name :</label></td>
            <td><input type="text" name="gname" class="form-control form-control-sm"></td>
        </tr>
        <tr>
            <td><label class="text-light">Img:</label></td>
            <td><input type="file" name="gimg" class="form-control form-control-sm"></td>
        </tr>
        <tr>
            <td><input type="reset" value="Reset" class="bg-danger" style="border-radius:5px;margin-bottom:20%;"></td>
            <td><input type="submit" value="submit" class="bg-success" style="border-radius:5px;margin-bottom:5%;" name="gsub"></td>
        </tr>
        
    </form> 
</div> 
        </body>
    </html>

<?php
}
?>