<!DOCTYPE html>
<html lang="en" class="bg-white antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $page->title ? $page->title . ' - ThemeMountain Documentation' : 'ThemeMountain Documentation' }}</title>
    <meta name="description" content="{{ $page->description ? $page->description : '' }}">
    @yield('meta')

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Hind+Madurai:400,500&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="@mix('/css/main.css')">
</head>

<body class="font-sans font-normal text-black leading-normal @yield('body-classes')">

<div id="app">
    @yield('body')
</div>

@stack('scripts')

</body>
</html>
