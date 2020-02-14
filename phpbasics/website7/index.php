<!-- File System Functions -->
<?php
    $path = '/dir/myfile.php';
    $file = 'file1.txt';

    // Return filename
    echo basename($path); // myfile.php

    // Return filename without ext
    echo basename($path, '.php'); // myfile

    // Return the dir name from path
    echo dirname($path); // /dir1

    // Check if file exists
    echo file_exists($file); // 1

    // Get abs path
    echo realpath($file); // C:\xampp\htdocs\phpbasics\website7\file1.txt

    // Check to see if file
    echo is_file($file); // 1

    // Check to see if file is writeable
    echo is_writable($file); // 1

    // Check to see if file is readable
    echo is_readable($file); // 1

    // Get file size
    echo filesize($file); // 11

    // Create a directory
    mkdir('testing');

    // Delete a directory if it is empty
    rmdir('testing');

    // Copy file
    echo copy('file1.txt', 'file2.txt');

    // Rename file
    rename('file2.txt', 'myfile.txt');

    // Delete file
    unlink('myfile.txt');

    // Write from file to string
    echo file_get_contents($file);

    // Write string to file
    echo file_put_contents($file, 'Goodbye World'); // Overwrites data

    // Append
    $current = file_get_contents($file);

    $current .= ' Goodbye World';

    file_put_contents($file, $current);

    // Open file for reading
    $handle = fopen($file, 'r');
    $data = fread($handle, filesize($file));
    echo $data;
    fclose($handle);

    // Open file for writing
    $handle = fopen('file2.txt', 'w');
    $txt = 'Johnny';
    fwrite($handle, $txt);
    fclose($handle);

?>
