<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public function index(){
        //dd(request('tag'));
        return view('listings.index', [
            'products' => Product::latest()->filter(request(['tag', 'search']))
            ->paginate(5)
        ]);
    }

    public function cart(){
        //dd(request('tag'));
        return view('listings.cart', [
            'carts' => Cart::whereHas('products')->paginate(5)
        ]);
    }

    public function show(Product $product){
        return view('listings.show', [
            'product' => $product
        ]);
    }

    public function add($product){
        $inputs = [
            'user_id' => 1,
            'product_id' => $product,

        ];

        Cart::create($inputs);
        return redirect('/')->with('message', 'Product added to cart successfully!');
    }

    public function create(){
        return view('listings.create');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'product_name' => ['required', Rule::unique('products', 'product_name')],
            'price' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos');
        }

        Product::create($formFields);
       // Session::flash('message', 'Listing created');
        return redirect('/')->with('message', 'New Product Item created successfully!');
    }
}
