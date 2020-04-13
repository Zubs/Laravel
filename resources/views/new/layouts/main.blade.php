@include('new.layouts.header')
<main class="py-4">
    @include('layouts.messages')
    @yield('content')
</main>
@include('new.layouts.footer')