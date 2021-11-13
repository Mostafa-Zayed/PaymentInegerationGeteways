<?php

namespace  App\Repositories;

use App\Interfaces\GetewaySettingInterface;

class  GetewaySettingRepository implements GetewaySettingInterface
{
    public function index()
    {
        return 'getewaysetting';
    }
}
