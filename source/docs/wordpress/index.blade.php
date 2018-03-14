---
title: Sartre WordPress Theme
description: Documentation for the Sartre WordPress Theme
tags: main, home, index
---

@extends('_layouts.master')

@section('body')

<body class="bg-gradient-{{ $page->docs->email->sartre->theme ? $page->docs->email->sartre->theme : $page->theme }} font-sans font-normal text-black leading-normal">

    <div class="h-screen">
        @include('_partials.sections.navigation', ['theme' => $page->docs->email->sartre->theme ? $page->docs->email->sartre->theme : $page->theme])

        <div class="flex h-screen items-center">
            <div class="mx-auto text-center content">
                <a href="changelog" class="bg-transparent hover:bg-white text-sm text-white font-semibold hover:text-purple py-1 px-2 border border-white rounded no-underline">
                  v{{ $page->docs->email->sartre->version }}
                </a>
                <h1 class="text-white text-3xl md:text-5xl font-sans font-light leading-tight py-4">Sartre WordPress <br class="hidden sm:block">Theme Documentation</h1>
                <p class="w-2/3 mx-auto text-white text-md md:text-2xl font-hind-madurai mb-8">Learn how to use Sartre and build a unique email that looks good on both desktop and mobile.</p>
                <a href="#intro" class="text-white hover:text-purple bg-transparent hover:bg-white hover:shadow-lg text-xs py-3 px-6 border border-white rounded inline-flex items-center">Get Started &rarr;</a>
            </div>
        </div>
    </div>

@endsection
