
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>MyDigiPool</title>
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
<style>

    .demo,h4{padding:30px 0}
    .pricingTable,h4{text-align:center}
    body{padding:0;margin:0}
    .demo{background:#B2B2B2}
    h4{color:#444}
    .pricingTable{background:#fff;border-radius:10px;overflow:hidden;position:relative;transition:all .3s ease 0s}
    .pricingTable:hover{box-shadow:0 0 5px rgba(0,0,0,.8) inset,0 0 10px rgba(0,0,0,.8)}
    .pricingTable svg{display:block;margin-left:-1px}
    .pricingTable .pricing-content{padding:50px 0 30px;position:relative}
    .pricingTable .title{font-size:35px;font-weight:600;color:#ae003d;text-transform:uppercase;margin:0 0 10px}
    .pricingTable .pricing-content ul{padding:0;margin:0 0 30px;list-style:none}
    .pricingTable .pricing-content ul li{font-size:18px;color:rgba(0,0,0,.3);line-height:40px;text-transform:capitalize}
    .pricingTable .pricingTable-signup{display:inline-block;padding:8px 50px;background:#ae003d;border-radius:20px;font-size:20px;font-weight:600;color:#fff;text-transform:uppercase;position:relative;transition:all .3s ease 0s}
    .pricingTable:hover .pricingTable-signup{box-shadow:0 0 10px #ae003d}
    .pricingTable .pricingTable-signup:hover{color:#ae003d;background:#fff;box-shadow:0 0 10px #ae003d,0 0 10px #000 inset}
    .pricingTable.blue .title{color:#005c99}
    .pricingTable.blue .pricingTable-signup{background:#005c99}
    .pricingTable.blue:hover .pricingTable-signup{box-shadow:0 0 10px #005c99}
    .pricingTable.blue .pricingTable-signup:hover{color:#005c99;background:#fff;box-shadow:0 0 10px #005c99,0 0 10px #000 inset}
    .pricingTable.red .title{color:#db2c29}
    .pricingTable.red .pricingTable-signup{background:#db2c29}
    .pricingTable.red:hover .pricingTable-signup{box-shadow:0 0 10px #db2c29}
    .pricingTable.red .pricingTable-signup:hover{color:#db2c29;background:#fff;box-shadow:0 0 10px #db2c29,0 0 10px #000 inset}
    @media only screen and (max-width:990px){.pricingTable{margin-bottom:30px}
    }
</style>

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
                                        <h6 class="mt-2 user-title">test</h6>
                                        <p class="user-subtitle">test@gmail.com</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item"><i class="icon-user mr-2"></i>  My Profile</li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
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
                                    <div class="card-header"><i class="fa fa-table"></i> List Device</div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <nav class="nav nav-pills float-right">
                                                <a class="nav-item nav-link active " href="#p1" data-toggle="tab">View 1</a>
                                                <a class="nav-item nav-link" href="#p2" data-toggle="tab">View 2</a>
                                            </nav>
                                            <div class="w3-container">
                                                <a href="{{route('showdevise')}}">
                                                    <button class="w3-button w3-xlarge w3-red w3-card-4">+</button></a>
                                            </div><br>

                                            <div id="default-datatable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                                <div class="tab-content">
                                                    <div class="tab-pane" id="p2">
                                                        <form  method="post" action="">
                                                            <?php $i=1;  ?>
                                                            <table class="mb-0 table table-striped">
                                                                <thead>
                                                                <tr>
                                                                    <th><center> N' </center></th>
                                                                    <th><center>Name Device</center></th>
                                                                    <th><center>Id Device</center></th>
                                                                    <th><center>Actions</center></th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach($devises as $devise)
                                                                    <tr>
                                                                        <th><center> <?php echo $i++; ?>  </center></th>
                                                                        <th><center> {{$devise->name_device}} </center></th>
                                                                        <th><center> {{$devise->code_device}} </center></th>
                                                                        <td><center>
                                                                                <a class="btn btn-success" href="{{route("showEditDevise",['id_device' => $devise->id])}}">Edit</a>
                                                                                <a class="btn btn-danger" href="{{route("handleDeleteDevise",$devise->id)}}" onclick="return confirm('Are you sure to Delete Devise?')"
                                                                                >Delete</a>
                                                                                <a href="{{route('showdevice1',['id' => $devise->id])}}" > <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Show Device</button> </a>
                                                                                <a href="{{route('showeditsettingsdevise',['id' => $devise->id])}}" ><button type="button" class="btn btn-info">Settings</button></a>
                                                                            </center></td>
                                                                    </tr>
                                                                @endforeach
                                                                </tbody>
                                                            </table>
                                                        </form>
                                                        <br><br>
                                                    </div>
                                                    <div class="tab-pane active" id="p1">
                                                        <br><br>
                                                        <div class="row">
                                                            @foreach($devises as $devise)


                                                                <div class="col-md-3 col-sm-6">
                                                                    <div class="pricingTable blue" style="background-color: #f1f5f9;">
                                                                        <svg x="0" y="0" viewBox="0 0 360 220">
                                                                            <g>
                                                                                <path fill="#DC143C" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                        c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                        s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                        L0.732,193.75z"></path>
                                                                            </g>
                                                                            <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="40">{{$devise->name_device}}</text>
                                                                        </svg>
                                                                        <div class="pricing-content">
                                                                            <h3 class="title">{{$devise->code_device}}</h3>
                                                                            @if($devise->setting)
                                                                            <a href="{{route('showdevice1',['id' => $devise->id])}}" class="pricingTable-signup">View</a>
                                                                                @else
                                                                                <a href="{{route('showeditsettingsdevise',['id' => $devise->id])}}" class="pricingTable-signup">Complete Setting</a>
                                                                            @endif
                                                                            <br><br>
                                                                            <a href="{{route("showEditDevise",['id_device' => $devise->id])}}" class="pricingTable-signup">Edit</a>
                                                                            <br><br>
                                                                            <a href="{{route("showeditsettingsdevise",['id_device' => $devise->id])}}" class="pricingTable-signup">Setting</a>
                                                                            <br><br>
                                                                            <a href="{{route("export_pdf")}}" class="pricingTable-signup">History</a>
                                                                            <br><br>
                                                                            <a href="{{route("handleDeleteDevise",$devise->id)}}" onclick="return confirm('Are you sure to Delete Devise?')" class="pricingTable-signup">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                            <br>
                                                            <br><br>
                                                        </div>
                                                    </div>

                                                </div>
                                                <br><br>
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
                <a href="" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
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


</body>
</html>