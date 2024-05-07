<?php
session_start();
require_once("common/dbconfig.php");

function AddBook($book, $db)
{
    //insert query
    $query = "INSERT INTO `tbl_books` (`BOOK`,`DESCRIPTION`) VALUES ('$user->book','$book->description')";
    $stmt = $db->query($query);
    if ($stmt->rowCount() > 0)
        return 1;
    else
        return 0;
}

function ActivateBook($id, $db)
{
    // Prepare the update statement to avoid SQL injection
    $query = "UPDATE `tbl_books` SET `IS_ACTIVE` = 1 WHERE `ID` = :id";
    $stmt = $db->prepare($query);

    // Bind the ID to the prepared statement
    $stmt->bindParam(':id', $id);

    // Execute the query and check if the book was activated
    if ($stmt->execute()) {
        return ($stmt->rowCount() > 0) ? 1 : 0;
    } else {
        return 0;  // Return 0 if the book wasn't activated
    }
}

function DeactivateBook($id, $db)
{
    // Prepare the update statement to avoid SQL injection
    $query = "UPDATE `tbl_books` SET `IS_ACTIVE` = 0 WHERE `ID` = :id";
    $stmt = $db->prepare($query);

    // Bind the ID to the prepared statement
    $stmt->bindParam(':id', $id);

    // Execute the query and check if the book was deactivated
    if ($stmt->execute()) {
        return ($stmt->rowCount() > 0) ? 1 : 0;
    } else {
        return 0;  // Return 0 if the book wasn't deactivated
    }
}



function DeleteBook($id)
{
    global $db;

    $query = "Delete FROM tbl_books where ID=$id";
    $stmt = $db->query($query);
    if ($stmt->rowCount() > 0) {
        return 1;
    } else {
        return 0;
    }
}


function GetBook($id, $db)
{
    // Prepare the SELECT statement to avoid SQL injection
    $query = "SELECT * FROM `tbl_books` WHERE `ID` = :id";
    $stmt = $db->prepare($query);

    // Bind the ID to the prepared statement
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    // Execute the query
    if ($stmt->execute()) {
        // Fetch the book details
        $bookDetails = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($bookDetails) {
            return $bookDetails;  // Return the book details array
        } else {
            return null;  // Return null if no book was found
        }
    } else {
        return false;  // Return false if the query failed to execute
    }
}

function GetBooks($db)
{
    // Prepare the SELECT statement to fetch all books
    $query = "SELECT * FROM `tbl_books`";
    $stmt = $db->prepare($query);

    // Execute the query
    if ($stmt->execute()) {
        // Fetch all book details
        $booksDetails = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($booksDetails) {
            return $booksDetails;  // Return the array of book details
        } else {
            return [];  // Return an empty array if no books are found
        }
    } else {
        return false;  // Return false if the query failed to execute
    }
}



?>

