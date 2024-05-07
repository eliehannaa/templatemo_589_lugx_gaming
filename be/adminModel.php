<?php
session_start();
require_once("common/dbconfig.php");
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

function LogOut()
{
    // Start the session if it hasn't been started yet
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Unset all session variables
    $_SESSION = array();

    // If it's desired to kill the session, also delete the session cookie.
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    // Finally, destroy the session.
    session_destroy();

    // Redirect to the login page or home page
    header("Location: index.php");
    exit;
}

?>