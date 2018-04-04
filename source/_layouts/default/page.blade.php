@extends('_layouts.default.master')
@section('body-classes', 'single')

@section('body')

    @include('_layouts.default.partials.headers.page')

    <div class="container flex flex-row justify-between">

        @include('_layouts.default.partials.navigation')

        <main class="content min-w-0 md:w-4/5 lg:w-full md:pl-8 lg:pl-0 pt-24 md:pt-32 text-grey-darker transition-transform" :class="{'mobile-menu-opened': showMobileMenu}">
            <div class="fixed pin-r pin-t h-full w-full bg-white opacity-25" :class="{'hidden': !showMobileMenu}" @click="showMobileMenu = !showMobileMenu"></div>
            @yield('content')
            @include('_layouts.default.components.pagenav', ['page' => $page])
        </main>

        <aside class="hidden lg:block w-1/3 sidebar-navigation mt-20">
            <div class="pl-16 sticky top-20 w-full">
                <div class="overflow-y-auto wrapper py-12">
                    <table-of-contents title="Quickies"></table-of-contents>
                </div>
            </div>
        </aside>
    </div>

@push('scripts')
    <script src="@mix('/js/app.js')"></script>
    @include('_layouts.default.partials.search')
@endpush

@endsection
