<section class="relative h-72 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4">
  <div class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
    style="background-image: url('images/')"></div>

  <div class="z-10">
    <h1 class="text-6xl font-bold uppercase text-#8B4513">
      book<span class="text-white"> store</span>
    </h1>
    <p class="text-2xl text-#8B4513-200 font-bold my-4">
      Find or post your Books
    </p>
    <div>
      @auth
      @else
      <a href="/register"
        class="inline-block border-2 border-blue-000 textwhite-000 py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black">Sign
        Up Upload Book</a>
      @endauth
    </div>
  </div>
</section>
