<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ env('APP_NAME') }}</title>

        @stack('css_import')
    </head>
    <body>
        @include('layouts.header')

        <main>
            @if(session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @yield('content')
        </main>

        @yield('footer')

        <script src="{{ asset('js/app.js') }}"></script>
        @stack('page_js')
    </body>
</html>
