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
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- simplebar CSS-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="assets/css/app-style.css" rel="stylesheet"/>
    <!-- skins CSS-->
    <link href="assets/css/skins.css" rel="stylesheet"/>

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
                                            {{$user->nom}}
                                        </h6>
                                        <p class="user-subtitle">{{$user->email}}</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <a href="{{route("showEditUser",['id' => $user->id])}}"><li class="dropdown-item"><i class="icon-user mr-2"></i>  My Profile</li></a>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item"><i class="icon-power mr-2"></i><a href="{{route('handleLogout')}}" onclick="return confirm('Are you sure to Logout?')"> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <!--End topbar header-->
    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-sm-9">
                </div>

            </div>
            <!-- End Breadcrumb-->


            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="page-title">Create Site</h4>
                            <hr>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{route('create')}}" method="post" class="">
                                    {{csrf_field()}}
                                    <br>      <div class="form-group">
                                    <label for="input-6">Site Name</label>
                                    <input name="nom" id="nom" placeholder="Enter site name" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="input-7">Location</label>
                                    <input name="localisation" id="localisation" placeholder="Enter the location" type="text" class="form-control" required>
                                </div>

                                <div class="form-group text-center">
                                    <div class="form-footer">
                                            <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Create</button>

                                        </div>
                                </div>
                            </form>
                            </form>
                            <div class="form-group text-center">
                                <div class="form-footer">
                                    <a href="{{route('showlistuser')}}">

                                        <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                                    </a>
                                </div></div>
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
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- simplebar js -->
<script src="assets/plugins/simplebar/js/simplebar.js"></script>
<!-- sidebar-menu js -->
<script src="assets/js/sidebar-menu.js"></script>

<!-- Custom scripts -->
<script src="assets/js/app-script.js"></script>

</body>
</html>
<script type="text/javascript" src="./assets/scripts/main.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#Create").click(function () {
            var nom = $("#nom").val();
            if (nom == null) {
                alert("Please check your Site!");
                return false;
            }
            return true;
        });
    });

</script>
