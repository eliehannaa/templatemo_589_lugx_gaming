<?php
   function VarExist($var){
    if (isset($var)){
        return $var;
    }else{
        header("location:../../index.php");
    }
}



function DBConnect() {
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

    $db = DBConnect();
    $book = new stdClass();
    $book->name = VarExist($_POST["name"]);
    $book->description = VarExist($_POST["description"]);
    $book->image = VarExist($_FILES["image"]["name"]);
    $book_image_tmp_name = $_FILES['image']['tmp_name'];
    $book_image_folder = '../../images/' . $book->image;
//    echo "".$book;
    $query = "INSERT INTO books (name, description, is_active, image) VALUES('".$book->name."','".$book->description."',1,'".$book->image."');";
    $stmt = $db->query($query);
    move_uploaded_file($book_image_tmp_name,$book_image_folder);
    header('location:../../fe/pages/admin/addBook.php');
?>