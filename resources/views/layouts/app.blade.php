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

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <style>
            #container {
              width: 100%;
              height: 400px;
              background-color: #333;
              display: flex;
              align-items: center;
              justify-content: center;
              overflow: hidden;
              border-radius: 7px;
              touch-action: none;
            }

            #container2{
              display: flex;
              align-items: center;
              justify-content: center;
              overflow: hidden;
              border-radius: 7px;
              touch-action: none;
            }
            #item {
              width: 100px;
              height: 100px;
              background-color: rgb(245, 230, 99);
              border: 10px solid rgba(136, 136, 136, .5);
              border-radius: 50%;
              touch-action: none;
              user-select: none;
            }
            
            #item:active {
              background-color: rgba(168, 218, 220, 1.00);
            }
            #item:hover {
              cursor: pointer;
              border-width: 20px;
            }
          </style>
        @livewireStyles
    </head>
    <body class="font-sans antialiased ">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')
            @include('flash-message')
            <main>
                {{ $slot }}
            </main>
        </div>
        @livewireScripts
    </body>
</html>
