<p>Here is a list of all posts:</p>

<?php
$posts = array();
foreach($posts as $post) { ?>
    <h5>
        <?php echo $post->author; $post -> email; ?>
    </h5>
    <p>
        <?php echo $post->content; ?>
    </p>
<?php } ?>