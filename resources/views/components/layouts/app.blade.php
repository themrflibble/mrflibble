<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{--  //meta stuff from variables, or fallback --}}
  <meta property='og:url' content='{{ Request::fullUrl() }}'>

  <meta property='og:title' content='{{ $pagetitle }}'>

  <meta property='og:description' content='{{ $pageogdesc }}'>
  {{-- // 200 max, 2-4 sentences --}}

  <meta property='og:image' content='{{ $pageogimage }}'>
  {{-- //fb 1200x630 preferred up to 5MB. 1.91:1 to avoid cropping, but tw needs <=1MB --}}
  <meta name='twitter:card' content='summary_large_image'>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ $pagetitle }}</title>

  <!-- Scripts -->
{{--   <script src="{{ mix('/js/manifest.js') }}" defer></script>
  <script src="{{ mix('/js/vendor.js') }}" defer></script>
 --}}  <script src="{{ mix('/js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
  @stack('fonts')

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  {{-- <link href="{{ mix('css/vue.css') }}" rel="stylesheet"> --}}
</head>
<body {{ $attributes->merge(['class' => 'h-100 ']) }}>
  <div id="app" class="h-100">
    <flash></flash>
    {{ $slot }}
  </div>

  @stack('scripts')
</body>
</html>
