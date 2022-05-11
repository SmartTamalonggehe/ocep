<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
        <div class="multinav">
            <div class="multinav-scroll" style="height: 100%;">
                <!-- sidebar menu-->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">Dashboard & Apps</li>
                    <li>
                        <a href="{{ route('admin') }}">
                            <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                    class="path2"></span></i>
                            <span>Dashboard</span>
                            <span class="pull-right-container">
                                {{-- <i class="fa fa-angle-right pull-right"></i> --}}
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('indonesia.index') }}">
                            <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                    class="path2"></span></i>
                            <span>Bahasa Indonesia</span>
                            <span class="pull-right-container">
                                {{-- <i class="fa fa-angle-right pull-right"></i> --}}
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('waropen.index') }}">
                            <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                    class="path2"></span></i>
                            <span>Bahasa Waropen</span>
                            <span class="pull-right-container">
                                {{-- <i class="fa fa-angle-right pull-right"></i> --}}
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('indo_warop.index') }}">
                            <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                    class="path2"></span></i>
                            <span>Indo Waropen</span>
                            <span class="pull-right-container">
                                {{-- <i class="fa fa-angle-right pull-right"></i> --}}
                            </span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </section>
</aside>
