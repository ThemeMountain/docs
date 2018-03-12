---
title: Email Templates
description: Documentation listing for all ThemeMountain email templates
tags: email, templates, listing
---

@extends('_layouts.master')

@section('body')

<body class="bg-gradient-green font-sans-serif font-normal text-black leading-normal">

    <section class="h-screen">
       @include('_partials.sections.navigation.main', ['theme' => $page->sites->email->theme])

        <div class="flex h-screen items-center">
            <div class="mx-auto text-center search-content">
                <h1 class="text-white text-3xl md:text-5xl font-sans-serif font-light">ThemeMountain Email Docs</h1>
                <p class="w-2/3 mx-auto text-white text-md md:text-2xl font-normal font-hind-madurai mb-8">Create something beautiful for your users with Faulkner's APIs and web tools.</p>
                <a href="#intro" class="bg-transparent hover:shadow-lg hover:bg-white hover:text-green text-white text-xs py-3 px-6 border border-white rounded inline-flex items-center">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                    <span>See the Docs</span>
                </a>
            </div>
        </div>
    </section>

    <div class="bg-grey-lighter py-4 md:py-8 lg:py-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-end -mx-3 mb-8">
                <div class="w-full sm:w-1/2 px-3">
                    <h2 class="text-3xl font-sans-serif font-light leading-none text-grey-darkest">Open Source</h2>
                    <p class="font-hind-madurai text-grey-dark text-lg mt-6">Our open source projects.</p>
                </div>
                <div class="w-full sm:w-1/2 mt-4 px-3 text-left sm:text-right">
                    <a href="#" class="ml-auto bg-blue hover:bg-blue-dark py-2 px-3 text-white text-xs rounded">Follow us on GitHub &rarr;</a>
                </div>
            </div>

            <div class="flex flex-wrap -mx-3">
                <div class="w-full sm:w-1/3 mb-4 px-3">
                    <div class="p-6 bg-white h-48 sm:h-64 flex flex-wrap content-between rounded hover:shadow transition-all">
                        <h3 class="font-light">Timber</h3>
                        <p class="w-full text-sm text-grey-dark">Our HTML and CSS framework.</p>
                        <a href="" class="text-sm text-blue hover:underline">Timber documentation &rarr;</a>
                    </div>
                </div>
                <div class="w-full sm:w-1/3 mb-4 px-3">
                    <div class="p-6 bg-white h-48 sm:h-64 flex flex-wrap content-between rounded hover:shadow transition-all">
                        <h3 class="font-light">Timber</h3>
                        <p class="w-full text-sm text-grey-dark">Our HTML and CSS framework.</p>
                        <a href="" class="text-sm text-blue hover:underline">Timber documentation &rarr;</a>
                    </div>
                </div>
                <div class="w-full sm:w-1/3 mb-4 px-3">
                    <div class="p-6 bg-white h-48 sm:h-64 flex flex-wrap content-between rounded hover:shadow transition-all">
                        <h3 class="font-light">Timber</h3>
                        <p class="w-full text-sm text-grey-dark">Our HTML and CSS framework.</p>
                        <a href="" class="text-sm text-blue hover:underline">Timber documentation &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-grey-lighter py-4 md:py-8 lg:py-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-end -mx-3 mb-8">
                <div class="w-full sm:w-1/2 px-3">
                    <h2 class="text-3xl font-sans-serif font-light leading-none text-grey-darkest">WordPress Themes</h2>
                    <p class="font-hind-madurai text-grey-dark text-lg mt-6">Our WordPress themes.</p>
                </div>
                <div class="w-full sm:w-1/2 mt-4 px-3 text-left sm:text-right">
                    <a href="#" class="ml-auto bg-blue hover:bg-blue-dark py-2 px-3 text-white text-xs rounded">WordPress Portfolio &rarr;</a>
                </div>
            </div>

            <div class="flex flex-wrap -mx-3">
                <div class="w-full sm:w-1/2 mb-4 px-3">
                    <div class="p-6 bg-white h-48 sm:h-64 flex flex-wrap content-between rounded hover:shadow transition-all">
                        <h3 class="font-light">Timber</h3>
                        <p class="w-full text-sm text-grey-dark">Our HTML and CSS framework.</p>
                        <a href="" class="text-sm text-blue hover:underline">Timber documentation &rarr;</a>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 mb-4 px-3">
                    <div class="p-6 bg-white h-48 sm:h-64 flex flex-wrap content-between rounded hover:shadow transition-all">
                        <h3 class="font-light">Timber</h3>
                        <p class="w-full text-sm text-grey-dark">Our HTML and CSS framework.</p>
                        <a href="" class="text-sm text-blue hover:underline">Timber documentation &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-grey-lighter py-4 md:py-8 lg:py-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-end -mx-3 mb-8">
                <div class="w-full sm:w-1/2 px-3">
                    <h2 class="text-3xl font-sans-serif font-light leading-none text-grey-darkest">Site Templates</h2>
                    <p class="font-hind-madurai text-grey-dark text-lg mt-6">Our HTML site templates.</p>
                </div>
                <div class="w-full sm:w-1/2 mt-4 px-3 text-left sm:text-right">
                    <a href="#" class="ml-auto bg-blue hover:bg-blue-dark py-2 px-3 text-white text-xs rounded">HTML Portfolio &rarr;</a>
                </div>
            </div>

            <div class="flex flex-wrap -mx-3">
                <div class="w-full sm:w-1/4 mb-4 px-3">
                    <div class="p-6 bg-white h-48 sm:h-64 flex flex-wrap content-between rounded hover:shadow transition-all">
                        <h3 class="font-light">Timber</h3>
                        <p class="w-full text-sm text-grey-dark">Our HTML and CSS framework.</p>
                        <a href="" class="text-sm text-blue hover:underline">Timber documentation &rarr;</a>
                    </div>
                </div>
                <div class="w-full sm:w-1/4 mb-4 px-3">
                    <div class="p-6 bg-white h-48 sm:h-64 flex flex-wrap content-between rounded hover:shadow transition-all">
                        <h3 class="font-light">Timber</h3>
                        <p class="w-full text-sm text-grey-dark">Our HTML and CSS framework.</p>
                        <a href="" class="text-sm text-blue hover:underline">Timber documentation &rarr;</a>
                    </div>
                </div>
                <div class="w-full sm:w-1/4 mb-4 px-3">
                    <div class="p-6 bg-white h-48 sm:h-64 flex flex-wrap content-between rounded hover:shadow transition-all">
                        <h3 class="font-light">Timber</h3>
                        <p class="w-full text-sm text-grey-dark">Our HTML and CSS framework.</p>
                        <a href="" class="text-sm text-blue hover:underline">Timber documentation &rarr;</a>
                    </div>
                </div>
                <div class="w-full sm:w-1/4 mb-4 px-3">
                    <div class="p-6 bg-white h-48 sm:h-64 flex flex-wrap content-between rounded hover:shadow transition-all">
                        <h3 class="font-light">Timber</h3>
                        <p class="w-full text-sm text-grey-dark">Our HTML and CSS framework.</p>
                        <a href="" class="text-sm text-blue hover:underline">Timber documentation &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-grey-lighter py-4 md:py-8 lg:py-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-end -mx-3 mb-8">
                <div class="w-full sm:w-1/2 px-3">
                    <h2 class="text-3xl font-sans-serif font-light leading-none text-grey-darkest">Email Templates</h2>
                    <p class="font-hind-madurai text-grey-dark text-lg mt-6">Detailed documentation for our email template products. Whether you're just starting out or are already familiar with HTML emails, this would be a good place to start.</p>
                </div>
                <div class="w-full sm:w-1/2 mt-4 px-3 text-left sm:text-right">
                    <a href="#" class="ml-auto bg-blue hover:bg-blue-dark py-2 px-3 text-white text-xs rounded">Email Portfolio &rarr;</a>
                </div>
            </div>

            <div class="flex flex-wrap -mx-3">
                <div class="w-full sm:w-1/3 mb-4 px-3">
                    <div class="p-6 bg-white h-48 sm:h-64 flex flex-wrap content-between rounded hover:shadow transition-all">
                        <h3 class="font-light">Timber</h3>
                        <p class="w-full text-sm text-grey-dark">Our HTML and CSS framework.</p>
                        <a href="" class="text-sm text-blue hover:underline">Timber documentation &rarr;</a>
                    </div>
                </div>
                <div class="w-full sm:w-1/3 mb-4 px-3">
                    <div class="p-6 bg-white h-48 sm:h-64 flex flex-wrap content-between rounded hover:shadow transition-all">
                        <h3 class="font-light">Timber</h3>
                        <p class="w-full text-sm text-grey-dark">Our HTML and CSS framework.</p>
                        <a href="" class="text-sm text-blue hover:underline">Timber documentation &rarr;</a>
                    </div>
                </div>
                <div class="w-full sm:w-1/3 mb-4 px-3">
                    <div class="p-6 bg-white h-48 sm:h-64 flex flex-wrap content-between rounded hover:shadow transition-all">
                        <h3 class="font-light">Timber</h3>
                        <p class="w-full text-sm text-grey-dark">Our HTML and CSS framework.</p>
                        <a href="" class="text-sm text-blue hover:underline">Timber documentation &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-grey-light py-4 md:py-8 lg:py-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center -mx-3">
                <div class="w-full sm:w-3/5 md:w-4/5 px-3 mb-4 sm:mb-0">
                    <p class="text-grey-dark text-center sm:text-left text-xl font-hind-madurai">Can't find the answer you're looking for? Get in touch and let us know.</p>
                </div>
                <div class="w-full sm:w-2/5 md:w-1/5 px-3 text-center sm:text-right">
                    <a href="#" class="bg-blue hover:bg-blue-dark text-white text-xs py-4 px-6 inline-block rounded">Open a Ticket</a>
                </div>
            </div>
        </div>
    </div>

     @include('_partials.sections.footer')

@endsection
