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
    td{
    padding: 5px;
}
</style>
    </head>
<body>
    <div class="container bg-dark text-light d-flex justify-content-center" style="border-radius:10px; width:50%;height:auto; margin-top:5%;">
    <form onsubmit="return hello();" action="connect.php" method="post" class="text-center" style="padding-top:20px;" class="form-control form-control-sm">
        <table>
            <h1 class="text-primary">Sign up</h1>
            <tr><pre><p>Already an user? Please <a href="login.php" name="log">login</a></p></pre></tr>
            <div class="container-fluid" style="margin-top:10%;">
            <tr>
                <td class="text-light">First name:</td>
                <td><input onkeyup="Firstname();" type="text" id="Fname" name="fname" class="form-control form-control-sm" aria-label=".form-control-sm example" placeholder="Enter Fname"></td>
            </tr>
            </div>
            <tr>
                <td class="text-light">Last name:</td>
                <td><input onkeyup="Lastname();" type="text" id="Lname" name="lname" class="form-control form-control-sm" aria-label=".form-control-sm example" placeholder="Enter Lname"></td>
            </tr>
            <tr>
                <td class="text-light">Create password:</td>
                <td><input onkeyup="Cpass();" id="CPass" type="password" name="pass" class="form-control form-control-sm" aria-label=".form-control-sm example" placeholder="len >=8 & it inclds char,spl symbl,num"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" id="check" onclick="Check();" name="cbox"><p class="text-light" style="display:inline;">show password</p></td>
            </tr>
            <tr>
                <td class="text-light">Confirm password:</td>
                <td><input type="password" onkeyup="repass();" id="RePass" name="pass" class="form-control form-control-sm" aria-label=".form-control-sm example" placeholder="re-enter password"></td>
            </tr>
            <tr>
                <td class="text-light">Email:</td>
                <td><input type="email" onkeyup="Email();" id="emailname" name="Emailname" class="form-control form-control-sm" aria-label=".form-control-sm example" placeholder="                                                  @gmail.com"></td>
            </tr>
            <tr>
                <td class="text-light">Gender:</td>
                <td class="text-light"><label>Male</label><input type="radio" name="r1" value="male" id="radiobut1" onclick="Radio();">
                <label>Female</label><input type="radio" name="r1" value="female" id="radiobut2" onclick="Radio();">
                <label>Other</label><input type="radio" name="r1" value="other" id="radiobut3" onclick="Radio();">
                </td>
            </tr>
            <tr>
                <td class="text-light">Mobile number:</td>
                <td><input type="number" name="mobile" onkeyup="Mobile();" id="mobile" placeholder="+91" class="form-control form-control-sm" aria-label=".form-control-sm example"></td>
            </tr>
            <tr>
                <td class="text-light">Address:</td>
                <td><textarea rows="3" cols="40" onkeyup="address();" id="add" name="textarea" class="form-control form-control-sm" aria-label=".form-control-sm example"  placeholder="This address will be taken as your shipping address"></textarea></td>
            </tr>
            <tr>
                <td><input type="reset" value="Reset" class="bg-danger" style="border-radius:5px;margin-top:12%;"></td>
                <td><input type="submit" value="submit" name="vamsi" class="bg-success" style="border-radius:5px;margin-top:3%;margin-left:25%;"></td>
            </tr>
            
        </table>
    </form>
    </div>
    
</body>
</html>

    <script>
        function Firstname()
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
        function Lastname()
        {
            var v=document.getElementById("Lname").value;
            var reg=/^[a-z A-Z]+$/;
            if(v.length>=3 && v.match(reg))
            {
                document.getElementById("Lname").style.border="2px solid green";
                return true ;
            }
            else{
                document.getElementById("Lname").style.border="2px solid red";
                return false;
            }
        }
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
            var reg=/^[a-z A-Z]+\d+[! @ # $ % ^ & * ?]+/;
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
        function address()
        {
            var v=document.getElementById("add").value;
            var reg=/[a-z A-Z]+/;
            if(v.length>=10 && v.match(reg))
            {
                document.getElementById("add").style.border="2px solid green";
                return true;
            }
            else
            {
                document.getElementById("add").style.border="2px solid red";
                return false;
            }
        }
        function hello()
        {
           if(Firstname() && Lastname() && Cpass() && repass() && Email() && Radio() && address() && Mobile())
           {
                return true;
           }
           else
           {
                return false;
           }
        }
    </script>