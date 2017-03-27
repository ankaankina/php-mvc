<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "php_mvc";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "INSERT INTO posts (author, email, content)
            VALUES ('$_POST[author]', '$_POST[email]', '$_POST[content]')";

    if($conn && $sql){
        $conn->query($sql);
        printf("Data Submitted succesfully");
    }

    $conn->close();
?>