<?php
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Sessions</title>
</head>
<body>
    <p>Session destroyed</p>
    <a href="page3.php">Go back</a>
</body>
</html>