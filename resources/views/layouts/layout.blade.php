<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
</head>

<body>

    <div class="boxed_wrapper ltr">

        {{-- Preloader --}}
        @include('components.preloader')

        {{-- Page Direction --}}
        @include('components.pageDirection')

        {{-- Search Popup --}}
        @include('components.searchPopup')

        {{-- Main Header --}}
        @include('components.header')

        {{-- Mobile Menu --}}
        @include('components.mobileMenu')

        {{-- Page Title --}}
        @if (!isset($breadcrumb))
            @include('components.breadcrumb')
        @endif

        {{-- Page Content --}}
        @yield('content')

        {{-- Subscribe Style Two --}}
        @if (!isset($subscribeStyleTwo))
            @include('components.subscribeStyleTwo')
        @endif

        {{-- Footer --}}
        @if (!isset($footer))
            @include('components.footer')
        @endif

        {{-- Scroll to Top --}}
        @include('components.scroll')

    </div>

    {{-- Scripts --}}
    @include('components.script')

</body>
</html>
