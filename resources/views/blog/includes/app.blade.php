<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('blog.includes.statics.Header')
</head>
<body>
    <div id="app">
        {{-- TOP --}}
        @include('blog.includes.statics.Sidebar')
        {{-- END TOP --}}

        <main class="py-4">
            @yield('content')
        </main>

        <!-- Start Footer & Subscribe Section -->
        @include('blog.includes.statics.Footer-Section')
        <!-- End Footer & Subscribe Section -->

        <!-- Start Copy Right Section -->
        @include('blog.includes.statics.Copyright-Section')
        <!-- End Copy Right Section -->

        <!-- Start Go Top Section -->
        <div class="go-top active">
            <i class="fas fa-chevron-up"></i>
            <i class="fas fa-chevron-up"></i>
        </div>
        <!-- End Go Top Section -->

    </div>

    @include('blog.includes.statics.JS')

</body>
</html>
