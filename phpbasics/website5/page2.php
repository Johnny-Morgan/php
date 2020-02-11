<?php
    if(count($_COOKIE) > 0){
        echo 'There are '.count($_COOKIE).' cookies saved<br>';
    } else {
        echo 'There are no coookies saved';
    }

    if(isset($_COOKIE['username'])){
        echo 'User '.$_COOKIE['username'].' is set<br>';
    } else {
        echo 'User is not set';
    }

    
    // Change cookie
    setcookie('username', 'Liam', time() + (86400 * 30)); // 30 days 
?>