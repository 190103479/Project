<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FORUM') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('js-script')
  

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
      @yield('css-script')

      <style>
body {background-color: #F5FFFA;}

</style>
</head>

<body>

    <div id="app">
        <section class="px-8 py-4 mb-6">
        <header class="container mx-auto">
        <div class="flex justify-between">
        <div>
        <a
            
            href="{{route('home')}}"
        ><img src="https://forum-api.interattiva.kz//%2Fstorage%2Fuploads%2F2019%2F11%2F24%2F5dda4727ebab6logo_noshadow-01.svg" alt="" class="mb-2 object-cover h-48 w-full"  style="height:100px; width: 60%; "></a>
        
        </div >

        <div>
      
       </div>
       </div>
        </header>
        </section>


        {{$slot}}
        
 
    </div>
</body>
</html>
