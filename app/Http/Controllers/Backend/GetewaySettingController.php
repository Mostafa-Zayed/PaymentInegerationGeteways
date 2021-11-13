<?php

namespace App\Http\Controllers\Backend;

use App\Models\GetewaySetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\GetewaySettingInterface;

class GetewaySettingController extends Controller
{
    private $getewaySettingInterface;

    public function __construct(GetewaySettingInterface $getewaySettingInerface)
    {
        $this->getewaySettingInterface = $getewaySettingInerface;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->getewaySettingInterface->index();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GetewaySetting  $getewaySetting
     * @return \Illuminate\Http\Response
     */
    public function show(GetewaySetting $getewaySetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GetewaySetting  $getewaySetting
     * @return \Illuminate\Http\Response
     */
    public function edit(GetewaySetting $getewaySetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GetewaySetting  $getewaySetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GetewaySetting $getewaySetting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GetewaySetting  $getewaySetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(GetewaySetting $getewaySetting)
    {
        //
    }
}
