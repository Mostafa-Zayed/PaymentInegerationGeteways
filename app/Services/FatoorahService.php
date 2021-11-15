<?php

namespace App\Services;

use App\Traits\PaymentGetewayTrait;

class FatoorahService
{
    use PaymentGetewayTrait;

    private $baseUrl;
    private $token;
    private $errorUrl;
    private $successUrl;

    public function __construct()
    {
        $this->baseUrl = config('services.fatoorah.base_url');
        $this->toke = config('services.fatoorah.token');
        $this->errorUrl = config('services.fatoorah.error_url');
        $this->successUrl = config('services.fatoorah.success_url');
    }

    public function authorization(&$queryParams,$formParams,$headers)
    {

    }
}