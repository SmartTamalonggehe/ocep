@include('admin.layouts.head')


    <body class="hold-transition light-skin sidebar-mini theme-primary fixed">

        <div class="wrapper">
            <div id="loader"></div>

@include('admin.layouts.navbar')

@yield('main')

@include('admin.layouts.sidebar')
        </div>
@include('admin.layouts.footer')

@include('admin.layouts.script')


</body>
</html>
