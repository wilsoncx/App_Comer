<?php

namespace ComerNaRua\Http\Controllers;

use Illuminate\Http\Request;

use ComerNaRua\Http\Requests;
use Illuminate\Support\Facades\DB;


class LocationController extends Controller
{

    public function index()
    {
        return \ComerNaRua\Location::all();

    }


    /**
     *
     */
    public function show()
    {

        return $locations = DB::table('locations')
            ->select( DB::raw('id, ( 6371 * acos( cos( radians(-2.526383) ) * cos( radians( latitude ) ) * 
            cos( radians( longitude ) - radians(-44.247690) ) + sin( radians(-2.526383) ) * sin( radians( latitude    ) ) ) ) 
            as distancia, nome' ))
            ->havingRaw('distancia < 1')
            ->get();


    }


    public function store()
    {

    }

    public function delete()
    {

    }

    public function update()
    {

    }


    public function edit()
    {

    }

}
