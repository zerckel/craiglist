<?php

use App\Http\Controllers\promptCityPage;
use App\Http\Controllers\showCities;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [showCities::class, 'promptCities'])->name('Homepage');
Route::get('/{cityName}', [promptCityPage::class, 'promptCityPage'])->name('City');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
