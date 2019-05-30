<?php

$pole = array('name' => 'Test', 10, 20, 30, 40, 50, 60);
var_dump ($pole);
echo '<br>';
$sum = count($pole);
echo 'V poli je: '. $sum .' dat';
echo '<br>';

echo 'Working with array';
echo '<br>';
echo '<br>';

echo 'Cyklus WHILE:';
echo ' Start with no:'. $pole[0] .'<br>';
while ($pole[0] <  15) {
      $pole[0]++;
      echo ' '. $pole[0];
}
echo '<br>'. 'Ends with no:'. $pole[0];


echo '<br>';

echo 'Cyklus DO WHILE:';
do {
//    sleep(1);
    echo ' '. $pole[0];
    $pole[0]++;
}
while ($pole[0] <  19); 

echo '<br>';

$pole[1] = $pole[1] + 1;

$pole[2]++;

$pole[3] = 31;

$pole['other'] = 'other add stringac';

$pole['name'] = 'ElNino';

$sum = count($pole);
echo 'V poli je: '. $sum .' dat';

var_dump ($pole);

// echo $pole;




?>  