<!DOCTYPE html>
<html lang="en" class="bg-white antialiased">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>{{ $page->title ? $page->title . ' - ThemeMountain Documentation' : 'Home - ThemeMountain Documentation' }}</title>
  @yield('meta')
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
</head>
<body class="font-source-sans bg-pink-lightest font-normal text-black leading-normal">

@yield('body')

@stack('scripts')

</body>
</html>
