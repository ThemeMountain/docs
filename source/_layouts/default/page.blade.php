@extends('_layouts.default.master')
@section('body-classes', 'single')

@section('body')

    @include('_layouts.default.partials.headers.page')

    <div class="container flex flex-row">

        @include('_layouts.default.partials.navigation')

        <main class="content w-full pt-32">
            @yield('content')

            <div class="border-t border-grey-light py-6 mt-8 text-sm text-grey-dark">Optional footer, only if really really needed.</div>
        </main>

        <aside class="w-1/3 pt-12 toc">
            <div class="pl-16 sticky top-32">
                <div class="overflow-y-auto wrapper">
                    <table-of-contents></table-of-contents>
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
