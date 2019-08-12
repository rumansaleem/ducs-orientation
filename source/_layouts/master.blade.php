<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            DUCS Orientation 2019
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <style>
        </style>
    </head>
    <body class="font-sans min-h-screen bg-gray-900 text-white leading-tight">
        <div id="app">
            <header class="sticky top-0 z-50 bg-gray-800 shadow-lg py-2 border-b-2 border-blue-400">
                <div class="container flex flex-col justify-center md:flex-row md:justify-between items-center">
                    <a class="block text-center md:text-left hover:shadow-outline p-1" href="{{ $page->baseUrl }}/">
                        <h1 class="text-lg font-semibold text-blue-300 leading-normal">Department of Computer Science</h1>
                        <h3 class="text-sm uppercase tracking-wide font-semibold">Delhi University</h3>
                    </a>
                    <nav class="mt-2 md:mt-0">
                        @include('_partials.navigation')
                    </nav>
                </div>
            </header>
            <main class="min-h-screen">
                @yield('body')
            </main>
            <footer class="bg-gray-800 py-2 border-t-2 border-blue-400">
                <p class="text-center">DUCS Orientation &copy; 2019</p>
            </footer>
        </div>
        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </body>
</html>
