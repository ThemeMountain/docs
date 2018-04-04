---
extends: _layouts.default.master
description: Documentation for the Sartre Email Template
tags: main, home, index
search: false
---

@section('body-classes', 'bg-gradient-' . $page->color)

@section('body')

    <div class="h-screen">
        @include('_layouts.default.partials.headers.master', ['color' => $page->color])

        <div class="container flex h-screen items-center">
            <div class="mx-auto text-center content">
                <a href="changelog" class="bg-transparent hover:bg-white text-sm text-white font-semibold hover:text-purple py-1 px-2 border border-white rounded no-underline">
                  v{{ $page->version }}
                </a>
                <h1 class="text-white text-3xl md:text-5xl font-sans font-light leading-tight py-4">Sartre Email <br class="hidden sm:block">Template Documentation</h1>
                <p class="w-2/3 mx-auto text-white text-base md:text-2xl font-hind-madurai mb-8">Learn how to use Sartre and build a unique email that looks good on both desktop and mobile.</p>
                <a href="{{ $page->getNext()->getUrl() }}" class="text-white hover:text-purple bg-transparent hover:bg-white hover:shadow-lg text-xs py-3 px-6 border border-white rounded inline-flex items-center">Get Started &rarr;</a>
            </div>
        </div>
    </div>

@endsection
