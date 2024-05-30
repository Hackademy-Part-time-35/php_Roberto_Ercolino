<?php

$my_numbers = [2,10,12,15,19,23,14,87,21,43,56,76,78,123,433];

$my_average = 0;

$length = count($my_numbers);

for($i = 0; $i < $length; $i++)
{
    if($my_numbers[$i] % 2 == 0)
    {
        echo $my_numbers[$i] . " \n";
        $my_average += $my_numbers[$i];
    }
    else
    {
        echo "salto!! \n";
    }
}

var_dump($my_average);