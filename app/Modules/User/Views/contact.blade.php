
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
                        <a href="javascript:void();"><i class="icon-magnifier"></i></a>
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
    <!-- Start wrapper-->
    <div id="wrapper">


        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row pt-2 pb-2">
                    <div class="col-sm-9">
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="page-title">Contact</h4>

                                <hr>
                                <center>
                                    <div class="map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6381.736195238172!2d10.18648274900845!3d36.893503619323695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2cb7254b0ee4f%3A0x7e87e33674451f9e!2sEl%20Ghazala!5e0!3m2!1sfr!2stn!4v1580976557317!5m2!1sfr!2stn" width="70%" height="250px"
                                                frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                    </div>
                                </center>

                                <form action="{{route('createcontact')}}" method="post">
                                    {{csrf_field()}}
                                    <br>

                                    <div class="form-group">
                                        <label for="input-6">subject</label>
                                        <input name="subject" id="subject" placeholder="subject" type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-7">Message</label>
                                        <textarea name="text" id="text" placeholder="Enter your message" type="text" class="form-control" required></textarea>
                                    </div>

                                    <div class="form-group text-center">
                                        <div class="form-footer">

                                                <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Send</button>
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
            </div><!--End content-wrapper-->
            <!--Start Back To Top Button-->
            <a href="" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
            <!--End Back To Top Button-->
        </div><!--End wrapper-->




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

</body>
</html>