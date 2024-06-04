<?php

class Company
{
    public static $num_companies;
    public static $company_annual_cost = [];

    public $name_company;
    public $location;
    public $employes;
    public $avg_salary;

    public function __construct($name, $location, $salary,$employes = 0)
    {
        $this->name_company = $name;
        $this->location = $location;
        $this->employes = $employes;
        $this->avg_salary = $salary;

        self::$num_companies++;

        $this->printMe();
    }

    public function printMe()
    {
        if( $this->employes > 0)
        {
            echo "L'azienda $this->name_company con sede in $this->location ha ben $this->employes \n";
        }
        else
        {
            echo "L'azienda $this->name_company con sede in $this->location non ha impiegati $this->employes \n";
        }
    }

    public function media_cost($numbersMonth = 12)
    {
        $media_cost = ($this->avg_salary * $this->employes) * $numbersMonth;
        echo "$this->name_company ha speso {$media_cost} in personale \n";
        array_push(self::$company_annual_cost, $media_cost);
    }

    static public function all_companies_cost()
    {
        $company_cost = self::$company_annual_cost;
        if($company_cost >= 40000)
        {
            echo "Considerando tutte le aziende nel nostro gruppo, spendiamo in media un totale di 40k annui";
        }
    }
}

$companies = [];

$twitter = new Company('twitter', 'Foggia', 50, 300);
$instagram = new Company('instagram', 'Bari', 500, 500);
$tesla = new Company('tesla', 'Milano', 30, 1000);
$space_x= new Company('space x', 'Cagliari', 4,90);
$facebook = new Company('facebook', 'Napoli', 3020,4);
$whatsapp = new Company('whatsapp', 'Ancona',100000);

array_push($companies , $twitter);
array_push($companies , $instagram);
array_push($companies , $tesla);
array_push($companies , $space_x);
array_push($companies , $facebook);
array_push($companies , $whatsapp);

foreach($companies as $company)
{
    $company->media_cost();
}

var_dump(Company::$num_companies);
var_dump(Company::$company_annual_cost);

Company::all_companies_cost();