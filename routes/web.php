<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Http\Controllers\ListingController;
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

Route::get('/sample', function () {
    return view('sample');
});

//show all listings
Route::get('/', [ListingController::class, 'index']);
//show one listing
Route::get('/listing/{listing}', [ListingController::class, 'show']);
//show create form
Route::get('/listings/create', [ListingController::class, 'create']);
//store new listing
Route::post('/listings', [ListingController::class, 'store']);
