<x-layout>
  <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
  </a>
  <div class="mx-4">
    <x-card class="p-10">
      <div class="flex flex-col items-center justify-center text-center">
        <img class="w-48 mr-6 mb-6"
          src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt="" />

        <h3 class="text-2xl font-bold mb-2">
          {{$listing->title}}
        </h3>
        <div class="text-xl mb-4">
        <i class="fa-solid fa-peso-sign"></i>{{$listing->price}}</div>
        <x-listing-tags :tagsCsv="$listing->tags" />

        <div class="text-lg my-4">
          <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
        </div>
          <h3 class="text-x1 mb-4">Product Description</h3>
          <div class="text-lg space-y-6">
            {{$listing->description}}
          </div>
        <div class="mb-4">
          <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
            <i class="fas fa-cart-arrow-down"></i> Add to Cart</button>
        </div>
      </div>
    </x-card>
  </div>
</x-layout>