<?php

class Vertebrates
{
    protected function printThis()
    {
        echo " sono un animale vertebrato ";
    }

    protected function __construct()
    {
        $this->printThis();
    }
}

class WarmBlooded extends Vertebrates
{
    protected function printWarmBlooded()
    {
        echo " sono un animale a sangue caldo ";
    }

    protected function __construct()
    {
        $this->printWarmBlooded();
        parent::__construct();
    }
}

class ColdBlooded extends Vertebrates
{
    protected function printColdBlood()
    {
        echo " im cold blooded ";
    }

    protected function __construct()
    {
        $this->printColdBlood();
        parent::__construct();
    }
}

class Mammals extends WarmBlooded
{
    public function __construct()
    {
        echo "sono un leone \n";
        WarmBlooded::__construct();
    }
}

class Birds extends WarmBlooded
{
    public function __construct()
    {
        echo "chirp chirp sono un uccello \n";
        WarmBlooded::__construct();
    }
}

class Fish extends ColdBlooded
{
    public function __construct()
    {
        echo "splash \n";
        ColdBlooded::__construct();
    }
}

class Amphibians extends ColdBlooded
{
    public function __construct(){
        echo "sono una rana \n";
        ColdBlooded::__construct();
    }
}

class Reptiles extends ColdBlooded
{
    public function __construct()
    {
        echo "pssssss sono un serpente \n";
        ColdBlooded::__construct();
    }
}

$magikarp = new Fish();
$frog = new Amphibians();
$snake = new Reptiles();

$Lion = new Mammals();
$bird = new Birds();