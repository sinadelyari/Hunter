<header class="w-full ">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 py-4 flex justify-between items-center">

    <!-- لوگو -->
    <div class="flex items-center space-x-2 rtl:space-x-reverse">
      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
        <path d="M0 4C0 1.79086 1.79086 0 4 0H28C30.2091 0 32 1.79086 32 4V8C32 21.2548 21.2548 32 8 32H4C1.79086 32 0 30.2091 0 28V4Z" fill="#F59E0B"/>
        <path d="M4 8C4 5.79086 5.79086 4 8 4H32C34.2091 4 36 5.79086 36 8V12C36 25.2548 25.2548 36 12 36H8C5.79086 36 4 34.2091 4 32V8Z" fill="#4BE4C9"/>
      </svg>
      <span class="text-xl font-bold text-[#1b1c57]">Hounter</span>
    </div>

    <!-- منو دسکتاپ -->
    <div class="hidden md:flex items-center space-x-4 rtl:space-x-reverse text-sm text-gray-600">
      <a href="#" class="px-4 py-2 border rounded-full text-[#1b1c57] hover:bg-gray-100 transition">About Us</a>
      <a href="#" class="px-4 py-2 border rounded-full text-[#1b1c57] hover:bg-gray-100 transition">Article</a>
      <a href="#" class="px-4 py-2 border rounded-full flex items-center text-[#1b1c57] hover:bg-gray-100 transition">
        Property
        <svg class="ml-2" width="18" height="18" viewBox="0 0 18 18" fill="none">
          <path d="M14.6236 7.12C14.624 6.94625..." fill="currentColor"/>
        </svg>
      </a>
      <div class="hidden md:block">
        <a href="#" class="px-6 py-2 border-2 border-black rounded-full text-[#047857] text-sm font-medium bg-green-100 hover:bg-green-200 transition">
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
