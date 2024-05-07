<?php


$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$ID= $_POST['ID'];
$description = $_POST['description'];
$status = $_POST['status']

$stmt = $conn->prepare("INSERT INTO books (ID, description, status) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sssd", $title, $author, $genre, $price);

if ($stmt->execute() === TRUE) {
    echo "New book added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();

?>
