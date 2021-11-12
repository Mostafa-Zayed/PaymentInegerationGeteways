<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Inerfaces\PaypalInterface;

class PaypalController extends Controller
{
    private $paypalInterface;

    public function __construct(PaypalInterface $paypalInterface)
    {
        $this->paypalInterface = $paypalInterface;        
    }

    public function payment()
    {
        return $this->paypalInterface->payment();
    }
}
