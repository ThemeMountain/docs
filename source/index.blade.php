---
description: Listing of all ThemeMountain documentation sites
tags: main, home, index
---

@extends('_themes.default.master')

@section('body')

<body class="bg-grey-lighter font-sans font-normal text-black leading-normal">

    <div class="bg-gradient-{{ $page->theme }} h-screen">
        @include('_themes.default._partials.sections.navigation', ['theme' => $page->theme])

        <div class="flex h-screen items-center">
            <div class="mx-auto text-center content">
                <h1 class="text-white text-3xl md:text-5xl font-sans font-light">ThemeMountain Docs</h1>
                <p class="w-2/3 mx-auto text-white text-md md:text-2xl font-normal font-hind-madurai mb-8">Create something beautiful for your users with Faulkner's APIs and web tools.</p>
                <a href="#intro" class="bg-transparent hover:shadow-lg hover:bg-white hover:text-blue text-white text-xs py-3 px-6 border border-white rounded inline-flex items-center">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                    <span>See the Docs</span>
                </a>
            </div>
        </div>
    </div>

    <div class="pt-8 lg:py-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap -mx-3 mb-8">
                <div class="w-full sm:w-2/5 px-3">
                    <h2 class="text-3xl font-sans font-light leading-none text-grey-darkest">Open Source</h2>
                </div>
                <div class="w-full sm:w-3/5 px-3 text-left sm:text-right mt-2 sm:mt-0">
                    <p class="font-hind-madurai text-grey-dark text-lg">Our open source projects.</p>
                </div>
            </div>

            <div class="flex flex-wrap -mx-3">
                <div class="w-full sm:w-1/3 mb-4 px-3">
                    <div class="p-6 bg-white h-48 sm:h-64 flex flex-wrap content-between rounded">
                        <h3 class="font-light">Timber</h3>
                        <p class="w-full text-sm text-grey-dark">Our HTML and CSS framework.</p>
                        <a href="" class="text-sm text-blue hover:underline">Timber documentation &rarr;</a>
                    </div>
                </div>
                <div class="w-full sm:w-1/3 mb-4 px-3">
                    <div class="p-6 bg-white h-48 sm:h-64 flex flex-wrap content-between rounded">
                        <h3 class="font-light">Pine</h3>
                        <p class="w-full text-sm text-grey-dark">12-column grid, responsive email framework.</p>
                        <a href="" class="text-sm text-blue hover:underline">Pine documentation &rarr;</a>
                    </div>
                </div>
                <div class="w-full sm:w-1/3 mb-4 px-3">
                    <div class="p-6 bg-white h-48 sm:h-64 flex flex-wrap content-between rounded">
                        <h3 class="font-light">Acorn</h3>
                        <p class="w-full text-sm text-grey-dark">Golden typography grid email framework.</p>
                        <a href="" class="text-sm text-blue hover:underline">Acorn documentation &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-8 lg:py-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-end -mx-3 mb-8">
                <div class="w-full sm:w-1/2 px-3">
                    <h2 class="text-3xl font-sans font-light leading-none text-grey-darkest">WordPress Themes</h2>
                    <p class="font-hind-madurai text-grey-dark text-lg mt-2 sm:mt-6">Our WordPress themes.</p>
                </div>
                <div class="w-full sm:w-1/2 mt-4 px-3">
                    <h2 class="text-3xl font-sans font-light leading-none text-grey-darkest">Site Templates</h2>
                    <p class="font-hind-madurai text-grey-dark text-lg mt-2 sm:mt-6">Our HTML site templates.</p>
                </div>
            </div>

            <div class="flex flex-wrap -mx-3">
                <div class="w-full sm:w-1/2 mb-4 px-3">
                    <div class="p-6 bg-white h-48 sm:h-64 flex flex-wrap content-between rounded">
                        <h3 class="font-light">WordPress documentation</h3>
                        <p class="w-full text-sm text-grey-dark">Get started with our WordPress themes by reading this first.</p>
                        <a href="" class="text-sm text-blue hover:underline">Read the WordPress Docs &rarr;</a>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 mb-4 px-3">
                    <div class="p-6 bg-white h-48 sm:h-64 flex flex-wrap content-between rounded">
                        <h3 class="font-light">HTML Documentation</h3>
                        <p class="w-full text-sm text-grey-dark">The documentation for our HTML products.</p>
                        <a href="" class="text-sm text-blue hover:underline">Read the HTML Docs &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-8 lg:py-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap -mx-3 mb-8">
                <div class="w-full sm:w-2/5 px-3">
                    <h2 class="text-3xl font-sans font-light leading-none text-grey-darkest">Email Templates</h2>
                </div>
                <div class="w-full sm:w-3/5 px-3 mt-2 sm:mt-0">
                    <p class="font-hind-madurai text-grey-dark text-lg">Detailed documentation for our email template products. Whether you're just starting out or are already familiar with HTML emails, this would be a good place to start.</p>
                </div>
            </div>

            <div class="flex flex-wrap -mx-3">
                <div class="w-full sm:w-1/3 mb-4 px-3">
                    <div class="p-6 bg-white h-48 sm:h-64 flex flex-wrap content-between rounded">
                        <h3 class="font-light">Sartre</h3>
                        <p class="w-full text-sm text-grey-dark">Documentation for our latest email template.</p>
                        <a href="" class="text-sm text-blue hover:underline">Sartre documentation &rarr;</a>
                    </div>
                </div>
                <div class="w-full sm:w-1/3 mb-4 px-3">
                    <div class="p-6 bg-white h-48 sm:h-64 flex flex-wrap content-between rounded">
                        <h3 class="font-light">Marquez</h3>
                        <p class="w-full text-sm text-grey-dark">Marquez, the email for creative agencies.</p>
                        <a href="" class="text-sm text-blue hover:underline">Marquez documentation &rarr;</a>
                    </div>
                </div>
                <div class="w-full sm:w-1/3 mb-4 px-3">
                    <div class="p-6 bg-white h-48 sm:h-64 flex flex-wrap content-between rounded">
                        <h3 class="font-light">Kant</h3>
                        <p class="w-full text-sm text-grey-dark">Kant, the email toolkit for startups.</p>
                        <a href="" class="text-sm text-blue hover:underline">Kant documentation &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-grey-light mt-8 py-8 lg:py-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center -mx-3">
                <div class="w-full sm:w-3/5 md:w-4/5 px-3 mb-4 sm:mb-0">
                    <p class="text-grey-dark text-center sm:text-left text-xl font-hind-madurai">Can't find the answer you're looking for? Get in touch and let us know.</p>
                </div>
                <div class="w-full sm:w-2/5 md:w-1/5 px-3 text-center sm:text-right">
                    <a href="{{ $page->support->app }}" class="bg-blue hover:bg-blue-dark text-white text-xs py-4 px-8 inline-block rounded">Open a Ticket</a>
                </div>
            </div>
        </div>
    </div>

     @include('_themes.default._partials.sections.footer')

@endsection
