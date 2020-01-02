<?php 
session_start();
unset($_SESSION['tourist']);
header('location:../index.php');
?>