<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // Show all listings
    public function index() {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(4)
        ]);
    }

    //Show single listing
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    // Show Create Form
    public function create() {
        return view('listings.create');
    }

    // Store Listing Data
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'location' => 'required',
            'tags' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return redirect('/')->with('message', 'Created successfully!');
    }

    //cart
    public function cart(){
        //dd(request('tag'));
        return view('listings.cart', [
            'carts' => Cart::whereHas('listings')->paginate(5)
        ]);
    }

    public function add($listings){
        $inputs = [
            'user_id' => 1,
            'product_id' => $listing,

        ];

        Cart::create($inputs);
        return redirect('/')->with('message', 'Product added to cart successfully!');
    }
}
