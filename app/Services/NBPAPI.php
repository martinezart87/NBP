<?php

namespace App\Services;

class NBPAPI
{
    protected $URL;

    public function __construct()
    {
        $this->URL = "https://api.nbp.pl/api/exchangerates/tables/A/?format=json";
    }

    public function getData()
    {
        return $this->URL;
    }
}
