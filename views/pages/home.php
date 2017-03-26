<p>Here is a list of all posts:</p>

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
$sql="SELECT * FROM posts";
$posts = $conn->query($sql);
echo "<pre>"; print_r($posts); echo "</pre>";
//$posts = array();
foreach($posts as $post) { ?>
    <h5>
        <?php echo $post->author; $post -> email; ?>
    </h5>
    <p>
        <?php echo $post->content; ?>
    </p>
<?php }
$conn->close(); ?>