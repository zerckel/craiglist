<?php

namespace App\Http\Controllers;

use App\Models\cities;
use Inertia\Inertia;

class showCities extends Controller
{

    public function promptCities(){

       return Inertia::render('Home', [
           'cities' => cities::all()->load('ads')
           ]);
    }
}
