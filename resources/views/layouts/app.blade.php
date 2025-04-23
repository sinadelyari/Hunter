<!doctype html>
<html dir="ltr" @php(language_attributes())>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php(do_action('get_header'))
    @php(wp_head())

    @vite(['resources/css/app.css'])
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />--}}
  </head>

  <body class="overflow-x-hidden" @php(body_class())>
    @php(wp_body_open())

    <div id="app">
      <a class="sr-only focus:not-sr-only" href="#main">
        {{ __('Skip to content', 'sage') }}
      </a>

      @include('sections.header')

      <main id="main" class="main">
        @yield('content')
      </main>

      <!-- @hasSection('sidebar')
        <aside class="sidebar">
          @yield('sidebar')
        </aside>
      @endif -->

      @include('sections.footer')
    </div>

    @php(do_action('get_footer'))
    @php(wp_footer())
{{--    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>--}}
    @vite('resources/js/app.js')


  </body>

</html>
