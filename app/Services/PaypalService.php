<?php

namespace App\Services;

use App\Traits\PaymentGetewayTrait;

class PaymentService
{
    use PaymentGetewayTrait;

    private $baseUrl;
    private $clientId;
    private $clientSecret;

    public function __construct()
    {
        $this->baseUrl = config('services.paypal.base_url');
        $this->clientId = config('services.paypal.client_id');
        $this->clientSecret = config('services.paypal.client_secret');
    }

    public function authorization(&$queryParams,$formParams,$headers)
    {

    }
    
}
