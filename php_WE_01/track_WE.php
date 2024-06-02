<?php
//at least an uppercase letter, number character, at least 8 character
//make a loop that simulate an inserment password

$my_password = readline("scrivi la tua password qui\n");

function checkPassword(string $password)
{
    $checkingPassword = true;

    while($checkingPassword)
    {
        $length = passLength($password);
        $upperCase = passUppercase($password);
        $number = passNumber($password);

        if($length == true && $upperCase == true && $number == true)
        {
            echo "la tua password va bene! \n";
            $checkingPassword = false;
        }
        else
        {
            if(!$length)
            {
                $password = readline("la password è troppo corta! \n");
            }
            else if(!$upperCase)
            {
                $password = readline("ci deve essere almeno un carattere maiuscolo \n");
            }
            else if(!$number)
            {
                $password = readline("ci deve essere almeno un numero \n");
            }
        }
    }

    return true;
}

function passLength(string $password)
{
    $passLen = strlen($password);
    
    if($passLen >= 8)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function passUppercase($password)
{
    $array_pass = str_split($password);

    foreach ($array_pass as $character)
    {
        if(ctype_upper($character))
        {
            return true;
        }
    }

}

function passNumber($password)
{
    $array_pass = str_split($password);

    foreach($array_pass as $numbers)
    {
        if(is_numeric($numbers))
        {
            return true;
        }
    }
}

checkPassword($my_password);

echo "fine del programma";
