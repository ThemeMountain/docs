<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>{{ $page->title ? $page->title . ' - DocsFlow' : 'DocsFlow - A Jigsaw-powered Documentation Generator' }}</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge,chrome=1">
        <meta name="author" content="ThemeMountain">
        <meta name="description" content="{{ $page->description ?? '' }}">
        <meta name="keywords" content="{{ $page->keywords ?? '' }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body>
        <aside>Sidebar Nav</aside>

        <main class="main">
            @yield('content')
        </main>

        <footer class="footer">
            <p>Tha footer</p>
        </footer>
    </body>
</html>
