<?php

namespace App\Traits;

use GuzzleHttp\Client;

trait PaymentGetewayTrait
{
    public function makeRequest($method, $url, $queryParams = [], $formParams = [], $headers = [], $isJsonFormat = false)
    {
        $client = new Client([
            'base_url' => $this->baseUrl
        ]);

        $response = $client->request($method,$url,[
            $isJsonFormat ? 'json' : 'form_params' => $formParams,
            'headers' => $headers,
            'query' => $queryParams
        ]);

        if (method_exists($this,'authorization')) {
            $this->authorization($queryParams,$formParams,$headers);
        }

        return $response->getBody()->getContents();
    }
}
