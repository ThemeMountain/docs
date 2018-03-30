---
extends: _layouts.default.master
title: Changelog
description: Changelog for the Sartre Email Template
tags: changelog, releases, versions
search: false
page_order: 2000
---

@php
$pageCollection = $page->collections[$page->getCollection()];
$changelog = collect($pageCollection->changelog);
$changelog = $changelog->reverse();
@endphp

@section('body')

    @include('_layouts.default.partials.headers.page')

    <div class="container flex flex-row">
        <main class="content w-full pt-32 pr-8">
            <div class="changelog pl-16 -mt-12">
                @foreach($changelog as $key => $entry)
                    <div class="flex">
                        <div class="w-1/5 border-r text-right py-12 pr-12">
                            <h2 class="p-0">
                                v{{ $entry['version'] }}
                                <span class="dot absolute rounded-full bg-{{ $page->color }}"></span>
                            </h2>
                            <span class="text-grey-dark text-xs">{{ date('F j, Y', $entry['date']) }}</span>
                        </div>
                        <div class="py-12 px-12 w-full  {{ $loop->last ? '' : 'border-b' }}">
                            <div class="">{!! $entry['content'] !!}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>

        <aside class="w-1/5 sidebar-navigation mt-20">
            <div class="pl-8 sticky top-20">
                <div class="overflow-y-auto wrapper py-12">
                    <table-of-contents title="Changelog"></table-of-contents>
                </div>
            </div>
        </aside>
    </div>

@endsection

@push('scripts')
    <script src="@mix('/js/app.js')"></script>
    @include('_layouts.default.partials.search.algolia', ['page' => $pageCollection])
@endpush
