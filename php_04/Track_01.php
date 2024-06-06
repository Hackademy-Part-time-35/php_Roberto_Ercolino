<?php

class Continent
{
    protected $name_continent;

    protected function __construct($nameContinent)
    {
        $this->name_continent = $nameContinent;
    }
}

class Country extends Continent
{
    protected $name_country;

    protected function __construct( $name_continent ,$name_country)
    {
        $this->name_country = $name_country;
        parent::__construct($name_continent);
    }
}

class Region extends Country
{
    protected $name_region;

    protected function __construct( $name_continent, $name_country, $name_region)
    {
        $this->name_region = $name_region;
        parent::__construct($name_continent, $name_country);
    }
}

class Province extends Region
{
    protected $name_province;

    protected function __construct($name_continent, $name_country, $name_region, $name_province)
    {
        $this->name_province = $name_province;
        parent::__construct($name_continent, $name_country, $name_region);
    }
}

class City extends Province
{
    protected $name_city;
    protected function __construct($name_continent, $name_country, $name_region, $name_province, $name_city)
    {
        $this->name_city = $name_city;
        parent::__construct($name_continent, $name_country, $name_region, $name_province);
    }
}

class Street extends City
{
    protected $name_street;

    public function __construct($name_continent, $name_country, $name_region, $name_province, $name_city, $name_street)
    {
        $this->name_street = $name_street;

        parent::__construct($name_continent, $name_country, $name_region, $name_province, $name_city);
    }

    public function getMyLocation()
    {
        echo "Mi trovo in $this->name_continent, $this->name_country, $this->name_region, $this->name_province, $this->name_city, $this->name_street";
    }
}

$my_location = new Street('Europa', 'Italia', 'Puglia', 'FG', 'Vieste', 'Mandrione');
$my_location->getMyLocation();

