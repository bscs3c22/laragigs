<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    public function index(){
        return view('listings', [
            'listings' => Listing::all()
        ]);
    }

    public function show(Listing $listing){
        return view('l', [
            'listing' => $listing
        ]);
    }
}
