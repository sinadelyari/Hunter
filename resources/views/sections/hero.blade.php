<section class="bg-[#F0FAFD] text-[#1b1c57] font-sans w-full relative overflow-hidden">
  <div class="w-full pb-16 px-4 md:px-8 flex flex-col-reverse lg:flex-row gap-12 max-w-screen-7xl ml-auto">
    <!-- متن سمت چپ -->
    <div class="w-full flex flex-col justify-center ml-0 md:ml-12  lg:px-6">
      <div class="max-w-xl mx-auto lg:mx-0">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold leading-tight mb-6 text-center lg:text-left">
          Find The Place To <br />
          Live <span class="text-accent">Your Dreams</span> <br />
          Easily Here
        </h1>
        <p class="text-gray-500 text-sm mb-8 text-body leading-relaxed text-center lg:text-left">
          Everything you need about finding your place to live will be here,<br class="hidden md:block" />
          where it will be easier for you
        </p>

        <!-- فرم سرچ -->
        <form class="flex flex-row items-center bg-white rounded-full shadow-sm overflow-hidden max-w-md mx-auto lg:mx-0 w-full">
          <!-- آیکون -->
          <div class="flex items-center justify-center px-4">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M21.707 20.293l-5.388-5.388a7.5 7.5 0 10-1.414 1.414l5.388 5.388a1 1 0 001.414-1.414zM10.5 17a6.5 6.5 0 110-13 6.5 6.5 0 010 13z" fill="#F59E0B" />
            </svg>
          </div>

          <!-- اینپوت -->
          <input
            type="text"
            placeholder="Search for the location you want!"
            class="flex-1 px-4 py-3 text-sm outline-none"
          />

          <!-- دکمه -->
          <button class="bg-primary text-white px-6 py-3 text-sm font-medium rounded-full">
            Search
          </button>
        </form>

        <!-- لوگوها -->
        <div class="mt-12 text-center lg:text-left">
          <p class="text-gray-500 text-sm uppercase mb-4 tracking-wider">Our Partnership</p>
          <div class="flex flex-wrap items-center justify-center lg:justify-start gap-6">
            <img src="{{ Vite::asset('resources/images/traveloka_logo 2.png') }}" alt="Traveloka" class="h-12 w-12 md:h-24 md:w-24" />
            <img src="{{ Vite::asset('resources/images/traveloka_logo 5.png') }}" alt="Ticket" class="h-12 w-12 md:h-24 md:w-24" />
            <img src="{{ Vite::asset('resources/images/traveloka_logo 3.png') }}" alt="Airbnb" class="h-12 w-12 md:h-24 md:w-24" />
            <img src="{{ Vite::asset('resources/images/traveloka_logo 4.png') }}" alt="Tripadvisor" class="h-12 w-12 md:h-24 md:w-24" />
          </div>
        </div>
      </div>
    </div>

    <!-- تصویر سمت راست -->
    <div class="w-full relative">
      <img src="{{ Vite::asset('resources/images/Img (11).png') }}" alt="hero image" class="w-full h-auto md:rounded-bl-3xl object-cover" />
      <div class="absolute bottom-1/5 right-0 translate-y-1/2 w-full pl-4 sm:pl-8 z-10">
        <div class="swiper swiper-hero">
          <div class="swiper-wrapper">
            <!-- اسلاید -->
            <div class="swiper-slide">
              <div class="bg-white rounded-2xl shadow-lg flex items-center gap-2 p-4">
                <img src="{{ Vite::asset('resources/images/Group 7 (2).png') }}" alt="hero image" class=" md:rounded-bl-3xl" />
                <div class="flex flex-col gap-2 ">
                  <p class="font-bold">1K+ People</p>
                  <p>Successfully Getting Home</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="bg-white rounded-2xl shadow-lg flex items-center p-4 gap-2 ">
                <img src="{{ Vite::asset('resources/images/Rectangle 12 (1).png') }}" alt="hero image" class=" md:rounded-bl-3xl" />
                <div class="flex flex-col gap-2 ">
                  <p class="font-bold">1K+ People</p>
                  <p>Successfully Getting Home</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="bg-white rounded-2xl shadow-lg flex items-center p-4 gap-2 ">
                <img src="{{ Vite::asset('resources/images/Rectangle 12 (1).png') }}" alt="hero image" class=" md:rounded-bl-3xl" />
                <div class="flex flex-col gap-2 ">
                  <p class="font-bold">1K+ People</p>
                  <p>Successfully Getting Home</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




