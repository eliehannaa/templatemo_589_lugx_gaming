<?php
function VarExist($var)
{
    if (isset($var)) {
        return $var;
    } else {
        header("location:../../index.php");
    }
}

function DBConnect()
{
    $dbhost = "127.0.0.1";
    $dbname = "gtbookstore";
    $dbuser = "root";
    $dbpass = "";
    $db = null;
    try {
        $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        $db = null;
        die();
    }
    return $db;
}

$db = DBConnect();

$user = new stdClass();
$user->pass = VarExist($_POST["password"]);
$user->un = VarExist($_POST["username"]);



$query = "SELECT id, username, password FROM users";
$stmt = $db->query($query);
$arr = array();
while ($obj = $stmt->fetch(PDO::FETCH_OBJ)) {
    $arr[] = $obj;
}
$flag = false; 

for ($i = 0; $i < sizeof($arr); $i++) {
    if($user->un===$arr[$i]->username && $arr[$i]->password===$user->pass) {
        $flag = true;
        break;
    }
}
if($flag) {
    echo "<script>alert('login works');</script>";
    session_start();
    $_SESSION["username"] = $user->un;
    header("location:../../fe/pages/admin/viewBooks.php");
}
else {
    echo '<script> alert("Invalid Username or Password!"); </script>';
    echo '<script> window.location.replace("../../fe/pages/signin.html");</script>';
}

?>
