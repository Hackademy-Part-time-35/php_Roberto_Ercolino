<?php

class Student
{
    public $name;
    public $surname;
    public $scores = [];
    public static $all_votes;
    public static $average;

    public function __construct($name, $surname, $months ,...$votes)
    {
        $this->name = $name;
        $this->surname = $surname;

        $this->addVote(...$votes);
        self::mediaVote($this->scores, $months);

        $this->printMe();
    }

    public function addVote(...$votes)
    {
        array_push($this->scores, ...$votes);
    }

    public static function mediaVote($scores, $months)
    {
        self::$all_votes = array_sum($scores);
        self::$average = self::$all_votes / $months;
    }

    public function printMe()
    {
        echo "Lo studente $this->name con i voti...";

        foreach($this->scores as $score)
        {
            echo " " . $score . " ";
        }
        
        echo "\nLa media dei voti è: " . self::$average . "\n";
    }
}

$Fabio = new Student("Fabio","Paglionicco", 10,8,7, 7,8,9);



