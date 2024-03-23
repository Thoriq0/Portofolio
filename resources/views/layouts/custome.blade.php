<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--! Tailwind --}}
    <link rel="stylesheet" href="/css/app.css">
    {{-- @vite('/resources/css/app.css') --}}

    {{--! JQuery --}}
    <script src="/js/jquery-371.min.js"></script>

    {{--! Bootstrap Icon --}}
    <link rel="stylesheet" href="/assets/icon/bootstrap-icon/bootstrap-icons.min.css">

    {{--! Own Style --}}
    @yield('customeStyling')

    {{--! Own Script --}}
    @yield('customeScript')

    {{-- FlowBite --}}
    <link rel="stylesheet" href="/flowbite/flowbite.min.css">
    <script src="/flowbite/flowbite.min.js"></script>

</head>
<body class="dark">

    @yield('myown')

</body>
</html>