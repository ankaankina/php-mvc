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

        $sql="INSERT INTO posts (author, email, content)
        VALUES ('$_POST[author]', '$_POST[email]', '$_POST[content]')";

        if($conn && $sql){
            echo "Data Submitted succesfully";
        }

        $conn->close();
        ?>

    </body>
</html>