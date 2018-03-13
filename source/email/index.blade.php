---
title: Email Templates
description: Documentation listing for all ThemeMountain email templates
tags: email, templates, listing
---

@extends('_layouts.master')

@section('body')

<body class="bg-grey-lighter font-sans font-normal text-black leading-normal">

    <div class="bg-gradient-green h-screen">
       @include('_partials.sections.navigation', ['theme' => 'green'])

        <div class="flex h-screen items-center">
            <div class="mx-auto text-center search-content">
                <h1 class="text-white text-3xl md:text-5xl font-sans font-light">ThemeMountain Email Docs</h1>
                <p class="w-2/3 mx-auto text-white text-md md:text-2xl font-normal font-hind-madurai mb-8">Create something beautiful for your users with Faulkner's APIs and web tools.</p>
                <a href="#intro" class="bg-transparent hover:shadow-lg hover:bg-white hover:text-green text-white text-xs py-3 px-6 border border-white rounded inline-flex items-center">
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
                    <h2 class="text-3xl font-sans font-light leading-none text-grey-darkest">Email Templates</h2>
                </div>
                <div class="w-full sm:w-3/5 px-3 mt-2 sm:mt-0">
                    <p class="font-hind-madurai text-grey-dark text-lg">Detailed documentation for our email template products. Whether you're just starting out or are already familiar with HTML emails, this would be a good place to start.</p>
                </div>
            </div>

            <div class="flex flex-wrap -mx-3">
                @foreach ($page->docs as $site => $option)
                <div class="w-full sm:w-1/3 mb-4 px-3">
                    <div class="p-6 bg-white h-48 sm:h-64 flex flex-wrap content-between rounded">
                        <header class="w-full">
                            <h3 class="font-light inline-block">
                                <a href="{{ $option->slug ?? '#' }}" class="text-black hover:text-grey-darkest">{{ $option->title }}</a>
                            </h3>
                            <a href="{{ $option->slug ? $option->slug . '/changelog' : '#' }}" class="text-xxs border p-1 rounded font-normal float-right block text-grey hover:text-grey-dark">v{{ $option->version }}</a>
                        </header>
                        <p class="w-full text-sm text-grey-dark">{{ $option->description }}</p>
                        <a href="{{ $option->slug ?? '#' }}" class="text-sm text-blue hover:underline">{{ $option->title }} documentation &rarr;</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

     @include('_partials.sections.footer')

@endsection
