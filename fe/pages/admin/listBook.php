<?php 
session_start();
require_once("../../be/listBook.php");
require_once("../views/bookView.php");
?>
<?php
    if (isset($_GET["errorCode"])){
            echo "<script>alert('".$_GET["errorDesc"]."');</script>";
    }
?>
<html>