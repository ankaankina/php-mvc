<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_mvc";

$conn = new mysqli($servername, $username, $password, $dbname);

$author = $_POST[author];
$email = $_POST[email];
$content = $_POST[content];
$insText= htmlentities($content, ENT_QUOTES | ENT_HTML5);
$sql="INSERT INTO posts (author, email, content)
    VALUES ('$author', '$email', '$insText')";

if($conn && $sql){
    $conn->query($sql);
    printf("Data Submitted successfully");
}

$conn->close();
?>