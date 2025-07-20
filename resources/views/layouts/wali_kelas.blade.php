<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/argon-dashboard-tailwind.css') }}" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    {{--
    <link href="{{ asset('assets/css/argon-dashboard-tailwind.css?v=1.0.1') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/argon-dashboard-tailwind.css') }}?v=1.0.1" rel="stylesheet" /> --}}

</head>

<body
    class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
    <div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>
    <!-- sidenav  -->

    @include('components.walikelas_sidebar')

    <!-- end sidenav -->

    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
        <!-- Navbar -->

        @include('components.navbar')

        <!-- end Navbar -->

        <!-- cards -->
        <div class="w-full px-6 pb-32 mx-auto">

            @yield('content')

            {{-- @include('components.footer') --}}
        </div>
        <!-- end cards -->
    </main>


</body>
<!-- plugin for charts  -->
<script src="{{ asset('assets/js/plugins/chartjs.min.js') }}" async></script>
<!-- plugin for scrollbar  -->
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}" async></script>
<!-- main script file  -->
<script src="{{ asset('assets/js/argon-dashboard-tailwind.js?v=1.0.1') }}" async></script>
@stack('scripts')

</html>