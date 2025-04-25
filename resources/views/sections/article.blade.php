<section class="bg-white py-20 text-[#1b1c57]">
  <div class="max-w-7xl mx-auto px-4">

    <!-- عنوان -->
    <div class="text-center md:mb-12">
      <p class="text-accent text-sm  inline-block">
        <span class="block border-t border-accent w-1/4 mx-auto mb-1"></span>
        See tips and trick from our partnership
      </p>
      <h2 class="text-xl md:text-4xl font-bold text-heading leading-relaxed">
        Find out more about <br /> selling and buying homes
      </h2>
      <button class=" bg-primary text-white my-4 px-6 py-2 mr-1 text-sm font-medium rounded-full">
        <span>More article</span>
      </button>
    </div>

    <!-- محتوای اصلی -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">

      <!-- لیست مقالات -->
      <div class="flex flex-col gap-6 order-2 md:order-1">
        <div class="flex flex-col md:flex-row  md:items-end gap-6">
          <img src="{{ Vite::asset('resources/images/Rectangle 22.png') }}" alt="Article thumbnail 1" class=" rounded-xl object-cover" />
          <div class="flex flex-col gap-2">
            <div class="flex items-center gap-4">
              <img src="{{ Vite::asset('resources/images/Ellipse 6 (25).png') }}" alt="Author 1" class=" " />
              <p class="text-sm text-gray-500">Dianne Russell</p>
            </div>
            <h3 class="font-semibold text-lg mb-2">The things we need to check when  <br /> we want to buy a house</h3>
            <div class="flex items-center gap-2 text-sm text-gray-500">
              @include('partials.icons.clock-icon')
              <span>4 min read | 25 Apr 2021</span>
            </div>
          </div>
        </div>
        <div class="flex flex-col md:flex-row  md:items-end gap-6">
          <img src="{{ Vite::asset('resources/images/Rectangle 22.png') }}" alt="Article thumbnail 1" class=" rounded-xl object-cover" />
          <div class="flex flex-col gap-2">
            <div class="flex items-center gap-4">
              <img src="{{ Vite::asset('resources/images/Ellipse 6 (25).png') }}" alt="Author 1" class=" " />
              <p class="text-sm text-gray-500">Dianne Russell</p>
            </div>
            <h3 class="font-semibold text-lg mb-2">The things we need to check when  <br /> we want to buy a house</h3>
            <div class="flex items-center gap-2 text-sm text-gray-500">
              @include('partials.icons.clock-icon')
              <span>4 min read | 25 Apr 2021</span>
            </div>
          </div>
        </div>
        <div class="flex flex-col md:flex-row  md:items-end gap-6">
          <img src="{{ Vite::asset('resources/images/Rectangle 22.png') }}" alt="Article thumbnail 1" class=" rounded-xl object-cover" />
          <div class="flex flex-col gap-2">
            <div class="flex items-center gap-4">
              <img src="{{ Vite::asset('resources/images/Ellipse 6 (25).png') }}" alt="Author 1" class=" " />
              <p class="text-sm text-gray-500">Dianne Russell</p>
            </div>
            <h3 class="font-semibold text-lg mb-2">The things we need to check when  <br /> we want to buy a house</h3>
            <div class="flex items-center gap-2 text-sm text-gray-500">
              @include('partials.icons.clock-icon')
              <span>4 min read | 25 Apr 2021</span>
            </div>
          </div>
        </div>

      </div>
      <!-- مقاله اصلی -->
      <div class="order-1 md:order-2">
        <img src="{{ Vite::asset('resources/images/Rectangle 23 (1).png') }}" alt="Main Article" class="w-full h-80 object-cover rounded-3xl mb-6" />
        <div class="flex items-center gap-4">
          <img src="{{ Vite::asset('resources/images/Ellipse 6 (25).png') }}" alt="Cameron Williamson" class="" />
          <span class="text-sm text-gray-500">Cameron Williamson</span>
        </div>

        <h3 class="font-bold text-xl my-3">12 Things to know before buying a house</h3>
        <p class="text-gray-700 text-sm mb-4">
          Want to buy a house but unsure what we should know, here I will try to explain what we should know and check when we want to buy a house.
        </p>
        <div class="flex items-center gap-2 text-sm text-gray-500">
          @include('partials.icons.clock-icon')
          <span>8 min read | 25 Apr 2021</span>
        </div>
      </div>

    </div>
  </div>
</section>
