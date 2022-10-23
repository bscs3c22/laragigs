@foreach($carts as $listing)
    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="{{$listings->listing->first()->logo ? asset('storage/' . $listings->listing->first()->logo)
                            : asset('/images/no-image.png')}}"
                            alt=""
                        />
                        <div>
                            <h3 class="text-2xl">
                                <a href="/carts/{{$listings->listing->first()->id}}">{{$listings->listing->first()->title}}</a>
                            </h3>
                            <div class="text-xl font-bold mb-4">&#8369; {{number_format($listings->listing->first()->price,2)}}</div>
                            <x-listing-tags :tagsCsv="$listings->listing->first()->tags"/>
                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i> {{$listings->listing->first()->description}}
                            </div>
                        </div>
                    </div>
    @endforeach
@endif
</div>
<div class="mt-6 p-4">
    {{$carts->links()}}
</div>
<!--
@foreach($carts as $listings)
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
      </div>
    </x-card>
  </div>
</x-layout>
@endforeach-->