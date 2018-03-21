<nav class="sidebar-navigation w-2/5">
    <div class="sticky top-20 pr-16">
        <div class="overflow-y-auto wrapper">
            <ul class="py-8 mt-6">
            @foreach($page->getNavigation() as $category => $sections)
                @if($category == 'categories')
                    @foreach($sections as $heading => $items)
                    <li class="py-2">
                        <h5 class="toggle-trigger cursor-pointer text-black hover:text-blue text-sm font-normal mb-3">{{ $heading }}</h5>
                        <div class="toggle overflow-hidden transition-all" aria-expanded="{{ $page->hasChildrenActive($items) ? 'true' : 'false'}}">
                            <ul class="px-2 text-xs leading-loose text-grey-dark">
                                @foreach($items as $item)
                                    <li class="pb-1">
                                        <a href="{{ $item['path'] }}" class="hover:text-grey-darkest {{ $page->active($item) ? 'text-grey-darkest' : '' }}">
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
                    <ul class="text-xs leading-loose text-grey-dark">
                    @foreach($sections as $item)
                        <li class="pb-1">
                            <a href="{{ $item['path'] }}" class="hover:text-grey-darkest {{ $page->active($item['path']) ? 'text-grey-darkest' : '' }}">
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
