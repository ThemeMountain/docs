---
extends: _layouts.default.master
name: Home
description: Listing of all ThemeMountain documentation sites
---

@section('meta')
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@thememountainco">
<meta name="twitter:title" content="{{ $page->title ? $page->title . ' - ' : '' }} {{ $page->name ?? '' }} | {{ $page->company }} Documentation">
<meta name="twitter:description" content="{{ $page->description ? $page->description : 'Documentation for '.$page->company.' products.' }}">
<meta property="twitter:image" content="{{ $page->baseUrl . '/img/twitter-card.png' }}" />
<meta name="twitter:creator" content="@thememountainco">
<meta property="og:url" content="{{ $page->baseUrl }}" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{ $page->title ? $page->title . ' - ' : '' }}{{ $page->name ?? '' }} | {{ $page->company }} Documentation" />
<meta property="og:description" content="{{ $page->description ? $page->description : 'Documentation for '.$page->company.' products.' }}" />
<meta property="og:image" content="{{ $page->baseUrl . '/img/twitter-card.png' }}" />
@endsection

@section('body')

<div class="bg-gradient-{{ $page->color }} h-screen">
    @include('_layouts.default.partials.headers.master', ['color' => $page->color])

    <div class="flex h-screen items-center">
        <div class="mx-auto text-center content">
            <h1 class="text-white text-3xl md:text-5xl font-sans font-light">{{ $page->company }} Docs</h1>
            <p class="w-2/3 mx-auto text-white text-md md:text-2xl font-normal font-hind-madurai mb-8">An overview of all ThemeMountain documentation sites.</p>
            <a href="#open-source" data-offset="0" class="scroll-to bg-transparent hover:shadow-lg hover:bg-white hover:text-blue text-white text-sm py-3 px-6 border border-white rounded">
                Get started &darr;
            </a>
        </div>
    </div>
</div>

<div id="open-source" class="pt-8 lg:py-16 bg-grey-lighter">
    <div class="container">
        <div class="flex flex-wrap items-center mb-8">
            <h2 class="w-full sm:w-2/5 text-3xl font-sans font-light leading-none text-grey-darkest pb-2 sm:p-0">Open Source</h2>
            <p class="w-full sm:w-3/5 font-hind-madurai text-grey-dark text-lg text-left sm:text-right mb-0">Our open source projects.</p>
        </div>

        <div class="flex flex-wrap -mx-3">
            <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0 opacity-25 pointer-events-none">
                <div class="flex flex-wrap content-between bg-white h-48 sm:h-64 p-6 rounded">
                    <h3 class="font-light">Timber</h3>
                    <p class="w-full text-grey-dark">Our HTML and CSS framework.</p>
                    <a href="" class="text-sm text-blue hover:underline">Timber documentation &rarr;</a>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0 opacity-25 pointer-events-none">
                <div class="flex flex-wrap content-between bg-white h-48 sm:h-64 p-6 rounded">
                    <h3 class="font-light">Pine</h3>
                    <p class="w-full text-grey-dark">12-column grid, responsive email framework.</p>
                    <a href="" class="text-sm text-blue hover:underline">Pine documentation &rarr;</a>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                <div class="flex flex-wrap content-between bg-white h-48 sm:h-64 p-6 rounded">
                    <h3 class="font-light">Acorn</h3>
                    <p class="w-full text-grey-dark">Golden typography grid email framework.</p>
                    <a href="/acorn" class="text-sm text-blue hover:underline">Acorn documentation &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="wordpress-themes" class="pt-8 lg:py-16 bg-grey-lighter">
    <div class="container">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full md:w-1/2 px-3 mb-8 md:mb-0">
                <h2 class="text-3xl font-sans font-light leading-none text-grey-darkest p-0 mb-2">WordPress Themes</h2>
                <p class="font-hind-madurai text-grey-dark text-lg">Our WordPress themes.</p>
                <div class="flex flex-wrap content-between bg-white h-48 sm:h-64 p-6 rounded opacity-25 pointer-events-none">
                    <h3 class="font-light">WordPress documentation</h3>
                    <p class="w-full text-grey-dark">Get started with our WordPress themes by reading this first.</p>
                    <a href="" class="text-sm text-blue hover:underline">Read the WordPress docs &rarr;</a>
                </div>
            </div>
            <div class="w-full md:w-1/2 px-3 mb-8 md:mb-0">
                <h2 class="text-3xl font-sans font-light leading-none text-grey-darkest p-0 mb-2">Site Templates</h2>
                <p class="font-hind-madurai text-grey-dark text-lg">Our HTML site templates.</p>
                <div class="flex flex-wrap content-between bg-white h-48 sm:h-64 p-6 rounded opacity-25 pointer-events-none">
                    <h3 class="font-light">HTML documentation</h3>
                    <p class="w-full text-grey-dark">The documentation for our HTML products.</p>
                    <a href="" class="text-sm text-blue hover:underline">Read the HTML docs &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="email-templates" class="pt-8 pb-8 lg:py-16 bg-grey-lighter">
    <div class="container">
        <div class="flex flex-wrap items-center mb-8">
            <h2 class="w-full lg:w-2/5 text-3xl font-sans font-light leading-none text-grey-darkest pb-4 lg:p-0">Email Templates</h2>
            <p class="w-full lg:w-3/5 font-hind-madurai text-grey-dark text-lg text-left lg:text-right mb-0">Detailed documentation for our email template products. Whether you're just starting out or are already familiar with HTML emails, this would be a good place to start.</p>
        </div>

        <div class="flex flex-wrap -mx-3">
            <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                <div class="flex flex-wrap content-between bg-white h-48 sm:h-64 p-6 rounded">
                    <h3 class="font-light">Sartre</h3>
                    <p class="w-full text-grey-dark">Documentation for our latest email template.</p>
                    <a href="/email/sartre/" class="text-sm text-blue hover:underline">Sartre documentation &rarr;</a>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0 opacity-25 pointer-events-none">
                <div class="flex flex-wrap content-between bg-white h-48 sm:h-64 p-6 rounded">
                    <h3 class="font-light">Marquez</h3>
                    <p class="w-full text-grey-dark">Marquez, the email for creative agencies.</p>
                    <a href="" class="text-sm text-blue hover:underline">Marquez documentation &rarr;</a>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0 opacity-25 pointer-events-none">
                <div class="flex flex-wrap content-between bg-white h-48 sm:h-64 p-6 rounded">
                    <h3 class="font-light">Kant</h3>
                    <p class="w-full text-grey-dark">Kant, the email toolkit for startups.</p>
                    <a href="" class="text-sm text-blue hover:underline">Kant documentation &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-grey-light py-8 lg:py-16">
    <div class="container">
        <div class="flex flex-wrap items-center">
            <div class="w-full sm:w-3/5 lg:w-4/5 mb-4 sm:mb-0">
                <p class="text-grey-dark text-center sm:text-left text-xl font-hind-madurai mb-0">Can't find the answer you're looking for? Get in touch and let us know.</p>
            </div>
            <div class="w-full sm:w-2/5 lg:w-1/5 text-center sm:text-right">
                <a href="{{ $page->support_url }}" class="bg-blue hover:bg-blue-dark text-white text-sm py-3 px-8 inline-block rounded" target="_blank">Open a Ticket</a>
            </div>
        </div>
    </div>
</div>

@include('_layouts.default.partials.footer')

@push('scripts')
    <script src="@mix('/js/app.js')"></script>
@endpush

@endsection
