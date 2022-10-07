<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
 
          <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
         <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css?ver=2.9.0') }}">
         <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=2.9.0') }}">
         <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">

        <script src="{{ asset('assets/js/bundle.js?ver=2.9.0') }}"></script>
         <script src="{{ asset('assets/js/scripts.js?ver=2.9.0') }}"></script>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
      <script src="{{ asset('assets/js/libs/datatable-btns.js?ver=2.9.0') }}"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <div id="app">
            @include('layouts.sidebare')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            </div>
        </div>
    </body>
</html>
