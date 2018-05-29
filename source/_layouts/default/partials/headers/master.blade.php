<nav class="{{ isset($type) && $type == 'fixed' ? 'fixed' : 'absolute' }} w-full">
    <div class="container flex flex-col md:flex-row py-4">
        <div class="w-full md:w-1/4 text-center md:text-left">
            <a href="{{ $page->company_url }}">
                <img src="{{ $page->getAssetPath('/') }}/img/logo-light.png" alt="ThemeMountain" class="mb-4 md:mb-0 w-1/2">
            </a>
        </div>
        <div class="w-full md:w-3/4">
            <ul class="list-reset flex justify-center md:justify-end">
                <li class="mx-4 md:mx-6">
                <a href="{{ $page->support_url }}" class="font-bold text-sm text-{{ $color }}-lighter hover:text-{{ $color }}-lightest pb-4 inline-block" target="_blank" rel="noopener nofollow">Support</a>
                </li>
                <li class="dropdown mx-4 md:mx-6 relative">
                    <a href="{{ $page->social->envato }}" class="font-bold text-sm text-{{ $color }}-lighter hover:text-{{ $color }}-lightest pb-4 inline-block">Our Products</a>
                    <ul class="list-reset invisible opacity-0 transition-all absolute bg-white shadow-md rounded -ml-4 py-3 w-48">
                        <li>
                            <a href="https://themeforest.net/collections/5986290-our-html-templates?ref=thememountain" class="text-sm text-grey-dark hover:text-grey-darker transition-all block border-l-2 border-white hover:border-{{ $color }} px-4 py-2">Site Templates</a>
                        </li>
                        <li>
                            <a href="https://themeforest.net/collections/6812184-our-email-templates?ref=thememountain" class="text-sm text-grey-dark hover:text-grey-darker transition-all block border-l-2 border-white hover:border-{{ $color }} px-4 py-2">Email Templates</a>
                        </li>
                        <li>
                            <a href="https://themeforest.net/collections/5986291-our-wordpress-themes?ref=thememountain" class="text-sm text-grey-dark hover:text-grey-darker transition-all block border-l-2 border-white hover:border-{{ $color }} px-4 py-2">WordPress Themes</a>
                        </li>
                    </ul>
                </li>
                <li class="mx-4 md:mx-6">
                    <a href="{{ $page->social->github }}" class="font-bold text-sm text-{{ $color }}-lighter hover:text-{{ $color }}-lightest pb-4 inline-block">GitHub</a>
                </li>
                <li class="mx-4 md:mx-6">
                    <a href="{{ $page->social->twitter }}" class="font-bold text-sm text-{{ $color }}-lighter hover:text-{{ $color }}-lightest pb-4 inline-block">Twitter</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
