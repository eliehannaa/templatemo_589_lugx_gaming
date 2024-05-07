<?php


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

?>