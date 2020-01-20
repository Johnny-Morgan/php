<?php
    // single line comment
    # single line comment
    /*
        multiline 
        comment 
    */

    // Variable Names
    /*
        - prefix with $ 
        - start with a letter or underscore
        - can contain letters, numbers and underscores
        - case sensitive 
    */

    // Data Types
    /*
        String
        Integers
        Floats
        Booleans
        Arrays
        Objects
        NULL
        Resource
    */

    $output = 'Hello World';
    $int1 = 42;
    $int2 = 20;
    $sum = $int1 + $int2;
    $float1 = 1.1;
    $bool1 = true;

    // Concatenate Strings
    $string1 = 'Hello';
    $string2 = 'World';
    $greeting = $string1 . ' ' . $string2 . '!';
    #echo $greeting;
    $greeting2 = "$string1 $string2!";
    #echo $greeting2;

    // Constant
    define('GREETING', 'Hello there');
    #echo GREETING;

    // Arrays
    /*
        - Indexed
        - Associative
        - Multi-dimensional
    */

    // Indexed
    $people = array('John', 'Jack', 'Kate', 'Sawyer', 'Hurley');
    $people[] = 'Sayid'; // adds to end
    $numbers = [4, 8, 15, 16, 23, 42];

    #echo $people[5];
    #echo count($people);
    #print_r($people);
    #var_dump($people);
    
    #echo $numbers[2];

    // Associative arrays
    $siblings = array('Paula' => 45, 'Eva' => 37, 'Clare' => 34);
    #echo $siblings['Paula'];
    $siblings['Chris'] = 32;
    #echo $siblings['Chris'];
    #print_r($siblings);

    // Multi-dimensional
    $cars = array(
        array('Tesla', 20, 10),
        array('BMW', 10, 5),
        array('Toyota', 50, 25)
    );
    echo $cars[1][2];

?>