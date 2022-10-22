@extends('layout')
@section('content')
@include('partials._search')
<a href="/" class="inline-block text-black ml-4 mb-4"
                ><i class="fa-solid fa-arrow-left"></i> Back
            </a>
            <form method="post" action="/product/{{$product->id}}">
                @csrf
            <div class="mx-4">
                <x-card class="p-10">
                    <div
                        class="flex flex-col items-center justify-center text-center"
                    >
                        <img
                            class="w-48 mr-6 mb-6"
                            src="{{$product->logo ? asset('storage/' . $product->logo)
                            : asset('/images/no-image.png')}}"
                            alt=""
                        />

                        <h3 class="text-2xl mb-2">{{$product->product_name}}</h3>
                        <div class="text-xl font-bold mb-4">&#8369; {{number_format($product->price, 2)}}</div>
                        <x-listing-tags :tagsCsv="$product->tags"/>
                        <div class="text-lg my-4">
                            <i class="fa-solid fa-calendar"></i> Posted on: {{$product->created_at}}
                        </div>
                        <div class="border border-gray-200 w-full mb-6"></div>
                        <div>
                            <h3 class="text-3xl font-bold mb-4">
                                Product Description
                            </h3>
                            <div class="text-lg space-y-6">
                            {{$product->description}}

                            <div class="mb-6">
                            <button
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                            >
                                Add to Cart
                            </button>
                            </div>
                        </div>
                    </div>
</x-card>
            </div>
                            </form>
@endsection