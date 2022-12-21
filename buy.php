<html>
    <head>
        <title>form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    body{
        background-image:url('background1.jpg');
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:cover;
    }
</style>
    </head>
<body>
    <div class="container bg-dark text-light d-flex justify-content-center" style="border-radius:10px; width:50%;height:100%;">
    <form  action="test.php" method="post" class="text-center" style="padding-top:20px;" class="form-control form-control-sm">
        <table>
            <h1 class="text-primary">PRODUCT INSERT FORM</h1>
            <tr>
                <td class="text-light">PRODUCT ID:</td>
                <td><input type="number" name="pid" class="form-control form-control-sm" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="text-light">PRODUCT NAME:</td>
                <td><input type="text" name="pname" class="form-control form-control-sm" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="text-light">MRP:</td>
                <td><input  type="number" name="pmrp" class="form-control form-control-sm" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="text-light">PRICE:</td>
                <td><input type="number" name="pprice" class="form-control form-control-sm"></td>
            </tr>
            <tr>
                <td class="text-light">QUANTITY:</td>
                <td><input type="number" name="pqty" class="form-control form-control-sm" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="text-light">IMAGE:</td>
                <td><input type="file" name="pimg" class="form-control form-control-sm" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="text-light">SHORT-DES:</td>
                <td><input type="text" name="psdes" class="form-control form-control-sm"></td>
            </tr>
            <tr>
                <td class="text-light">DESCRIPTION:</td>
                <td><textarea rows="3" cols="40" name="pdes" class="form-control form-control-sm" aria-label=".form-control-sm example"></textarea></td>
            </tr>
            <tr>
                <td class="text-light">META-TITLE:</td>
                <td><input type="text" name="pmtitle" class="form-control form-control-sm"></td>
            </tr>
            <tr>
                <td class="text-light">META-DESCRIPTION:</td>
                <td><textarea rows="3" cols="40" name="pmdes" class="form-control form-control-sm" aria-label=".form-control-sm example"></textarea></td>
            </tr>
            <tr>
                <td class="text-light">META-KEYWORDS:</td>
                <td><textarea rows="3" cols="40" name="pmkeywords" class="form-control form-control-sm" aria-label=".form-control-sm example"></textarea></td>
            </tr>
            <tr>
                <td><input type="reset" value="Reset" class="bg-danger" style="border-radius:5px;margin-top:12%;"></td>
                <td><input type="submit" value="upload" name="pinsert" class="bg-success" style="border-radius:5px;margin-top:3%;margin-left:25%;"></td>
            </tr>
            
        </table>
    </form>
    </div>
    
</body>
</html>