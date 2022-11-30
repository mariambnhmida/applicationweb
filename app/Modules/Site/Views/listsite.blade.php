<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>MyDigipool</title>
    <!--favicon-->
    <link rel="icon" href="{{asset('assets')}}/images/favicon.ico" type="image/x-icon">
    <!-- simplebar CSS-->
    <link href="{{asset('assets')}}/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="{{asset('assets')}}/css/animate.css" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="{{asset('assets')}}/css/icons.css" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="{{asset('assets')}}/css/sidebar-menu.css" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="{{asset('assets')}}/css/app-style.css" rel="stylesheet"/>
    <!-- skins CSS-->
    <link href="{{asset('assets')}}/css/skins.css" rel="stylesheet"/>

</head>

<body>

<!-- start loader -->
<div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
<!-- end loader -->

<!-- Start wrapper-->
<div id="wrapper">

    <!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
        <div class="brand-logo">
            <a href="{{route('index2')}}">
                <img src="{{asset('assets')}}/images/logo.png" class="logo-icon" alt="logo icon">
                <h5 class="logo-text">MyDigiPool</h5>
            </a>
        </div>

        <ul class="sidebar-menu">
            <li class="sidebar-header">MAIN NAVIGATION</li>
            <li>
                <a href="{{route('index2')}}" class="waves-effect">
                    <i class="zmdi zmdi-format-list-bulleted"></i> <span>DASHBOARD</span>
                </a>
            </li>

            <li>
                <a href="{{route('showlistuser')}}" class="waves-effect">
                    <i class="zmdi zmdi-view-dashboard"></i> <span>USERS</span>
                </a>

            </li>
            <li>
                <a href="{{route('showlistdevise2')}}" class="waves-effect">
                    <i class="zmdi zmdi-layers"></i>
                    <span>DEVICES</span>
                </a>

            </li>

            <li>
                <a href="{{route('showlistsite')}}" class="waves-effect">
                    <i class="zmdi zmdi-widgets"></i> <span>SITES</span>

                </a>

            </li>


            <li>
                <a href="{{route('showcontact')}}" class="waves-effect">
                    <i class="zmdi zmdi-format-list-bulleted"></i> <span>CONTACT</span>
                </a>
            </li>


        </ul>

    </div>
    <!--End sidebar-wrapper-->

    <!--Start topbar header-->
    <header class="topbar-nav">
        <nav id="header-setting" class="navbar navbar-expand fixed-top">
            <ul class="navbar-nav mr-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link toggle-menu" href="">
                        <i class="icon-menu menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <form class="search-bar">
                        <input type="text" class="form-control" placeholder="Enter keywords">
                        <a href=""><i class="icon-magnifier"></i></a>
                    </form>
                </li>
            </ul>

            <ul class="navbar-nav align-items-center right-nav-link">


                <li class="nav-item">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item user-details">
                            <a href="">
                                <div class="media">
                                    <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                                    <div class="media-body">
                                        <h6 class="mt-2 user-title">
                                            {{Auth::user()->nom}}
                                        </h6>
                                        <p class="user-subtitle">{{Auth::user()->email}}</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <a href="{{route("showEditUser",['id' => Auth::user()->id])}}"><li class="dropdown-item"><i class="icon-user mr-2"></i>  My Profile</li></a>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item"><i class="icon-power mr-2"></i><a href="{{route('handleLogout')}}" onclick="return confirm('Are you sure to Logout?')"> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <!--End topbar header-->
    <!-- Start wrapper-->
    <div id="wrapper">


        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">

                <!--Start Dashboard Content-->

                <div class="">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                                    <br><br>
                                    <div class="card-header"><i class="fa fa-table"></i> List Site</div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <div class="w3-container">
                                                <a href="{{route('showSite')}}">
                                                    <button class="w3-button w3-xlarge w3-red w3-card-4">+</button></a>
                                            </div><br>
                                            <div id="default-datatable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <table id="default-datatable" class="table table-bordered dataTable" role="grid" aria-describedby="default-datatable_info">
                                                                    <thead>
                                                                    <tr role="row">
                                                                        <th class="sorting" tabindex="0" aria-controls="default-datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 242px;">Idsite</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="default-datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 365px;">Name Site</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="default-datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 187px;">Location</th>
                                                                        <th class="sorting_desc" tabindex="0" aria-controls="default-datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" aria-sort="descending" style="width: 79px;">Action</th>

                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                    @foreach($sites as $site)
                                                                        <tr>
                                                                            <th><center>{{$site->id}}</center></th>
                                                                            <th><center>{{$site->name}}</center></th>
                                                                            <th><center>{{$site->localisation}}</center></th>
                                                                            <th>
                                                                                <a class="btn btn-success"  href="{{route("showeditsite",['id'=> $site->id])}}">Edit</a>
                                                                                <a class="btn btn-danger" href="{{route('deletesite', $site->id)}}" onclick="return confirm('Are you sure to Delete Site ?')"
                                                                                >Delete</a>

                                                                                <a href="{{route('showListSiteDevise',['id' => $site->id])}}">
                                                                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Show Device</button></a>
                                                                            </th>
                                                                            @endforeach
                                                                        </tr>
                                                                    </tbody>
                                                                    <tfoot>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--End Row-->

                        <!--start overlay-->
                        <div class="overlay toggle-menu"></div>
                        <!--end overlay-->
                    </div>
                    <!-- End container-fluid-->

                </div><!--End content-wrapper-->
                <!--Start Back To Top Button-->
                <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
                <!--End Back To Top Button-->
            </div><!--End wrapper-->




            <!--start color switcher-->
            <div class="right-sidebar">
                <div class="switcher-icon">
                    <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
                </div>
                <div class="right-sidebar-content">


                    <p class="mb-0">Header Colors</p>
                    <hr>

                    <div class="mb-3">
                        <button type="button" id="default-header" class="btn btn-outline-primary">Default Header</button>
                    </div>

                    <ul class="switcher">
                        <li id="header1"></li>
                        <li id="header2"></li>
                        <li id="header3"></li>
                        <li id="header4"></li>
                        <li id="header5"></li>
                        <li id="header6"></li>
                    </ul>

                    <p class="mb-0">Sidebar Colors</p>
                    <hr>

                    <div class="mb-3">
                        <button type="button" id="default-sidebar" class="btn btn-outline-primary">Default Header</button>
                    </div>

                    <ul class="switcher">
                        <li id="theme1"></li>
                        <li id="theme2"></li>
                        <li id="theme3"></li>
                        <li id="theme4"></li>
                        <li id="theme5"></li>
                        <li id="theme6"></li>
                    </ul>

                </div>
            </div>
            <!--end color switcher-->

        </div><!--End wrapper-->


        <!-- Bootstrap core JavaScript-->
        <script src="{{asset('assets')}}/js/jquery.min.js"></script>
        <script src="{{asset('assets')}}/js/popper.min.js"></script>
        <script src="{{asset('assets')}}/js/bootstrap.min.js"></script>

        <!-- simplebar js -->
        <script src="{{asset('assets')}}/plugins/simplebar/js/simplebar.js"></script>
        <!-- sidebar-menu js -->
        <script src="{{asset('assets')}}/js/sidebar-menu.js"></script>
        <!-- Apex Chart JS -->
        <script src="{{asset('assets')}}/plugins/apexcharts/apexcharts.js"></script>
        <script src="{{asset('assets')}}/js/dashboard-human-resources.js"></script>
        <!-- Custom scripts -->
        <script src="{{asset('assets')}}/js/app-script.js"></script>

    </div></div></body>
</html>