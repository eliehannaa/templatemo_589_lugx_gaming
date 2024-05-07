<?php
session_start();
require_once("common/dbconfig.php");


if (!isMissingArgs()){
    $un=$_POST["tfun"];
    $pass=$_POST["tfpass"];
    if ($username=login($un,$pass)){
        $_SESSION["username"]=$username;
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
   $query="SELECT ID,USERNAME FROM tbl_users WHERE USERNAME='$un' AND PASSWORD='$pass' AND IS_ACTIVE=1";
   $stmt=$db->query($query);
   if ($stmt->rowCount()>0){
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        $user->username = $row["USERNAME"];
        return $username;
   }else{
        return 0;
   }
}


?>