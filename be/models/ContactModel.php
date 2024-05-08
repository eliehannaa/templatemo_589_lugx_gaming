<?php
function VarExist($var)
{
    if (isset($var)) {
        return $var;
    } else {
        echo '<script> alert("Enter fields correctly!"); </script>';
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


$user = new stdClass();
$user->email = VarExist($_POST["email"]);
$user->message = VarExist($_POST["message"]);
$user->fn = VarExist($_POST["fname"]);
$user->ln = VarExist($_POST["lname"]);


function addContact($user)
{

    $db = DBConnect();
    $query = "INSERT INTO contacts (firstname,lastname, email, message) VALUES ('$user->fn','$user->ln', '$user->email','$user->message')";
    echo $query;
    $stmt = $db->query($query);
    if ($stmt->rowCount() > 0) {
        return 1;
    } else {
        return 0;
    }
}
if(addContact($user)==1) {
    
    echo "<script>alert('Message sent sucessfully!');</script>";
    header("location: ../../fe/pages/contact.php");

}


?>