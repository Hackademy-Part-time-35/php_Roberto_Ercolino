<?php

class Car
{
    private $num_telaio;

    protected function __construct($num_telaio)
    {
        $this->setNumTelaio($num_telaio);
    }

    public function setNumTelaio($num_telaio)
    {
        $this->num_telaio = $num_telaio;
    }

    protected function getNumTelaio()
    {
        return $this->num_telaio;
    }
}

class MyCar extends Car
{
    protected $license;
    protected $name;

    public function __construct($license, $name, $num_telaio)
    {
        $this->license = $license;
        $this->name = $name;
        parent::__construct($num_telaio);
    }

    public function printMyCar()
    {
        $my_telaio = parent::getNumTelaio();

        echo "la mia macchina e un $this->name, con $this->license, e num di telaio $my_telaio";
    }
}

$my_opel = new MyCar('ND 123 OJ', 'Opel', '123');
$my_opel->printMyCar();