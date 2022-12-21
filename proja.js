function Fname()
{
    var v=document.getElementById("Fname").value;
    var reg=/^[a-z A-Z]*/;
    alert("hello");
    if(v.length>=3 && reg.match(v))
    {
        v.style.border="2px solid green";
        return true;
    }
    else{
        v.style.border="2px solid red";
        return false;
    }
}