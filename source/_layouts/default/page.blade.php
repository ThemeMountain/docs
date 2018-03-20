@extends('_layouts.default.master')
@section('body-classes', 'single')

@section('body')

    <div class="w-full fixed pin-t border-b border-grey-lighter bg-white z-40">
        <div class="container flex py-1 items-center">
            <div class="flex flex-1 items-center">
                <div class="w-2/5">
                    <a href="#">
                        <img src="/assets/img/logo-dark.png" alt="Logo" width="150">
                    </a>
                </div>
                <div class="w-full py-4">
                    <div class="relative">
                        <input type="search" placeholder="Search the documentation..." class="w-full h-10 pl-10 pr-2 bg-white text-xs text tracking-wide placeholder-grey-darkest rounded border outline-0 focus:border-grey focus:text-blue focus:border-blue transition-all">
                        <div class="absolute flex items-center pin-y pl-3 text-grey-dark pointer-events-none">
                            <svg class="fill-current text-grey-dark w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5   S103.4,424,217.5,424c49.7,0,95.2-17.5,130.8-46.7L466.1,495c8,8,20.9,8,28.9,0C503,487.1,503,474.1,495,466.2z M217.5,382.9   C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52C308.7,52,383,126.3,383,217.5S308.7,382.9,217.5,382.9z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="w-1/3">
                    <div class="pl-16 flex">
                        <a href="{{ $page->social->github }}" class="text-grey-dark hover:text-blue mr-3">
                            <svg class="w-6 h-6 fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                        </a>
                        <a href="{{ $page->social->github }}" class="text-grey-dark hover:text-blue mr-3">
                            <svg class="w-6 h-6 fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                        </a>
                        <a href="{{ $page->social->github }}" class="text-grey-dark hover:text-blue mr-3">
                            <svg class="w-6 h-6 fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                        </a>
                        <a href="{{ $page->social->github }}" class="text-grey-dark hover:text-blue mr-3">
                            <svg class="w-6 h-6 fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container flex flex-row">

        @include('_layouts.default.partials.navigation')

        <main class="content w-full pt-32">
            @yield('content')

            <div class="border-t border-grey-light py-6 mt-8 text-sm text-grey-dark">Optional footer, only if really really needed.</div>
        </main>

        <aside class="w-1/3 pt-12 toc">
            <div class="pl-16 sticky top-32">
                <div class="overflow-y-auto wrapper">
                    <h4 class="font-normal text-grey-darkest mb-4">Quickies</h4>
                    <ul class="list-reset text-xs text-grey-dark leading-loose">
                        <li class="pb-1"><a href="" class="hover:text-grey-darkest">Section title</a></li>
                        <li class="pb-1"><a href="" class="hover:text-grey-darkest">Section title</a></li>
                        <li class="pb-1"><a href="" class="hover:text-grey-darkest">Section title</a></li>
                        <li class="pb-1"><a href="" class="hover:text-grey-darkest">Section title</a></li>
                        <li class="pb-1"><a href="" class="hover:text-grey-darkest">Section title</a></li>
                        <li class="pb-1"><a href="" class="hover:text-grey-darkest">Section title</a></li>
                        <li class="pb-1"><a href="" class="hover:text-grey-darkest">Section title</a></li>
                        <li class="pb-1"><a href="" class="hover:text-grey-darkest">Section title</a></li>
                        <li class="pb-1"><a href="" class="hover:text-grey-darkest">Section title</a></li>
                        <li class="pb-1"><a href="" class="hover:text-grey-darkest">Section title</a></li>
                    </ul>
                    <footer class="border-t border-grey-lighter pt-4 mt-4">
                        <p>&copy; {{ date('Y') }} ThemeMountain.</p>
                    </footer>
                </div>
            </div>
        </aside>
    </div>

@push('scripts')
    <script src="@mix('/js/vendor.js')"></script>
    <script src="@mix('/js/app.js')"></script>
@endpush

@endsection
