<?php

//passaggio delle varie classi

require_once("randGenerator.php");
require("ironComponents.php");

//creare una classe che mi crei un esercito randomico

class MakeIronMan
{
    private $body;
    private $arms;
    private $legs;

    public function __constructor(Body $body, Arms $arms, Legs $legs)
    {
        $this->body = $body;
        $this->arms = $arms;
        $this->legs = $legs;

        $this->printIronMan();
    }

    public function printIronMan()
    {
        echo "Questo IronMan ha il body: {$this->body->type_body}, le braccia sono: {$this->arms->type_arms}, e le gambe sono: {$this->legs->type_legs}";
    }
}


$randNumber = new NumberGenerator();
$numberGenerated1 = $randNumber->generate();
$numberGenerated2 = $randNumber->generate();
$numberGenerated3 = $randNumber->generate();

$my_body = new Body($numberGenerated1);
$my_arms = new Arms($numberGenerated2);
$my_legs = new Legs($numberGenerated3);

$myIronMan = new MakeIronMan($my_body,$my_arms,$my_legs);

