<footer class="bg-white py-8 lg:py-16">
    <div class="container">
        <div class="flex flex-wrap justify-center text-center -mx-3">
            <div class="px-3">
                <a href="{{ $page->baseUrl }}">
                    <img src="/img/logo-dark.png" alt="{{ $page->company }} logo" width="150" class="mb-2">
                </a>
                <p class="text-sm text-grey mb-0">&copy; {{ date('Y') }} {{ $page->company }}. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
