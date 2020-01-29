<?php
    # substr() returns a portion of a string

    $output = substr('Hello', 1);
    echo $output; // ello

    $output = substr('Hello', 1, 3);
    echo $output; // ell

    $output = substr('Hello', -2);
    echo $output; // lo

    # strlen() returns th elength of a string

    $output = strlen('Hello World');
    echo $output; // 11

    # strpos() finds the position of the first occurence of a substring
    
    $output = strpos('Hello World', 'o');
    echo $output; // 4

    # strrpos() finds the position of the last occurence of a substring
    
    $output = strrpos('Hello World', 'o');
    echo $output; // 7

    # trim() strips whitespace

    $text = 'Hello World         ';
    var_dump($text); // string(20) "Hello World "
    $trimmed = trim($text);
    var_dump($trimmed); // string(11) "Hello World"

    # strtoupper makes everything uppercase

    $output = strtoupper('Hello World');
    echo $output; // HELLO WORLD

    # strtolower makes everything lowercase
    
    $output = strtolower('Hello World');
    echo $output; // hello world

    # ucwords() capitalizes every word
    
    $output = ucwords('hello world');
    echo $output; // Hello World

    # str_replace() replace all occurences of a string with a replacement
    $text = 'Hello World';
    $output = str_replace('World', 'Everyone', $text);
    echo $output; // Hello Everyone

    # is_string() check if a string
    $val = 'Hello';
    $output = is_string($val);
    echo $output; // 1 

    $values = array(true, false, null, 'abc', 42, '42', 7.22, 
        '7.22', '', ' ', 0, '0');
    
        foreach($values as $value){
            if(is_string($value)){
                echo "<br>{$value} is a string";
            }
        }

    # gzcompress() compress a string

    $string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sapien purus, 
    venenatis cursus quam in, sollicitudin hendrerit augue. Ut non lobortis augue, sed pellentesque 
    justo. Quisque odio mi, eleifend et luctus tempor, ultrices a dui. Mauris feugiat placerat orci, 
    eu malesuada libero pellentesque sed. Proin hendrerit fringilla dui, in venenatis lacus varius 
    ac. Pellentesque tincidunt mi neque, et accumsan ligula bibendum nec. Nunc non mi convallis, 
    feugiat libero ut, commodo lorem.

    Etiam tristique finibus ante sit amet aliquam. In porta purus arcu, quis fringilla purus 
    bibendum nec. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac 
    turpis egestas. Donec in ante sagittis, suscipit augue eu, imperdiet sem. Suspendisse potenti. 
    Integer rutrum mattis eros quis laoreet. Donec enim diam, fermentum non consequat a, efficitur 
    non sapien. Integer hendrerit sed mauris sit amet iaculis. Cras consectetur sagittis venenatis. 
    Mauris faucibus lorem nibh, nec hendrerit est faucibus eget. Donec rhoncus convallis euismod. 
    Sed eu iaculis nisi, a dapibus orci. Fusce commodo lectus gravida mi pulvinar, porta posuere 
    tortor porta. Donec tincidunt varius turpis, a imperdiet orci tempor lacinia. Integer cursus, 
    velit vitae auctor rutrum, augue enim faucibus sem, in luctus est nunc id elit.";

    $compressed = gzcompress($string);
    echo $compressed;
