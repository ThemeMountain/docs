@extends('_layouts.default.master')
@section('body-classes', 'single')

@section('body')

    @include('_layouts.default.partials.headers.page')

    <div class="container flex flex-row">

        @include('_layouts.default.partials.navigation')

        <main class="content w-full pt-32">
            @yield('content')
            @include('_layouts.default.components.pagenav', ['page' => $page])
        </main>

        <aside class="w-1/3 sidebar-navigation mt-20">
            <div class="pl-16 sticky top-20">
                <div class="overflow-y-auto wrapper py-12">
                    <table-of-contents :theme="'{{ $page->theme }}'"></table-of-contents>
                    <footer>
                        <p>&copy; {{ date('Y') }} ThemeMountain.</p>
                    </footer>
                </div>
            </div>
        </aside>
    </div>

@push('scripts')

    <script src="@mix('/js/vendor.js')"></script>
    <script src="@mix('/js/app.js')"></script>
    @include('_layouts.default.partials.search', ['env' => getenv('NODE_ENV')])
@endpush

@endsection
