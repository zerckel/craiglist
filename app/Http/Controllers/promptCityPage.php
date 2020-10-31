<?php

namespace App\Http\Controllers;

use App\Models\category;
use Inertia\Inertia;

class promptCityPage extends Controller
{
    public function promptCityPage($cityName)
    {
        empty($cityName) ? redirect('/') : false;


        return Inertia::render('Front/city', [
            'categories' => category::all()->load('ads', 'sub'),
            'city' => $cityName
        ]);
    }
}
