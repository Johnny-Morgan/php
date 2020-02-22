<?php
    require('config/db.php');

    // Get ID
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Create Query
    $query = 'SELECT * FROM posts WHERE id = '.$id;

    // Get Result
    $result = mysqli_query($conn, $query);

    // Fetch Data
    $post = mysqli_fetch_assoc($result);
    
    // Free Result
    mysqli_free_result($result);

    // CLose Connection
    mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Blog</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.css">
</head>
<body>
    <div class="container">
        <a href="/" class="btn btn-light">Back</a>
        <h1><?php echo $post['title']; ?></h1>
        <small>Created on <?php echo $post['created_at']; ?> 
        by <?php echo $post['author'];?></small>
        <p><?php echo $post['body']; ?></p>
    </div>
</body>
</html>