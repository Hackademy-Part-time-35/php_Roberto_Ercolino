<?php

class NumberGenerator
{
    public function generate($min = 1, $max = 3)
    {
        return mt_rand($min, $max);
    }
}