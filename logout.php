<?php
session_start();
unset($_SESSION['Id']);
unset($_SESSION['username']);
header("Location:login.php");
?>