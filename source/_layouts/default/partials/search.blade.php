@if($page->has('search') && 'object' == gettype($page->search))

    @if($page->search->has('algolia'))
        {{-- Algolia Search --}}
        @include('_layouts.default.partials.search.algolia')
    @elseif($page->search->has('docsearch'))
        {{-- Algolia DocSearch --}}
        @include('_layouts.default.partials.search.docsearch')
    @endif

@endif

