<div class="w-full fixed pin-t border-b border-grey-lighter bg-white z-50 transition-transform">
    <div class="container flex py-1">
        <div class="flex flex-grow items-center justify-between">
            <div class="w-auto xl:w-2/5">
                <a href="{{ $page->getFirst()->getUrl() }}" class="flex float-left items-center hover:text-{{ $page->color }}">
                    <img src="{{ $page->thumbnail }}" alt="{{ $page->name }}" class="w-8">
                    <h2 class="hidden md:block p-0 pl-3 text-base font-bold">
                            {{ $page->name }}
                            <span class="block text-xs uppercase leading-tight font-normal m-0">Documentation</span>
                    </h2>
                </a>
            </div>
            <div class="w-3/4 md:w-3/5 xl:w-full py-2 md:py-4 md:pl-6 xl:pl-0 xl:-mr-1">
                <div class="relative">
                    <input type="search" id="search" class="block w-full h-10 pl-10 pr-2 bg-white text-xs text tracking-wide placeholder-grey-darkest rounded appearance-none border outline-0 focus:border-{{ $page->color }} focus:text-{{ $page->color }} transition-all" placeholder="Search documentation..." name="search" autocomplete="off" />
                    <div class="absolute flex items-center pin-y pl-3 text-grey-dark">
                        <svg class="fill-current w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5   S103.4,424,217.5,424c49.7,0,95.2-17.5,130.8-46.7L466.1,495c8,8,20.9,8,28.9,0C503,487.1,503,474.1,495,466.2z M217.5,382.9   C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52C308.7,52,383,126.3,383,217.5S308.7,382.9,217.5,382.9z"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="md:w-32 xl:w-1/3 md:pl-2 xl:pl-16 xl:-mr-6">
                <div class="hidden md:flex md:w-full justify-between">
                    @foreach($page->social as $name => $url)
                        <a href="{{ $url }}" class="text-grey-dark hover:text-{{ $page->color }}" title="{{ title_case($name) }}" target="_blank" rel="noopener nofollow">
                            @fileContents('source/img/icons/'.$name.'.svg')
                        </a>
                    @endforeach
                </div>
                <div class="flex md:hidden text-grey-dark" @click="showMobileMenu = !showMobileMenu">
                    <div v-show="! showMobileMenu">
                        @fileContents('source/img/icons/menu.svg')
                    </div>
                    <div v-show="showMobileMenu" v-cloak>
                        @fileContents('source/img/icons/close.svg')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
