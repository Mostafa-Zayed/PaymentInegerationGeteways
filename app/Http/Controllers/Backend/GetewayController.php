<?php

namespace App\Http\Controllers\Backend;

use App\Models\Geteway;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\GetewayInterface;

class GetewayController extends Controller
{
    private $getewayInterface;

    public function __construct(GetewayInterface $getewayInterface)
    {
        $this->getewayInterface = $getewayInterface;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->getewayInterface->index();
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
     * @param  \App\Models\Geteway  $geteway
     * @return \Illuminate\Http\Response
     */
    public function show(Geteway $geteway)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Geteway  $geteway
     * @return \Illuminate\Http\Response
     */
    public function edit(Geteway $geteway)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Geteway  $geteway
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Geteway $geteway)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Geteway  $geteway
     * @return \Illuminate\Http\Response
     */
    public function destroy(Geteway $geteway)
    {
        //
    }
}
