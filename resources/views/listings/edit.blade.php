<x-layout>
  <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Edit Book LIst</h2>
      <p class="mb-4">Edit: {{$listing->title}}</p>
    </header>

    <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="mb-6">
        <label for="company" class="inline-block text-lg mb-2">Author</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"
          value="{{$listing->company}}" />

        @error('company')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="title" class="inline-block text-lg mb-2">Book Title</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"/>

        @error('title')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="location" class="inline-block text-lg mb-2">Price</label>
        <input type="number" id="0.01" class="border border-gray-200 rounded p-2 w-full" name="location"/>

        @error('location')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2">
          Contact Email
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{$listing->email}}" />

        @error('email')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="website" class="inline-block text-lg mb-2">
          Book URL
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website"
          value="{{$listing->website}}" />

        @error('website')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="tags" class="inline-block text-lg mb-2">
        Genre
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
          placeholder="Example: Laravel, Backend, Postgres, etc" value="{{$listing->tags}}" />

        @error('tags')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>5

      <div class="mb-6">
        <label for="logo" class="inline-block text-lg mb-2">
          Book Cover
        </label>
        <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />

        <img class="w-48 mr-6 mb-6"
          src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/book.jpg')}}" alt="" />

        @error('logo')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="description" class="inline-block text-lg mb-2">
          Book Description
        </label>
        <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
          placeholder="Include synopsis, characters, etc">{{$listing->description}}</textarea>

        @error('description')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-#987654">
          Update Book
        </button>

        <a href="/" class="text-#987654 ml-4"> Back </a>
      </div>
    </form>
  </x-card>
</x-layout>
