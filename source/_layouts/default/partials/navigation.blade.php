<nav :aria-expanded="[showMobileMenu ? 'true' : 'false']" class="sidebar-navigation page-nav fixed md:relative h-full md:h-auto pin-r bg-white md:bg-transparent w-3/4 md:w-1/5 lg:w-2/5 pl-8 md:pl-0 pt-8 md:pt-0 md:mt-20 z-40 shadow-lg md:shadow-none transition-transform">
    <div class="fixed sticky md:top-20 pr-0 lg:pr-16 lg:min-w-64">
        <div class="overflow-y-auto wrapper scrolling-touch">
            <ul v-cloak class="pb-10 md:py-8 md:mt-6 list-reset">
            @foreach($page->getNavigation() as $category => $sections)
                @if($category == 'categories')
                    @foreach($sections as $heading => $items)
                    <li class="py-2">
                        <h5 class="toggle-trigger cursor-pointer text-black hover:text-{{ $page->color }} text-base md:text-sm font-normal mb-3 -mt-2 p-0">{{ $heading }}</h5>
                        <div class="toggle overflow-hidden" aria-expanded="{{ $page->hasChildrenActive($items) ? 'true' : 'false'}}">
                            <ul class="px-2 leading-loose text-grey-dark list-reset">
                                @foreach($items as $item)
                                    <li class="pb-1">
                                        <a href="{{ $item['path'] }}" class="text-base md:text-sm hover:text-{{ $page->color }} {{ $page->active($item) ? 'text-'.$page->color : '' }}">
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
                    <ul class="leading-loose text-grey-dark list-reset">
                    @foreach($sections as $item)
                        <li class="pb-1">
                            <a href="{{ $item['path'] }}" class="text-base md:text-sm hover:text-grey-darkest {{ $page->active($item['path']) ? 'text-'.$page->color : '' }}">
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
