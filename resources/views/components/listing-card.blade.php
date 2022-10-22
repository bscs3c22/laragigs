@props(['listing'])
<x-card>
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="{{$listing->logo ? asset('storage/' . $listing->logo)
                            : asset('/images/no-image.png')}}"
                            alt=""
                        />
                        <div>
                            <h3 class="text-2xl">
                                <a href="/product/{{$listing->id}}">{{$listing->product_name}}</a>
                            </h3>
                            <div class="text-xl font-bold mb-4">&#8369; {{number_format($listing->price,2)}}</div>
                            <x-listing-tags :tagsCsv="$listing->tags"/>
                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i> {{$listing->description}}
                            </div>
                        </div>
                    </div>
</x-card>