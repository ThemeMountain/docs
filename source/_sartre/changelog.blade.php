---
extends: _layouts.default.master
title: Changelog
description: Changelog for the Sartre Email Template
tags: changelog, releases, versions
search: false
page_order: 2000
---

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

@php
$pageCollection = $page->collections[$page->getCollection()];
$changelog = collect($pageCollection->changelog);
$changelog = $changelog->reverse();
@endphp

@section('body')

    @include('_layouts.default.partials.headers.page', ['classes' => 'pr-0'])

    <div class="mt-16 md:mt-20 py-8 md:py-24 bg-gradient-purple transition-transform" :class="{'mobile-menu-opened': showMobileMenu}">
        <div class="container text-white text-center">
            <h1 class="text-white text-4xl pb-0">Changelog</h1>
            <p class="mb-0">Release history for {{ $page->name }}</p>
        </div>
    </div>

    <div class="container flex flex-row">

        <div class="fixed pin-l pin-t h-full w-full bg-white opacity-75 z-40" :class="{'hidden': !showMobileMenu}" @click="showMobileMenu = !showMobileMenu"></div>

        <div :class="{'fixed invisible': !showMobileMenu}">
            @include('_layouts.default.partials.navigation')
        </div>

        <main class="content pt-8 md:pr-8 text-grey-darker md:text-sm transition-transform w-full" :class="{'mobile-menu-opened': showMobileMenu}">
            <div class="changelog md:pl-16 -mt-8">
                @foreach($changelog as $key => $entry)
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-1/5 md:border-r md:text-right pt-8 pb-4 md:py-12 md:pr-12">
                            <h2 class="p-0">
                                v{{ $entry['version'] }}
                                <span class="dot hidden md:block absolute rounded-full bg-{{ $page->color }}"></span>
                            </h2>
                            <span class="text-grey-dark text-xs">{{ date('F j, Y', $entry['date']) }}</span>
                        </div>
                        <div class="md:w-4/5 pb-4 md:pt-12 md:pb-8 md:pl-8 lg:pl-12 w-full {{ $loop->last ? '' : 'border-b mb-4 md:mb-0' }}">
                            <div class="pl-0 md:pl-2">{!! $entry['content'] !!}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>

        <aside class="hidden md:block w-1/5 sidebar-navigation">
            <div class="pl-8 sticky top-20">
                <div class="overflow-y-auto wrapper py-12">
                    <table-of-contents title="Releases"></table-of-contents>
                </div>
            </div>
        </aside>

    </div>

@endsection

@push('scripts')
    <script src="@mix('/js/app.js')"></script>
    @include('_layouts.default.partials.search.algolia', ['page' => $pageCollection])
@endpush
