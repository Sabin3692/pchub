<?php
session_start(); 
if(!isset($_SESSION['username'])){
    echo "You are logged out!";
    header('location: register.php');
}
else{
    header('location: index.php');
}
?>