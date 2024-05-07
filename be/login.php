<?php
session_start();
require_once("common/dbconfig.php");


if (!isMissingArgs()){
    $un=$_POST["tfun"];
    $pass=$_POST["tfpass"];
    if ($name=login($un,$pass)){
        $_SESSION["name"]=$name;
        header("location:../fe/pages/listUsers.php");
    }else{
        header("location:../index.php?errorCode=1&errorDesc=Wrong Username or Password!");
    }    
}else{
    header("location:../index.php?errorCode=2&errorDesc=Missing Args!");
}

function isMissingArgs(){
    if (!isset($_POST["tfun"]))
        return 1;
    if (!isset($_POST["tfpass"]))
        return 1;
    
}

function login($un,$pass){
   global $db;
   $query="SELECT ID,FIRST_NAME,LAST_NAME FROM tbl_users WHERE USERNAME='$un' AND PASSWORD='$pass' AND IS_ACTIVE=1";
   $stmt=$db->query($query);
   if ($stmt->rowCount()>0){
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        $name=$row["FIRST_NAME"]." ".$row["LAST_NAME"];
        return $name;
   }else{
        return 0;
   }
}


?>