<?php

$users = 
[
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'maschio' ],
    ['name' => 'Robi', 'surname' => 'Erco', 'gender' => 'maschio' ],
    ['name' => 'Sara', 'surname' => 'Gibbone', 'gender' => 'femmina' ],
    ['name' => 'Tonio', 'surname' => 'Cartonio', 'gender' => 'maschio' ],
    ['name' => 'Lara', 'surname' => 'Gibbone', 'gender' => 'femmina' ]
];

foreach ($users as $persona) 
{
    if($persona['gender'] == 'mascio')
    {
        echo "buongiorno sig {$persona['name']} \n";
    }
    else
    {
        echo "Buongiorno signora {$persona['name']} \n";
    }
}