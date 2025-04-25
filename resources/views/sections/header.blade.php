<header class="w-full ">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 py-4 flex justify-between items-center">

    <!-- لوگو -->
    <div class="flex items-center space-x-2 rtl:space-x-reverse">
      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
        <path d="M0 4C0 1.79086 1.79086 0 4 0H28C30.2091 0 32 1.79086 32 4V8C32 21.2548 21.2548 32 8 32H4C1.79086 32 0 30.2091 0 28V4Z" fill="#F59E0B"/>
        <path d="M4 8C4 5.79086 5.79086 4 8 4H32C34.2091 4 36 5.79086 36 8V12C36 25.2548 25.2548 36 12 36H8C5.79086 36 4 34.2091 4 32V8Z" fill="#4BE4C9"/>
      </svg>
      <span class="text-xl font-bold text-heading">Hounter</span>
    </div>

    <!-- منو دسکتاپ -->
    <div class="hidden md:flex items-center space-x-4 rtl:space-x-reverse text-sm ">
      <a href="#" class="px-4 py-2 border rounded-full text-white  ">About Us</a>
      <a href="#" class="px-4 py-2 border rounded-full text-white  ">Article</a>
      <a href="#" class="px-4 py-2 border rounded-full text-white flex items-center ">
        Property
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M14.6236 7.12001C14.624 6.94625 14.5631 6.77784 14.4515 6.64404C14.3887 6.56874 14.3116 6.50649 14.2245 6.46086C14.1374 6.41523 14.0421 6.38712 13.9441 6.37814C13.8461 6.36916 13.7473 6.37948 13.6533 6.40852C13.5593 6.43756 13.472 6.48474 13.3964 6.54736L9.38526 9.87916L5.36668 6.66635C5.29013 6.60458 5.20205 6.55844 5.10751 6.53061C5.01296 6.50277 4.91381 6.49377 4.81576 6.50414C4.71771 6.51451 4.62268 6.54403 4.53614 6.59101C4.44961 6.638 4.37327 6.70151 4.31151 6.77791C4.24339 6.85486 4.192 6.94497 4.16058 7.04259C4.12916 7.14021 4.11838 7.24323 4.12892 7.34519C4.13946 7.44715 4.17109 7.54584 4.22183 7.63507C4.27257 7.7243 4.34132 7.80215 4.42377 7.86372L8.91381 11.4558C9.04771 11.5652 9.21567 11.625 9.38901 11.625C9.56234 11.625 9.7303 11.5652 9.8642 11.4558L14.3542 7.73729C14.4448 7.66268 14.5164 7.56791 14.5632 7.46066C14.61 7.35341 14.6307 7.23671 14.6236 7.12001Z" fill="white"/>
        </svg>
      </a>
      <div class="hidden md:block">
        <a href="#" class="px-6 py-2 border-2 border-black rounded-full text-[#047857] text-sm font-medium bg-secondary hover:bg-green-200 transition">
          Sign Up
        </a>
      </div>
    </div>



    <!-- آیکون منو موبایل -->
    <div class="md:hidden">
      <button class="open-modal" data-target="#modal-2">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
          <path d="M4 6h16M4 12h16M4 18h16" stroke="#1b1c57" stroke-width="2" stroke-linecap="round"/>
        </svg>
      </button>
    </div>
  </div>

  <!-- مدال منو موبایل -->
  <div id="modal-2" class="modal fixed inset-0 bg-black/50 z-50 hidden items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg w-11/12 max-w-md p-6 relative mx-auto">
      <button class="close-modal absolute top-3 right-4 text-gray-500 hover:text-red-500 text-2xl">&times;</button>
      <nav class="flex flex-col gap-4 mt-4 text-center text-sm text-gray-700">
        <a href="#" class="px-4 py-2 border rounded-full">About Us</a>
        <a href="#" class="px-4 py-2 border rounded-full">Article</a>
        <a href="#" class="px-4 py-2 border rounded-full flex justify-center items-center gap-1">
          Property
          <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
            <path d="M14.6236 7.12C14.624 6.94625..." fill="currentColor"/>
          </svg>
        </a>
        <a href="#" class="px-6 py-2 border-2 border-black rounded-full text-[#047857] font-medium bg-green-100 hover:bg-green-200 transition mt-4">
          Sign Up
        </a>
      </nav>
    </div>
  </div>
</header>





{{--  @if (has_nav_menu('primary_navigation'))--}}
{{--    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">--}}
{{--      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}--}}
{{--    </nav>--}}
{{--  @endif--}}
