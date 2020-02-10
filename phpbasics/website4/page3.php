<?php
    session_start();
    $name = isset($_SESSION['name']) ? $_SESSION['name']
        : 'Guest';
    $email = isset($_SESSION['email']) ? $_SESSION['email']
        : 'Not subscribed';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Sessions</title>
</head>
<body>
    <h1>Hello <?php echo $name; ?></h1>
    <h1>Current email: <?php echo $email; ?></h1>
    <a href="page4.php">Go to page 4</a>
</body>
</html>