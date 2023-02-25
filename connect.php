<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="data123";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)
{
    die("connection failed:".mysqli_connect_error());
}
if(isset($_POST['vamsi']))
{
    $password=$_POST['pass'];
    $email_name=$_POST['Emailname'];

    $sql_query="INSERT INTO detail(email,pass)
    VALUES('$email_name','$password')";
    // mysqli_query($conn, $sql_query);
    
    $_SESSION["fname"]=$_POST['fname'];
    $connect=mysqli_connect("localhost","root","","data123");
    $N=$_SESSION['fname'];
    // $ss="CREATE TABLE `$N`(
    // pname VARCHAR(255),
    // pimg VARCHAR(255),
    // psdes VARCHAR(255),
    // pmrp INT,
    // pprice INT
    // )";
    // mysqli_query($connect,$ss);
    // $tab1 = 'ord';
    // $tab2 = $N.$tab1;
    // $cre="CREATE TABLE `$tab2`(
    //     oname VARCHAR(255),
    //     oimg VARCHAR(255)
    // )";
    // mysqli_query($connect,$cre);
    unset($_SESSION['fname']);
    if (mysqli_query($conn, $sql_query))
    {
        header('Location: login.php');
    }
    mysqli_close($conn);
}

?>