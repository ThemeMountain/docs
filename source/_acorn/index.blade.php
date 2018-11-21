---
extends: _layouts.default.master
description: Acorn Email Framework Documentation
tags: main, home, index
search: false
exclude_pagenav: true
---

@section('meta')
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@thememountainco">
<meta name="twitter:title" content="{{ $page->title ? $page->title . ' - ' : '' }} {{ $page->name ?? '' }} | {{ $page->company }} Documentation">
<meta name="twitter:description" content="{{ $page->description ? $page->description : 'Acorn Email Framework Documentation.' }}">
<meta property="twitter:image" content="{{ $page->baseUrl . '/img/' . dirname($page->path) . '/twitter-card.png' }}" />
<meta name="twitter:creator" content="@thememountainco">
<meta property="og:url" content="{{ $page->baseUrl }}" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{ $page->title ? $page->title . ' - ' : '' }}{{ $page->name ?? '' }} | {{ $page->company }} Documentation" />
<meta property="og:description" content="{{ $page->description ? $page->description : 'Acorn Email Framework Documentation.' }}" />
<meta property="og:image" content="{{ $page->baseUrl . '/img/' . dirname($page->path) . '/twitter-card.png' }}" />
@endsection

@section('body')

    @include('_layouts.default.partials.headers.master',
        [
            'text' => [
                'default' => 'text-green-lighter',
                'hover' => 'hover:text-green-lightest',
            ],
            'border' => [
                'hover' => 'hover:border-green',
            ],
        ]
    )

    <div class="bg-gradient-green h-screen">
        <div class="container flex h-screen items-center">
            <div class="mx-auto text-center content">
                <a href="{{ $page->social->github }}/releases" target="_blank" rel="noopener" class="bg-transparent hover:bg-white text-sm text-white font-semibold hover:text-{{ $page->color }} py-1 px-2 border border-white rounded no-underline">
                  v{{ $page->version }}
                </a>
                <img src="{{ $page->thumbnail }}" alt="Logo" class="block w-16 mx-auto mt-6">
                <h1 class="text-white text-3xl md:text-5xl font-sans font-light leading-tight py-4">Acorn Email Framework</h1>
                <p class="w-2/3 mx-auto text-white text-base md:text-2xl font-hind-madurai mb-8 leading-tight">Golden ratio typography grid, responsive email framework.</p>
                <a href="{{ $page->getNext()->getUrl() }}/" class="text-white hover:text-{{ $page->color }} bg-transparent hover:bg-white hover:shadow-lg text-xs py-3 px-6 border border-white rounded inline-flex items-center">Get Started &rarr;</a>
            </div>
        </div>
    </div>

@endsection
