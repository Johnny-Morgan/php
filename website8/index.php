<?php
    require('config/db.php');

    // Create Query
    $query = 'SELECT * FROM posts';

    // Get Result
    $result = mysqli_query($conn, $query);

    // Fetch Data
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    // Free Result
    mysqli_free_result($result);

    // CLose Connection
    mysqli_close($conn);

