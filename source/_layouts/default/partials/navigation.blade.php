<nav class="sidebar-navigation w-2/5 mt-20">
    <div class="sticky top-20 pr-16">
        <div class="overflow-y-auto wrapper">
            <ul class="py-8 mt-6 list-reset">
            @foreach($page->getNavigation() as $category => $sections)
                @if($category == 'categories')
                    @foreach($sections as $heading => $items)
                    <li class="py-2">
                        <h5 class="toggle-trigger cursor-pointer text-black hover:text-{{ $page->color }} text-sm font-normal mb-3 -mt-2 p-0">{{ $heading }}</h5>
                        <div class="toggle overflow-hidden transition-all" aria-expanded="{{ $page->hasChildrenActive($items) ? 'true' : 'false'}}">
                            <ul class="px-2 text-xs leading-loose text-grey-dark list-reset">
                                @foreach($items as $item)
                                    <li class="pb-1">
                                        <a href="{{ $item['path'] }}" class="hover:text-{{ $page->color }} {{ $page->active($item) ? 'text-'.$page->color : '' }}">
                                            {{ $item['title'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                    @endforeach
                @endif
                @if($category == 'uncategorized' && ! empty($sections))
                    <ul class="text-xs leading-loose text-grey-dark list-reset">
                    @foreach($sections as $item)
                        <li class="pb-1">
                            <a href="{{ $item['path'] }}" class="hover:text-grey-darkest {{ $page->active($item['path']) ? 'text-'.$page->color : '' }}">
                                {{ $item['title'] }}
                            </a>
                        </li>
                    @endforeach
                    </ul>
                @endif
            @endforeach
            </ul>
        </div>
    </div>
</nav>
