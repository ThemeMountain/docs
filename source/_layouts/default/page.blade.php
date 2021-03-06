@extends('_layouts.default.master')
@section('body-classes', 'single')

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

    @include('_layouts.default.partials.headers.page')

    <div class="container flex flex-row justify-between">

        @include('_layouts.default.partials.navigation')

        <main class="content min-w-0 md:w-4/5 lg:w-full md:pl-8 lg:pl-0 pt-24 md:pt-32 md:text-sm text-grey-darker transition-transform z-40">
            <div class="content-overlay hidden fixed pin-r pin-t h-full w-full bg-white opacity-25"></div>
            @yield('content')
            @include('_layouts.default.components.pagenav', ['page' => $page])
        </main>

        <aside class="hidden lg:block w-1/3 sidebar-navigation mt-20">
            <div class="pl-16 fixed sticky top-20 w-full">
                <div class="overflow-y-auto wrapper py-12">
                    <h4 class="font-normal text-grey-darkest mb-4 mt-2 p-0">Quickies</h4>
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
