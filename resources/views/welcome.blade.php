<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta name="description" content="Sales Tracker Admin">
        <meta name="author" content="Muhammad Fiqri Alfayed">

        <title>Dashboard | Sales Tracker Admin</title>

        {{-- Main Styles --}}
        <link rel="stylesheet" href="{{ asset('assets/styles/style.min.css') }}">

        {{-- mCustomScrollbar --}}
        <link rel="stylesheet" href="{{ asset('assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css') }}">

        {{-- Waves Effect --}}
        <link rel="stylesheet" href="{{ asset('assets/plugin/waves/waves.min.css') }}">

        {{-- Sweet Alert  --}}
        <link rel="stylesheet" href="{{ asset('assets/plugin/sweet-alert/sweetalert.css') }}">
        
        {{-- Percent Circle --}}
        <link rel="stylesheet" href="{{ asset('assets/plugin/percircle/css/percircle.css') }}">

        {{-- Chartist Chart  --}}
        <link rel="stylesheet" href="{{ asset('assets/plugin/chart/chartist/chartist.min.css') }}">

        {{-- FullCalendar  --}}
        <link rel="stylesheet" href="{{ asset('assets/plugin/fullcalendar/fullcalendar.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugin/fullcalendar/fullcalendar.print.css') }}" media='print'>

        {{-- Color Picker  --}}
        {{-- <link rel="stylesheet" href="{{ asset('assets/color-switcher/color-switcher.min.css') }}"> --}}

        {{-- Custom Theme Color --}}
        <link rel="stylesheet" href="{{ asset('/assets/styles/color/green.min.css') }}">
    </head>
    <body>
        <div class="main-menu">
            <header class="header">
                <a href="/" class="logo">Sales Tracker</a>
                <button type="button" class="button-close fa fa-times js__menu_close"></button>

                <div class="user">
                    <a href="#" class="avatar">
                        <img src="http://placehold.it/80x80" alt="Personal" />
                        <span class="status online"></span>
                    </a>
                    <h5 class="name">
                        <a href="{{ url('profile') }}">Fiqri</a>
                    </h5>
                    <h5 class="position">Administrator</h5>
                    {{-- /.name --}}

                    <div class="control-wrap js__drop_down">
                        <i class="fa fa-caret-down js__drop_down_button"></i>
                        <div class="control-list">
                            <div class="control-item"><a href="{{ url('profile') }}"><i class="fa fa-user"></i> Profil</a></div>
                            <div class="control-item"><a href="{{ url('setting') }}"><i class="fa fa-gear"></i> Pengaturan</a></div>
                            <div class="control-item"><a href="{{ url('logout') }}"><i class="fa fa-sign-out"></i> Keluar</a></div>
                        </div>
                        {{-- /.control-list --}}
                    </div>
                    {{-- /.control-wrap --}}
                </div>
                {{-- /.user --}}
            </header>

            <div class="content">
                <div class="navigation">
                    <h5 class="title">Navigasi</h5>
                    {{-- /.title --}}

                    <ul class="menu js__accordian">
                        <li class="current"><a href="/" class="waves-effect">
                            <i class="menu-icon fa fa-home"></i><span>Dashboard</span></a>
                        </li>
                        <li>
                            <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-flag"></i><span>Icons</span><span class="menu-arrow fa fa-angle-down"></span></a>
                            <ul class="sub-menu js__content">
                                <li><a href="icons-font-awesome-icons.html">Font Awesome</a></li>
                                <li><a href="icons-fontello.html">Fontello</a></li>
                                <li><a href="icons-material-icons.html">Material Design Icons</a></li>
                                <li><a href="icons-material-design-iconic.html">Material Design Iconic Font</a></li>
                                <li><a href="icons-themify-icons.html">Themify Icons</a></li>
                            </ul>
                            {{-- /.sub-menu js__content --}}
                        </li>
                    </ul>
                    {{-- /.menu js__accordian --}}
                </div>
                {{-- /.navigation --}}
            </div>
            {{-- /.content --}}
        </div>
        {{-- /.main-menu --}}

        <div class="fixed-navbar">
            <div class="pull-left">
                <button class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
                <h1 class="page-title">Dashboard</h1>
                {{-- /.page-title --}}
            </div>
            {{-- /.pull-left --}}
            <div class="pull-right">
                <div class="ico-item"><a href="#" class="ico-item fa fa-search js__toggle_open" data-target="#searchform-header"></a>
                    <form action="#" id="searchform-header" class="searchform js__toggle"><input type="search" class="input-search" placeholder="Cari..."><button class="fa fa-search button-search"></button></form>
                    {{-- /.searchform --}}
                </div>
                {{-- /.ico-item --}}
                <div class="ico-item fa fa-arrows-alt js__full_screen"></div>
                {{-- /.ico-item fa fa-arrows-alt --}}
                <div class="ico-item toggle-hover js__drop_down">
                    <span class="fa fa-th js__drop_down_button"></span>
                    <div class="toggle-content">
                        <ul>
                            <li><a href="#"><i class="fa fa-github"></i><span class="txt"> Github</span></a></li>
                            <li><a href="#"><i class="fa fa-bitbucket"></i><span class="txt"> Bitbucket</span></a></li>
                            <li><a href="#"><i class="fa fa-slack"></i><span class="txt"> Slack</span></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i><span class="txt"> Dribbble</span></a></li>
                            <li><a href="#"><i class="fa fa-amazon"></i><span class="txt"> Amazon</span></a></li>
                            <li><a href="#"><i class="fa fa-dropbox"></i><span class="txt"> Dropbox</span></a></li>
                        </ul>
                        <a href="#" class="read-more">Lebih banyak</a>
                    </div>
                    {{-- /.toggle-content --}}
                </div>
                {{-- /.ico-item --}}
                <a href="#" class="ico-item fa fa-envelope notice-alarm js__toggle_open" data-target="#message-popup"></a>
                <a href="#" class="ico-item pulse"><span class="ico-item fa fa-bell notice-alarm js__toggle_open" data-target="#notification-popup"></span></a>
                <a href="#" class="ico-item fa fa-power-off js__logout"></a>
            </div>
            {{-- /.pull-right --}}
        </div>
        {{-- /.fixed-navbar --}}

        <div id="notification-popup" class="notice-popup js__toggle" data_space="75">
            <h2 class="popup-title">Notifikasi Saya</h2>
            {{-- /.popup-title --}}
            <div class="content">
                <ul class="notice-list">
                    <li>
                        <a href="#">
                            <span class="avatar"><img src="http://placehold.it/80x80" alt="Profile"></span>
                            <span class="name">Muhammad Fiqri Alfayed</span>
                            <span class="desc">Menyukai postingan Anda: "Hello World"</span>
                            <span class="time">30 menit</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="avatar bg-violet"><i class="fa fa-flag"></i></span>
                            <span class="name">Kata sandi berhasil diganti</span>
                            <span class="desc">Lihat profile Anda untuk mengetahui perubahan tersebut.</span>
                            <span class="time">1 jam</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="avatar bg-warning"><i class="fa fa-warning"></i></span>
                            <span class="name">Peringatan</span>
                            <span class="desc">Gagal menampilkan data karena masalah tertentu. Hubungi kami untuk mendapat bantuan.</span>
                            <span class="time">1 jam</span>
                        </a>
                    </li>
                </ul>
                {{-- /.notice-list --}}
                <a href="#" class="notice-read-more">Lebih banyak <i class="fa fa-angle-down"></i></a>
            </div>
            {{-- /.content --}}
        </div>
        {{-- /.notification-popup --}}

        <div id="message-popup" class="notice-popup js__toggle" data-space="75">
            <h2 class="popup-title">Notifikasi Saya</h2>
            {{-- /.popup-title --}}
            <div class="content">
                <ul class="notice-list">
                    <li>
                        <a href="#">
                            <span class="avatar"><img src="http://placehold.it/80x80" alt="Profile"></span>
                            <span class="name">Muhammad Fiqri Alfayed</span>
                            <span class="desc">Menyukai postingan Anda: "Hello World"</span>
                            <span class="time">30 menit</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="avatar"><img src="http://placehold.it/80x80" alt="Profile"></span>
                            <span class="name">Siva Gunawan</span>
                            <span class="desc">Menyukai postingan Anda: "Hello Girl"</span>
                            <span class="time">45 menit</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="avatar"><img src="http://placehold.it/80x80" alt="Profile"></span>
                            <span class="name">Siti Fatimah</span>
                            <span class="desc">Menyukai postingan Anda: "Hello Boy"</span>
                            <span class="time">50 menit</span>
                        </a>
                    </li>
                </ul>
                {{-- /.notice-list --}}
                <a href="#" class="notice-read-more">Lebih banyak <i class="fa fa-angle-down"></i></a>
            </div>
            {{-- /.content --}}
        </div>
        {{-- /.message-popup --}}

        <div id="wrapper">
            <div class="main-content">
                <div class="row small-spacing">
                    <div class="col-xs-12">
                        <div class="box-content">
                            <h4 class="box-title">Aktivitas Sales</h4>
                            {{-- /.box-title --}}
                            <div class="dropdown js__drop_down">
                                <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Aksi</a></li>
                                    <li><a href="#">Aksi lain</a></li>
                                    <li><a href="#">Sesuatu yang lain</a></li>
                                    <li class="split"></li>
                                    <li><a href="#">Link terpisah</a></li>
                                </ul>
                                {{-- /.sub-menu --}}
                            </div>
                            {{-- /.dropdown js__drop_down --}}
                            <div id="smil-animation-index-chartist-chart" class="chartist-chart" style="height: 320px"></div>
                            {{-- /#smil-animation-index-chartist-chart --}}
                        </div>
                        {{-- /.box-content --}}
                    </div>
                    {{-- /.col-xs-12 --}}
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="box-content">
                            <h4 class="box-title">Proyek</h4>
                            {{-- /.box-title --}}
                            <div class="dropdown js__drop_down">
                                <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Aksi</a></li>
                                    <li><a href="#">Aksi lain</a></li>
                                    <li><a href="#">Sesuatu yang lain</a></li>
                                    <li class="split"></li>
                                    <li><a href="#">Link terpisah</a></li>
                                </ul>
                                {{-- /.sub-menu --}}
                            </div>
                            {{-- /.dropdown js__drop_down --}}
                            <div class="content widget-stat">
                                <div class="percent bg-warning"><i class="fa fa-line-chart"></i>53%</div>
                                {{-- /.percent --}}
                                <div class="right-content">
                                    <h2 class="counter">837</h2>
                                    {{-- /.counter --}}
                                    <p class="text">Proyek</p>
                                    {{-- /.text --}}
                                </div>
                                {{-- /.right-content --}}
                                <div class="clear"></div>
                                {{-- /.clear --}}
                                <div class="process-bar">
                                    <div class="bar-bg bg-warning"></div>
                                    <div class="bar js__width bg-warning" data-width="70%"></div>
                                    {{-- /.bar js__width bg-warning --}}
                                </div>
                                {{-- /.process-bar --}}
                            </div>
                            {{-- /.content widget-stat --}}
                        </div>
                        {{-- /.box-content --}}
                    </div>
                    {{-- /.col-lg-3 col-md-6 col-xs-12 --}}
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="box-content">
                            <h4 class="box-title">Penggunaan Memori</h4>
                            {{-- /.box-title --}}
                            <div class="dropdown js__drop_down">
                                <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Aksi</a></li>
                                    <li><a href="#">Aksi lain</a></li>
                                    <li><a href="#">Sesuatu yang lain</a></li>
                                    <li class="split"></li>
                                    <li><a href="#">Link terpisah</a></li>
                                </ul>
                                {{-- /.sub-menu --}}
                            </div>
                            {{-- /.dropdown js__drop_down --}}
                            <div class="content widget-stat">
                                <div class="c100 p76 small blue js__circle">
                                    <span>76%</span>
                                    <div class="slice">
                                        <div class="bar"></div>
                                        <div class="fill"></div>
                                    </div>
                                </div>
                                {{-- /.percent --}}
                                <div class="right-content">
                                    <h2 class="counter">804</h2>
                                    {{-- /.counter --}}
                                    <p class="text">Memori</p>
                                    {{-- /.text --}}
                                </div>
                                {{-- /.right-content --}}
                                <div class="clear"></div>
                                {{-- /.clear --}}
                            </div>
                            {{-- /.content widget-stat --}}
                        </div>
                        {{-- /.box-content --}}
                    </div>
                    {{-- /.col-lg-3 col-md-6 col-xs-12 --}}
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="box-content">
                            <h4 class="box-title">Analisis Pengunjung</h4>
                            {{-- /.box-title --}}
                            <div class="dropdown js__drop_down">
                                <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Aksi</a></li>
                                    <li><a href="#">Aksi lain</a></li>
                                    <li><a href="#">Sesuatu yang lain</a></li>
                                    <li class="split"></li>
                                    <li><a href="#">Link terpisah</a></li>
                                </ul>
                                {{-- /.sub-menu --}}
                            </div>
                            {{-- /.dropdown js__drop_down --}}
                            <div class="content widget-stat">
                                <div class="percent bg-danger"><i class="fa fa-line-chart"></i>40%</div>
                                {{-- /.percent --}}
                                <div class="right-content">
                                    <h2 class="counter">976</h2>
                                    {{-- /.counter --}}
                                    <p class="text">Pengunjung</p>
                                    {{-- /.text --}}
                                </div>
                                {{-- /.right-content --}}
                                <div class="clear"></div>
                                {{-- /.clear --}}
                                <div class="process-bar">
                                    <div class="bar-bg bg-danger"></div>
                                    <div class="bar js__width bg-danger" data-width="40%"></div>
                                    {{-- /.bar js__width bg-danger --}}
                                </div>
                                {{-- /.process-bar --}}
                            </div>
                            {{-- /.content widget-stat --}}
                        </div>
                        {{-- /.box-content --}}
                    </div>
                    {{-- /.col-lg-3 col-md-6 col-xs-12 --}}
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="box-content">
                            <h4 class="box-title">Jumlah Sales</h4>
                            {{-- /.box-title --}}
                            <div class="dropdown js__drop_down">
                                <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Aksi</a></li>
                                    <li><a href="#">Aksi lain</a></li>
                                    <li><a href="#">Sesuatu yang lain</a></li>
                                    <li class="split"></li>
                                    <li><a href="#">Link terpisah</a></li>
                                </ul>
                                {{-- /.sub-menu --}}
                            </div>
                            {{-- /.dropdown js__drop_down --}}
                            <div class="content widget-stat">
                                <div class="c100 p76 small green js__circle">
                                    <span>94%</span>
                                    <div class="slice">
                                        <div class="bar"></div>
                                        <div class="fill"></div>
                                    </div>
                                </div>
                                {{-- /.percent --}}
                                <div class="right-content">
                                    <h2 class="counter">3922</h2>
                                    {{-- /.counter --}}
                                    <p class="text">Sales</p>
                                    {{-- /.text --}}
                                </div>
                                {{-- /.right-content --}}
                                <div class="clear"></div>
                                {{-- /.clear --}}
                            </div>
                            {{-- /.content widget-stat --}}
                        </div>
                        {{-- /.box-content --}}
                    </div>
                    {{-- /.col-lg-3 col-md-6 col-xs-12 --}}
                </div>
                {{-- /.row --}}
            </div>
            {{-- /.main-content --}}
        </div>
        {{-- /.wrapper --}}

        {{-- JQuery --}}
        <script src="{{ asset('assets/scripts/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/scripts/modernizr.min.js') }}"></script>

        {{-- Bootstrap --}}
        <script src="{{ asset('assets/plugin/bootstrap/js/bootstrap.min.js') }}"></script>

        {{-- Custom Scrollbar --}}
        <script src="{{ asset('assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>

        {{-- Progress Bar --}}
        <script src="{{ asset('assets/plugin/nprogress/nprogress.js') }}"></script>

        {{-- Sweet Alert --}}
        <script src="{{ asset('assets/plugin/sweet-alert/sweetalert.min.js') }}"></script>

        {{-- Waves --}}
        <script src="{{ asset('assets/plugin/waves/waves.min.js') }}"></script>

        {{-- Full Screen --}}
        <script src="{{ asset('assets/plugin/fullscreen/jquery.fullscreen-min.js') }}"></script>

        {{-- Percent Circle --}}
        <script src="{{ asset('assets/plugin/percircle/js/percircle.js') }}"></script>

        {{-- Chartist Chart --}}
        <script src="{{ asset('assets/plugin/chart/chartist/chartist.min.js') }}"></script>
        <script src="{{ asset('assets/scripts/chart.chartist.init.min.js') }}"></script>

        {{-- Full Calendar --}}
        <script src="{{ asset('assets/plugin/moment/moment.js') }}"></script>
        <script src="{{ asset('assets/plugin/fullcalendar/fullcalendar.min.js') }}"></script>
        <script src="{{ asset('assets/scripts/fullcalendar.init.js') }}"></script>

        {{-- Color Switcher --}}
        <script src="{{ asset('assets/color-switcher/color-switcher.min.js') }}"></script>

        {{-- Main --}}
        <script src="{{ asset('assets/scripts/main.js') }}"></script>
    </body>
</html>
