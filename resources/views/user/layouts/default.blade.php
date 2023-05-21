<!DOCTYPE html>
<html lang="en">

@include('user.layouts.head')

<body>
    @include('user.layouts.header')
    <section class="content">
        @yield('content')
    </section>
    @include('user.layouts.footer')
    @include('user.layouts.script')
</body>

</html>
