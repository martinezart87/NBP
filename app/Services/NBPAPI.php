<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Models\Currency;

class NBPAPI
{
    protected $URL;

    public function __construct()
    {
        $this->URL = "https://api.nbp.pl/api/exchangerates/tables/A/?format=json";
    }

    public function getData()
    {
        $response = Http::accept('application/json')->get($this->URL);
        if($response->status() !== 200){
            return ['message' => 'NBP API error. Ststus: '. $response->status()];
        }

        $response = json_decode($response, true);

        foreach($response[0]['rates'] as $item){
            $data[] = [
                'name' => $item['currency'],
                'currency_code' => $item['code'],
                'exchange_rate' => round(floatval($item['mid']), 2),
            ];
        }
        Currency::upsert($data, ['name'], ['currency_code'], ['exchange_rate']);
        return $data;
    }
}
