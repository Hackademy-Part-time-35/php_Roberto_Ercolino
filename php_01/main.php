<?php

$var_int = 10;
$var_float = 20.50;
$var_string = "ciao!!";
$var_boolean = true;

// var_dump($var_int);
// var_dump($var_float);
// var_dump($var_string);
// var_dump($var_boolean);

$text1 = "Marco"; 
$text2 = "hai"; 
$text3 = "sete"; 
$text4 = "?"; 
$text5 = "Perchè"; 
$text6 = "$text2"; 
$text7 = 'bevuto'; 
$text8 = "tutto";

$my_string = $text1 . " " . $text2 . " " . $text3 . $text4 . " " . $text5 . " " . $text6 . " " . $text7 . " " . $text8;

// echo $my_string;

$words1 = 
[ 
    'una', //0
    67, //1
    'vita', //2
    'colle',//3
    'mi', //4
    'rosso', //5
    [ //6
        'oscura', //0
        'era', //1
        89, //2
        [ //3
            'mezzo',//0
            [ //1
                'cammin', //0
                'Nel', //1
                [ //2
                    'selva', //0
                    'la', //1
                    [ //2
                        'via', //0
                        'una', //1
                        true, //2
                        ] 
                    ], 
                    ] 
                ], 
                'ritrovai', //4
                'per' //5
            ], 
            'diritta', //7
            'di',//8
            ','//9
        ]; 
        
        $words2 = [ 
            'elemento1' => 25.89, 
            'elemento2' => 'nostra', 
            'elemento3' => [ 
                'Virgilio', 
                'smarrita', 
                'ché' 
                ] 
            ];
  
            
//Nel mezzo di cammin di nostra vita mi ritrovai per una selva oscura, che' la dritta via era smarrita
$result =  $words1[6][3][1][1] . " " . $words1[6][3][0] . " ". $words1[8] . " " . $words1[6][3][1][0] . " " . $words1[8] . " " . $words2['elemento2'] . " " . $words1[2] . " " . $words1[4] . " " . $words1[6][4] . " " . $words1[6][5] . " " . $words1[6][3][1][2][2][1] . " " . $words1[6][3][1][2][0] . " " . $words1[6][0] . $words1[9] . " " . $words2['elemento3'][2] . " " . $words1[6][3][1][2][1] . " " . $words1[7] . " " . $words1[6][3][1][2][2][0] . " " . $words1[6][1] . " " . $words2['elemento3'][1];
// echo $result;

$x = 10;
$y = 20;
$z = "20";
$w = 10;

// var_dump($x < $y);
// var_dump($x <= $w);
// var_dump($y == $z);
// var_dump($y === $z);
// var_dump($y !== $z);
// var_dump($y != $z);

$corsoHackademy = 
[
    'docenti' => ['Giuseppe', 'Emanuele', 'Andrea'],
    'alunni' => ['Roberto', 'Marco', 'Giada'],
    'argomenti' => ['html', 'javascript', 'php'],
    " "
];

// var_dump($corsoHackademy);
$my_hackademy_string = "ciao sono {$corsoHackademy['alunni'][0]} e sto studiando {$corsoHackademy['argomenti'][2]} con {$corsoHackademy['docenti'][1]}";

echo $my_hackademy_string;
