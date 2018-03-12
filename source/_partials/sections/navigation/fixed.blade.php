<nav class="fixed w-full">
    <div class="flex container mx-auto py-4">
        <div class="w-1/4">
            <h2 class="text-white text-sm tracking-wide">ThemeMountain</h2>
        </div>
        <div class="w-3/4">
            <ul class="list-reset flex justify-end">
              <li class="mx-6">
                <a href="{{ $page->support->app }}" class="font-bold text-sm pb-4 inline-block text-{{ $theme }}-lighter hover:text-{{ $theme }}-lightest" target="_blank" rel="noopener nofollow">Support</a>
              </li>
              <li class="dropdown mx-6 relative">
                <a href="{{ $page->social->envato }}" class="font-bold text-sm pb-4 inline-block text-{{ $theme }}-lighter hover:text-{{ $theme }}-lightest">Our Products</a>
                <ul class="list-reset invisible opacity-0 transition-all absolute bg-white shadow-md rounded -ml-4 py-3 w-48">
                  <li>
                    <a href="#" class="text-sm text-grey-dark hover:text-grey-darker transition-all block border-l-2 border-white hover:border-{{ $theme }} px-4 py-2">WordPress</a>
                  </li>
                  <li>
                    <a href="#" class="text-sm text-grey-dark hover:text-grey-darker transition-all block border-l-2 border-white hover:border-{{ $theme }} px-4 py-2">HTML</a>
                  </li>
                  <li>
                    <a href="#" class="text-sm text-grey-dark hover:text-grey-darker transition-all block border-l-2 border-white hover:border-{{ $theme }} px-4 py-2">Email</a>
                  </li>
                </ul>
              </li>
              <li class="mx-6">
                <a href="{{ $page->social->github }}" class="font-bold text-sm pb-4 inline-block text-{{ $theme }}-lighter hover:text-{{ $theme }}-lightest">GitHub</a>
              </li>
              <li class="mx-6">
                <a href="{{ $page->social->twitter }}" class="font-bold text-sm pb-4 inline-block text-{{ $theme }}-lighter hover:text-{{ $theme }}-lightest">Twitter</a>
              </li>
            </ul>
        </div>
    </div>
</nav>
