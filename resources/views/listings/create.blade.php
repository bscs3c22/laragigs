<x-layout>
  <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Create a Product</h2>
      <p class="mb-4">Post a pre-loved stuff</p>
    </header>

    <form method="POST" action="/listings" enctype="multipart/form-data">
      @csrf

      <div class="mb-6">
        <label for="title" class="inline-block text-lg mb-2">Product Name</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" value="{{old('title')}}" />

        @error('title')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
      
      <div class="mb-6">
                            <label
                                for="price"
                                class="inline-block text-lg mb-2"
                            >
                                Price
                            </label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="price"
                                value="{{old('price')}}"
                            />
                            @error('price')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
      <div class="mb-6">
        <label for="location" class="inline-block text-lg mb-2">Seller Location</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location" value="{{old('location')}}" />

        @error('location')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="tags" class="inline-block text-lg mb-2">
          Tags (Comma Separated)
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
          placeholder="Example: tshirt, pants, for men/women, etc" value="{{old('tags')}}" />

        @error('tags')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="logo" class="inline-block text-lg mb-2">
          Product Image
        </label>
        <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />

        @error('logo')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="description" class="inline-block text-lg mb-2">
          Product Description
        </label>
        <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
          placeholder="size, for men/women, branded, etc">{{old('description')}}</textarea>

        @error('description')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
          Post my stuff
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
      </div>
    </form>
  </x-card>
</x-layout>
