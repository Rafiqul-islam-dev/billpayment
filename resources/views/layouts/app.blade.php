<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guyachitra Cable Network</title>
    {{--
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/icon.png"> --}}

    <!-- Common Plugins -->
    <link href="{{ asset('public/assets/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Vector Map Css-->
    <link href="{{ asset('public/assets/lib/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />

    <!-- Chart C3 -->
    <link href="{{ asset('public/assets/lib/chart-c3/c3.min.css') }}" rel="stylesheet">
    <link href="assets/lib/chartjs/chartjs-sass-default.css" rel="stylesheet">

    <!-- DataTables -->
    <link href="{{ asset('public/assets/lib/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/assets/lib/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('public/assets/lib/toast/jquery.toast.min.css') }}" rel="stylesheet">

    <!-- Custom Css-->
    <link href="{{ asset('public/assets/scss/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/scss/media.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ============================================================== -->
    <!-- 						Topbar Start 							-->
    <!-- ============================================================== -->

    @guest
    @else
    <div class="top-bar primary-top-bar">
        <div class="container-fluid">

            <div class="row">
                <div class="col">
                    <a class="admin-logo" href="index.html">
                        <h1>
                            <img alt="" src="{{ asset('public/assets/img/icon.png') }}" class="logo-icon margin-r-10">
                            <img alt="" src="{{ asset('public/assets/img/logo-dark.png') }}"
                                class="toggle-none hidden-xs">
                        </h1>
                    </a>
                    <div class="left-nav-toggle">
                        <a href="#" class="nav-collapse"><i class="fa fa-bars"></i></a>
                    </div>
                    <div class="left-nav-collapsed">
                        <a href="#" class="nav-collapsed"><i class="fa fa-bars"></i></a>
                    </div>
                    <div class="search-form hidden-xs">
                        <form>
                            <input class="form-control" placeholder="Search for..." type="text"> <button
                                class="btn-search" type="button"><i class="fa fa-search"></i></button>
                        </form>
                    </div>


                    <ul class="list-inline top-right-nav">

                        <li class="dropdown">
                            <a class="right-sidebar-toggle d-none-m" href="javascript:%20void(0);"><i
                                    class="fa fa-align-right"></i></a>
                        </li>
                        <li class="dropdown avtar-dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <img alt="" class="rounded-circle" src="assets/img/avtar-2.png" width="30">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu top-dropdown">
                                <li>
                                    <a class="dropdown-item" href="javascript:%20void(0);"><i class="icon-bell"></i>
                                        Activities</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:%20void(0);"><i class="icon-user"></i>
                                        Profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:%20void(0);"><i class="icon-settings"></i>
                                        Settings</a>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                                 document.getElementById('logout-form').submit();">
                                        <i class="icon-logout"></i>{{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!--                        Topbar End                              -->
    <!-- ============================================================== -->



    <!-- ============================================================== -->
    <!-- 						Navigation Start 						-->
    <!-- ============================================================== -->
    <div class="main-sidebar-nav default-navigation">
        <div class="nano">
            <div class="nano-content sidebar-nav">

                <div class="card-body border-bottom text-center nav-profile">
                    <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                    <img alt="profile" class="margin-b-10  " src="{{ asset('public/assets/img/avtar-2.png') }}"
                        width="80">
                    <p class="lead margin-b-0 toggle-none">{{ Auth::user()->name }}</p>

                </div>

                <ul class="metisMenu nav flex-column" id="menu">

                    <li class="nav-item "><a class="nav-link" href="{{ url('home') }}"><i class="fa fa-home"></i>
                            <span class="toggle-none">গ্রাহক লিষ্ট </a></li>

                    <li class="nav-item "><a class="nav-link" href="{{ url('Bill') }}"><i class="fa fa-home"></i>
                            <span class="toggle-none">বিল আদায়</a></li>

                    <li class="nav-item">
                        <a class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fa fa-home"></i>
                            <span class="toggle-none">মাসিক বিল<span class="fa arrow"></span></span></a>
                        <ul class="nav-second-level nav flex-column " aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="{{ url('January') }}">জানুয়ারি</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('February') }}">ফেব্রয়ারি</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('March') }}">মার্চ</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('April') }}">এপ্রিল</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('May') }}">মে</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('June') }}">জুন</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('July') }}">জুলাই</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('August') }}">আগস্ট</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('September') }}">সেপ্টেম্বর</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('October') }}">অক্টবর</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('November') }}">নভেম্বর</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('December') }}">ডিসেম্বর</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fa fa-home"></i>
                            <span class="toggle-none">বকেয়া বিল<span class="fa arrow"></span></span></a>
                        <ul class="nav-second-level nav flex-column " aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="{{ url('JanuaryDeu') }}">জানুয়ারি</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('FebruaryDeu') }}">ফেব্রয়ারি</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('MarchDeu') }}">মার্চ</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('AprilDeu') }}">এপ্রিল</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('MayDeu') }}">মে</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('JuneDeu') }}">জুন</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('JulyDeu') }}">জুলাই</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('AugustDeu') }}">আগস্ট</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('SeptemberDeu') }}">সেপ্টেম্বর</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('OctoberDeu') }}">অক্টবর</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('NovemberDeu') }}">নভেম্বর</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('DecemberDeu') }}">ডিসেম্বর</a></li>
                        </ul>
                    </li>


                </ul>
            </div>
        </div>
    </div>
    @endguest
    <!-- ============================================================== -->
    <!-- 						Navigation End	 						-->
    <!-- ============================================================== -->


    <!-- ============================================================== -->
    <!-- 						Content Start	 						-->
    <!-- ============================================================== -->


    <section class="main-content">

        @yield('content')

        <footer class="footer">
            <span>Copyright &copy; গুয়াচিত্রা ক্যাবলে নেটওয়ার্ক </span>
        </footer>

    </section>
    <!-- ============================================================== -->
    <!-- 						Content End		 						-->
    <!-- ============================================================== -->


    <!-- Common Plugins -->
    <script src="{{ asset('public/assets/lib/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('public/assets/lib/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/assets/lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/assets/lib/pace/pace.min.js') }}"></script>
    <script src="{{ asset('public/assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/assets/lib/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('public/assets/lib/nano-scroll/jquery.nanoscroller.min.js') }}"></script>
    <script src="{{ asset('public/assets/lib/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('public/js/select2.js') }}"></script>
    <script src="{{ asset('public/assets/js/custom.js') }}"></script>


    <!-- Datatables-->



    <script src="{{ asset('public/assets/lib/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/dedaf8eeba.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.js"></script>
    <script src="{{ asset('public/assets/lib/datatables/buttons.html5.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('#datatable').dataTable();
        });

    </script>
    <script>
        $(document).on("click", "#delete", function (e) {
            e.preventDefault();
            var link = $(this).attr("href");
            swal({
                title: "Are you Want to delete?",
                text: "Once Delete, This will be Permanently Delete!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location.href = link;
                    } else {
                        swal("Safe Data!");
                    }
                });
        });
    </script>
    <script>
        $(document).ready(function () {

            // Initialize select2
            $("#selUser").select2();

        });

    </script>

</body>

</html>
