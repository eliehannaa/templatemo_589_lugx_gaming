<?php
function DBConnect(){
    $dbhost="127.0.0.1";
    $dbname="gtbookstore";
    $dbuser="root";
    $dbpass="";
    $db=null;
    try {
        $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);		
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        $db=null;
        die();
    }
    return $db;
}

    function changeIsActive($id, $is_active) {

        $db=DBConnect();
        if($is_active == 0) {
            $query="UPDATE books SET `is_active`= 1 WHERE ID=$id";
        } else if($is_active == 1) {
            $query="UPDATE books SET `is_active`= 0 WHERE ID=$id";
        }
        
    $stmt=$db->query($query);
    return $stmt->rowCount();
    }

    $id = $_POST["id"];
    $is_active = $_POST["is_active"];
    if(changeIsActive($id, $is_active) > 0) {
        echo "<script>alert('Book visibility changed sucessfully')</script>";
    } else {
        echo "<script>alert('An error occured while changing book visibility')</script>";
    }
    header("location:../../fe/pages/admin/viewBooks.php");
    
    
?>