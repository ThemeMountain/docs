 <div class="flex justify-between border-t border-grey-light py-6 mt-8">
    <p>
        @if($page->getPrevious() && $page->getFirst()->_meta->url !== $page->getPrevious()->_meta->url)
        <a href="{{ $page->getPrevious()->_meta->url }}">
            &larr; {{ $page->getPrevious()->title }}
        </a>
        @endif
    </p>
    <p>
        @if($page->getNext())
        <a href="{{ $page->getNext()->_meta->url }}">
            {{ $page->getNext()->title }} &rarr;
        </a>
        @endif
    </p>
</div>
