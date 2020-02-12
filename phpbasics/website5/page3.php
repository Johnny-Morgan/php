<?php
    $user = ['name' => 'Johnny', 'email' => 'test@test.com', 'age' => 38];
    
    $user = serialize($user);

    setcookie('user', $user, time() + 86400);

    // $user = $_COOKIE['user'];

    // echo $user['name']; // illegal string offset 'name'

    $user = unserialize($_COOKIE['user']);

    print_r($user);
?>

