<?php

namespace App\Services;

use App\Traits\PaymentGetewayTrait;

class StripeService
{
    use PaymentGetewayTrait;

    private $baseUrl;
    private $key;
    private $secret;

    public function __construct()
    {
        $this->baseUrl = config('services.stripe.base_url');
        $this->key = config('services.stripe.key');
        $this->secret = config('services.stripe.secret');
    }

    public function authorization(&$queryParams,$formParams,$headers)
    {

    }
}
