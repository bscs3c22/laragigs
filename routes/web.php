<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Http\Controllers\ProductController;
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
//Route::get('/', [ListingController::class, 'index']);
//show one listing
//Route::get('/listing/{listing}', [ListingController::class, 'show']);
//show create form
//Route::get('/listings/create', [ListingController::class, 'create']);
//store new listing
//Route::post('/listings', [ListingController::class, 'store']);

//show all products
Route::get('/', [ProductController::class, 'index']);
//show one listing
Route::get('/product/{product}', [ProductController::class, 'show']);
//add to cart
Route::post('/product/{product}', [ProductController::class, 'add']);
//show create form
Route::get('/products/create', [ProductController::class, 'create']);
//store new product
Route::post('/products', [ProductController::class, 'store']);
//get cart
Route::get('/carts', [ProductController::class, 'cart']);