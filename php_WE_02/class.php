<?php

abstract class Category
{
    abstract function getMyCategory();
}

class Attuality extends Category
{
    public function __construct()
    {
        $this->getMyCategory();
    }

    public function getMyCategory()
    {
        echo "Attuality \n";
    }
}

class Sport extends Category
{
    public function __construct()
    {
        $this->getMyCategory();
    }

    public function getMyCategory()
    {
        echo "Sport \n";
    }
}

class Gossip extends Category
{
    public function __construct()
    {
        $this->getMyCategory();
    }

    public function getMyCategory()
    {
        echo "Gossip \n";
    }
}

class History extends Category
{
    public function __construct()
    {
        $this->getMyCategory();
    }

    public function getMyCategory()
    {
        echo "History \n";
    }
}

$attuality = new Attuality();
$sport = new Sport();
$gossip = new Gossip();
$history = new History();