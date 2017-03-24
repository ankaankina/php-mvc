<html>
    <body>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "php_mvc";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql="INSERT INTO posts (author, email, image, content)
        VALUES ('$_POST[author]', '$_POST[email]', '$_POST[img]', '$_POST[content]')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        ?>

    </body>
</html>