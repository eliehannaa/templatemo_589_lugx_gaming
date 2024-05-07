<?php

/**
 * adds a user to array users
 * @param $user is a dictionary with user attributes
 * returns bool
 */
function signup($user, $db)
{
    //insert query
    $query = "INSERT INTO `tbl_users` (`USERNAME`,`PASSWORD`) VALUES ('$user->username','$user->password')";
    $stmt = $db->query($query);
    if ($stmt->rowCount() > 0)
        return 1;
    else
        return 0;
}

function GetUsers()
{
    global $db;
    $users = array();
    $query = "SELECT ID,USERNAME FROM tbl_users";
    $stmt = $db->query($query);
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $user = new stdClass();
            $user->id = $row["ID"];
            $user->username = $row["USERNAME"];
           
            $users[] = $user;
        }
        return $users;
    } else {
        return 0;
    }
}

function DeleteUser($id)
{
    global $db;

    $query = "Delete FROM tbl_users where ID=$id";
    $stmt = $db->query($query);
    if ($stmt->rowCount() > 0) {
        return 1;
    } else {
        return 0;
    }
}



function login($un, $pass)
{
    global $db;
    $query = "SELECT ID FROM tbl_users WHERE USERNAME='$un' AND PASSWORD='$pass' AND IS_ACTIVE=1";
    $stmt = $db->query($query);
    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $user->username = $row["USERNAME"];
        return $username;
    } else {
        return 0;
    }
}
?>