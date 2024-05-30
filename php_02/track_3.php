<?php

$start = 0;

while($start <= 100)
{
    if($start % 5 == 0 && $start % 3 == 0)
    {
        echo "HACKADEMY \n";
    }
    else if($start % 5 == 0)
    {
        echo "JAVASCRIPT \n";
    }
    else if($start % 3 == 0)
    {
        echo "PHP \n";
    }
    else
    {
        echo "niente... {$start} \n";
    }

    $start++;
}