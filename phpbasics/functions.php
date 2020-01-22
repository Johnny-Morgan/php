<?php

# Functions

function simpleFunction(){
    echo 'Hello World<br>';
}

simpleFunction();

function sayHello($name = 'World'){
    echo "Hello $name<br>";
}

sayHello('Johnny');
sayHello();

function addNumbers($num1, $num2){
    return $num1 + $num2;
}

echo addNumbers(15, 16);
echo '<br>';

$myNum = 10;

function addFive($myNum){
    $myNum += 5;
}

// By reference
function addTen(&$myNum){
    $myNum += 10;
}

addFive($myNum);
echo "myNum = $myNum<br>";
addTen($myNum);
echo "myNum = $myNum<br>";
?>