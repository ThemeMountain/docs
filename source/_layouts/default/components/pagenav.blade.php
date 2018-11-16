 {{-- <div class="flex justify-between border-t border-grey-lighter py-6 mt-8">
    <p>
        @if($page->getPrevious() && ! $page->getPrevious()->exclude_pagenav)
        <a href="{{ $page->getEnv() == 'offline' ? $page->getPrevious()->_meta->filename . '.html' : $page->getPrevious()->_meta->url }}">
            &larr; {{ $page->getPrevious()->navigation['title'] ?? $page->getPrevious()->title }}
        </a>
        @endif
    </p>
    <p>
        @if($page->getNext() && ! $page->getNext()->exclude_pagenav)
        <a href="{{ $page->getEnv() == 'offline' ? $page->getNext()->_meta->filename . '.html' : $page->getNext()->_meta->url }}">
            {{ $page->getNext()->navigation['title'] ?? $page->getNext()->title }} &rarr;
        </a>
        @endif
    </p>
</div> --}}
