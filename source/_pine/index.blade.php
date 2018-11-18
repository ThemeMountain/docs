---
extends: _layouts.default.master
description: Pine Email Framework Documentation
tags: main, home, index
search: false
exclude_pagenav: true
---

@section('meta')
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@thememountainco">
<meta name="twitter:title" content="{{ $page->title ? $page->title . ' - ' : '' }} {{ $page->name ?? '' }} | {{ $page->company }} Documentation">
<meta name="twitter:description" content="{{ $page->description ? $page->description : 'Pine Email Framework Documentation.' }}">
<meta property="twitter:image" content="{{ $page->baseUrl . '/img/' . dirname($page->path) . '/twitter-card.png' }}" />
<meta name="twitter:creator" content="@thememountainco">
<meta property="og:url" content="{{ $page->baseUrl }}" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{ $page->title ? $page->title . ' - ' : '' }}{{ $page->name ?? '' }} | {{ $page->company }} Documentation" />
<meta property="og:description" content="{{ $page->description ? $page->description : 'Pine Email Framework Documentation.' }}" />
<meta property="og:image" content="{{ $page->baseUrl . '/img/' . dirname($page->path) . '/twitter-card.png' }}" />
@endsection

@section('body')

    <div class="bg-gradient-pine h-screen">
        @include('_layouts.default.partials.headers.master',
            [
                'text' => [
                    'default' => 'text-pine-teal-lightest',
                    'hover' => 'hover:text-pine-teal-lightest',
                ],
                'border' => [
                    'hover' => 'hover:border-teal',
                ],
            ]
        )

        <div class="container flex h-screen items-center">
            <div class="mx-auto text-center content">
                <a href="{{ $page->social->github }}/releases" target="_blank" rel="noopener" class="bg-transparent hover:bg-white text-sm text-white font-semibold hover:text-{{ $page->color }} py-1 px-2 border border-white rounded no-underline">
                  v{{ $page->version }}
                </a>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 476 476" class="block w-24 mx-auto mt-6"><path d="M227.658 406.937v62.721C227.658 475.37 238 476 238 476v-68.397c-3.505 0-6.952-.243-10.342-.666z" fill="#826e77"/><path d="M238 476s10.342-.63 10.342-6.342v-62.721c-3.391.423-6.837.667-10.342.667V476z" fill="#695a69"/><path d="M250.627 16.925c-.934-3.288-1.835-6.446-2.687-9.426-.087-.306-.186-.601-.294-.888.108.287.207.583.294.889.852 2.979 1.752 6.137 2.687 9.425zM247.639 6.591c-.997-2.636-2.831-4.482-5.001-5.536 2.169 1.054 4.004 2.9 5.001 5.536zM238 335.206V0c-4.255 0-8.509 2.5-9.939 7.499-21.984 76.851-72.8 260.628-72.8 317.365 0 42.19 31.586 76.98 72.397 82.073 3.391.423 6.837.667 10.342.667v-72.398z" fill="#7cdaaf"/><path d="M320.413 316.072c-4.196-62.297-47.75-221.618-69.786-299.147-.934-3.287-1.835-6.446-2.687-9.426-.087-.306-.186-.602-.294-.889-.002-.006-.004-.013-.007-.02-.997-2.636-2.832-4.482-5.001-5.536-.482-.234-.981-.43-1.491-.586s-1.031-.273-1.557-.352S238.532 0 238 0v407.603c3.505 0 6.952-.243 10.342-.667.753-.094 1.511-.173 2.258-.287 10.956-1.674 21.205-5.497 30.303-11.025 1.137-.691 2.257-1.409 3.357-2.152 9.904-6.691 18.281-15.47 24.501-25.705 2.073-3.412 3.906-6.985 5.476-10.698 1.047-2.475 1.976-5.011 2.782-7.602 2.417-7.772 3.72-16.036 3.72-24.604 0-2.659-.111-5.598-.326-8.791z" fill="#65b1a8"/></svg>
                <h1 class="text-white text-3xl md:text-5xl font-sans font-light leading-tight py-4">Pine Email Framework</h1>
                <p class="w-2/3 mx-auto text-white text-base md:text-2xl font-hind-madurai mb-8 leading-tight">A 12 column grid, responsive email framework.</p>
                <a href="{{ $page->getNext()->getUrl() }}/" class="text-white hover:text-{{ $page->color }} bg-transparent hover:bg-white hover:shadow-lg text-xs py-3 px-6 border border-white rounded inline-flex items-center">Get Started &rarr;</a>
            </div>
        </div>
    </div>

@endsection
