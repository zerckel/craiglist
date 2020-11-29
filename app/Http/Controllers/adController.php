<?php

namespace App\Http\Controllers;

use App\Models\ads;
use Inertia\Inertia;

class adController extends Controller
{
    public function renderAd($id)
    {
        empty($id) ? redirect('/') : false;

        $ad = ads::all()->where('id', '=', $id)->first();

        return Inertia::render('Front/adPage', [
            'ad' => $ad,
            'sub' => $ad->sub_category,
            'cat' => $ad->category
        ]);
    }
}
