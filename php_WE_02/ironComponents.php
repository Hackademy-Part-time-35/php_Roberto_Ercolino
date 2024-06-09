<?php

class Body
{
    public $type_body;

    public function __construct($randNum)
    {
        switch($randNum)
        {
            case 1: $this->type_body = "Amianto";
            break;
            case 2: $this->type_body = "Acciaio";
            break;
            case 3: $this->type_body = "Ferro";
        }
    }

    public function get()
    {
        return $this->type_body;
    }

}

class Arms
{
    public $type_arms;

    public function __construct($randNum)
    {
        switch($randNum)
        {
            case 1: $this->type_arms = "Pugni";
            break;
            case 2: $this->type_arms = "Raggi Laser";
            break;
            case 3: $this->type_arms = "Lame";
        }
    }

    public function get()
    {
        return $this->type_arms;
    }

}

class Legs
{
    public $type_legs;

    public function __construct($randNum)
    {
        switch($randNum)
        {
            case 1: $this->type_legs = "Super salto";
            break;
            case 2: $this->type_legs = "Calci";
            break;
            case 3: $this->type_legs = "Boost velocita";
        }
    }

    public function get()
    {
        return $this->type_legs;
    }
}
