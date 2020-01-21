<?php
# LOOPS

# For Loops

for($i = 0; $i < 10; $i++){
    echo $i;
    echo '<br>';
}

echo '<br>';

# While Loop

$x = 0;

while($x < 10){
    echo $x;
    echo '<br>';
    $x++;
}

echo '<br>';

# Do While Loop

$y = 0;

do {
    echo $y;
    echo '<br>';
    $y++;
} while($y < 10);

echo '<br>';

# Foreach Loop

$numbers = [4, 8, 15, 16, 23, 42];
foreach($numbers as $number){
    echo $number . ' ';
}

echo '<br>';

$people = array('Mcnulty' => 'jamesonmcnulty@gmail.com', 'Bunk' => 'humblebunk@gmail.com', 'Omar' => 'allinthegame@gmail.com');

foreach($people as $person => $email){
    echo $person . ': ' . $email;
    echo '<br>';
}

?>