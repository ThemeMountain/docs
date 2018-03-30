---
extends: _layouts.default.master
title: Changelog
description: Changelog for the Sartre Email Template
tags: changelog, releases, versions
search: false
page_order: 2000
---

@section('body')

    @include('_layouts.default.partials.headers.page')

    <div class="container flex flex-row">
        <main class="content w-full pt-32">

            <h1 class="border-b mb-6">{{ $page->title }}</h1>

        @foreach($page->collections[$page->getCollection()]->changelog as $key => $entry)

            <h2 class="mb-0 pb-0">v{{ $entry['version'] }}</h2>
            <span class="text-grey-dark text-xs">Released {{ date('F j, Y', $entry['date']) }}</span>
            <div class="mt-6">{!! $entry['content'] !!}</div>

        @endforeach
        </main>

        <aside class="w-1/3 sidebar-navigation mt-20">
            <div class="pl-16 sticky top-20">
                <div class="overflow-y-auto wrapper py-12">
                    <table-of-contents title="Versions"></table-of-contents>
                </div>
            </div>
        </aside>
    </div>

@endsection

@push('scripts')
    <script src="@mix('/js/app.js')"></script>
    @include('_layouts.default.partials.search.algolia', ['page' => $page->collections[$page->getCollection()]])
@endpush
