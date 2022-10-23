<section class="relative h-72 bg-sampleone flex flex-col justify-center align-center text-center space-y-4 mb-4">
  <div class="absolute top-0 left-0 w-full h-full opacity-100 bg-no-repeat bg-center"
    style="background-image: url('images/sampleone.webp')"></div>

  <div class="z-10">
    <h1 class="text-6xl font-bold uppercase text-black">
      UKAY<span class="text-black lowercase" >arn</span>
    </h1>
    <p class="text-2xl text-black-200 font-bold my-4">
      Find or post pre-loved stuff!!
    </p>
    <div>
      @auth
      @else
      <a href="/register"
        class="inline-block border-2 border-black text-black py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black">Sign
        Up to shop or post UKAY</a>
      @endauth
    </div>
  </div>
</section>
