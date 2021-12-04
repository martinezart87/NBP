<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class NBPAPI
{
    protected $URL;

    public function __construct()
    {
        $this->URL = "https://api.nbp.pl/api/exchangerates/tables/A/?format=json";
    }

    public function getData()
    {
        $response = Http::get($this->URL);
        return $response;
    }
}
