<?php
session_start();
    if(isset($_SESSION["uname"]))
    {
        session_destroy();
        header('Location: main.php');
    }
    else{
        header('Location: main.php');
    }
   
?>