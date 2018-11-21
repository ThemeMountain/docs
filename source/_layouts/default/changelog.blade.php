@extends('_layouts.default.master')

@section('meta')
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@thememountainco">
<meta name="twitter:title" content="{{ $page->title ? $page->title . ' - ' : '' }} {{ $page->name ?? '' }} | {{ $page->company }} Documentation">
<meta name="twitter:description" content="{{ $page->description ? $page->description : 'Documentation for '.$page->company.' products.' }}">
<meta property="twitter:image" content="{{ $page->baseUrl . '/img' . dirname($page->getPath()) . '/twitter-card.png' }}" />
<meta name="twitter:creator" content="@thememountainco">
<meta property="og:url" content="{{ $page->baseUrl }}" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{ $page->title ? $page->title . ' - ' : '' }}{{ $page->name ?? '' }} | {{ $page->company }} Documentation" />
<meta property="og:description" content="{{ $page->description ? $page->description : 'Documentation for '.$page->company.' products.' }}" />
<meta property="og:image" content="{{ $page->baseUrl . '/img' . dirname($page->getPath()) . '/twitter-card.png' }}" />
@endsection

@section('body')

    @include('_layouts.default.partials.headers.page', ['classes' => 'pr-0'])

    <div class="content mt-16 md:mt-20 py-8 md:py-24 bg-gradient-{{ $page->color ?? 'green' }} transition-transform">
        <div class="container text-white text-center">
            <h1 class="text-white text-4xl pb-0">Changelog</h1>
            <p class="mb-0">Release history for {{ $page->name }}</p>
        </div>
    </div>

    <div class="content-overlay hidden fixed pin-l pin-t h-full w-full bg-white opacity-75"></div>
    <div class="container flex flex-row">
        <div class="block sm:hidden">
            @include('_layouts.default.partials.navigation')
        </div>

        <main class="content pt-8 md:pr-8 text-grey-darker md:text-sm transition-transform w-full z-40">
            <div class="md:w-5/6 md:pl-16">
                @yield('content')
            </div>
        </main>

        <aside class="hidden md:block w-1/5 sidebar-navigation">
            <div class="pl-8 sticky top-20">
                <div class="overflow-y-auto wrapper py-12">
                    <h4 class="font-normal text-grey-darkest mb-4 mt-2 p-0">Releases</h4>
                    <ul class="quickies list-reset text-sm text-grey-dark"></ul>
                </div>
            </div>
        </aside>

    </div>
@endsection

@push('scripts')
    <script src="@mix('/js/app.js')"></script>
    @include('_layouts.default.partials.search')
@endpush
