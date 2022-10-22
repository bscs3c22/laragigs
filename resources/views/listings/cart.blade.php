@extends('layout')
@section('content')
@include('partials._hero')
<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
@if(count($carts) == 0)
    <h2>No cart items found</h2>
@else
   
    @foreach($carts as $product)
    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="{{$product->products->first()->logo ? asset('storage/' . $product->products->first()->logo)
                            : asset('/images/no-image.png')}}"
                            alt=""
                        />
                        <div>
                            <h3 class="text-2xl">
                                <a href="/product/{{$product->products->first()->id}}">{{$product->products->first()->product_name}}</a>
                            </h3>
                            <div class="text-xl font-bold mb-4">&#8369; {{number_format($product->products->first()->price,2)}}</div>
                            <x-listing-tags :tagsCsv="$product->products->first()->tags"/>
                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i> {{$product->products->first()->description}}
                            </div>
                        </div>
                    </div>
    @endforeach
@endif
</div>
<div class="mt-6 p-4">
    {{$carts->links()}}
</div>
@endsection

