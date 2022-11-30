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

                <!--Start Dashboard Content-->

                <div class="">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-12">
                                <style>
                                    .dropdown-menu{
                                        max-height: 500px;
                                        margin-bottom: 10px;
                                        overflow:auto;
                                        -webkit-overflow-scrolling: touch;
                                        background-color: #6698FF;
                                    }
                                    .list-group-item{
                                        background-color: #C2DFFF;
                                    }
                                    .dropdown-menu::-webkit-scrollbar {
                                        width: 12px;
                                        background-color: #F5F5F5; }

                                    .dropdown-menu::-webkit-scrollbar-thumb {
                                        border-radius: 10px;
                                        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
                                        background-image: -webkit-gradient(linear, left bottom, left top, from(#5ee7df), to(#b490ca));
                                        background-image: -webkit-linear-gradient(bottom, #5ee7df 0%, #b490ca 100%);
                                        background-image: linear-gradient(to top, #5ee7df 0%, #b490ca 100%); }
                                </style>


                                <div class="app-main__outer">
                                    <div class="app-main__inner">
                                        <div class="app-page-title">
                                        </div>
                                        <div class="">
                                            <div class="">
                                                <div class="card-body" >
                                                    <h5 class="card-title"> </h5>
                                                    <div class="btn-group dropleft  pull-right m-r10" role="group">
                                                        <button type="button" class="btn btn-info btn-sm rounded-circle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span><img src="{{asset('assets')}}/images/bell.png" width="35px"></span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <div class="list-group">
                                                                {{--@foreach($show_devices->take(15)  as $showdevice)--}}
                                                                @foreach($show_devices_one->take(15)  as $showdevice)

                                                                    @foreach($devis as $devi)
                                                                        @if($showdevice->Ph < $devi->setting->down_ph || $showdevice->Ph >$devi->setting->up_ph )
                                                                            {{--<a href="{{route('showeditsettingsdevise',['id' => ])])}}" class="list-group-item list-group-item-action flex-column align-items-start">--}}
                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                <h5 class="mb-1">PH</h5>
                                                                                <small>{{$showdevice->Time_S}}</small>
                                                                            </div>
                                                                            <small class="mb-1 text-danger">{{$showdevice->Ph}}</small>
                                                                            </a>
                                                                        @endif
                                                                        @if($showdevice->ORP <$devi->setting->down_orp || $showdevice->ORP >$devi->setting->up_orp )
                                                                            {{--<a href="{{route('showeditsettingsdevise')}}" class="list-group-item list-group-item-action flex-column align-items-start">--}}
                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                <h5 class="mb-1">ORP</h5>
                                                                                <small>{{$showdevice->Time_S}}</small>
                                                                            </div>
                                                                            <small class="mb-1 text-danger">{{$showdevice->ORP}}</small>
                                                                            </a>
                                                                        @endif
                                                                        @if($showdevice->TempWater <$devi->setting->down_tempwater || $showdevice->TempWater >$devi->setting->up_tempwater )
                                                                            {{--<a href="{{route('showeditsettingsdevise')}}" class="list-group-item list-group-item-action flex-column align-items-start">--}}
                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                <h5 class="mb-1">TempWater</h5>
                                                                                <small>{{$showdevice->Time_S}}</small>
                                                                            </div>
                                                                            <small class="mb-1 text-danger">{{$showdevice->TempWater}}</small>
                                                                            </a>
                                                                        @endif
                                                                        @if($showdevice->TempAir <$devi->setting->down_tempair || $showdevice->TempAir >$devi->setting->up_tempair )
                                                                            {{--<a href="{{route('showeditsettingsdevise')}}" class="list-group-item list-group-item-action flex-column align-items-start">--}}
                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                <h5 class="mb-1">TempWater</h5>
                                                                                {{--<small>{{$showdevice->Time_S}}</small>--}}
                                                                            </div>
                                                                            <small class="mb-1 text-danger">{{$showdevice->TempAir}}</small>
                                                                            </a>
                                                                        @endif
                                                                        @if($showdevice->ppm <$devi->setting->dow_ppm || $showdevice->ppm >$devi->setting->dow_ppm )
                                                                            {{--<a href="{{route('showeditsettingsdevise')}}" class="list-group-item list-group-item-action flex-column align-items-start">--}}
                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                <h5 class="mb-1">PPM</h5>
                                                                                <small>{{$showdevice->Time_S}}</small>
                                                                            </div>
                                                                            <small class="mb-1 text-danger">{{$showdevice->ppm}}</small>
                                                                            </a>
                                                                        @endif
                                                                    @endforeach
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <td>
                                                                    <div class="card gradient-info rounded-0">
                                                                        <div class="card-body">
                                                                            <div class="media align-items-center">
                                                                                <div class="media-body">
                                                                                    <h5 class="mb-0 text-white">Date</h5>
                                                                                    <p class="mb-0 text-white">
                                                                                        @foreach($show_devices_one->take(1) as $showdevice1)
                                                                                            <?php $aff1 = substr($showdevice1->Time_S, 0, 10);  ?>
                                                                                            <?php echo $aff1 ;?>
                                                                                        @endforeach
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="card gradient-info rounded-0">
                                                                        <div class="card-body">
                                                                            <div class="media align-items-center">
                                                                                <div class="media-body">
                                                                                    <h5 class="mb-0 text-white">Time</h5>
                                                                                    <p class="mb-0 text-white">
                                                                                        @foreach($show_devices_one->take(1) as $showdevice1)
                                                                                            <?php $aff1 = substr($showdevice1->Time_S, 11, 10);  ?>
                                                                                            <?php echo $aff1 ;?>
                                                                                        @endforeach
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a data-toggle="modal" data-target="#modal-fullscreen">
                                                                        <div class="card gradient-info rounded-0">
                                                                            <div class="card-body">
                                                                                <div class="media align-items-center">
                                                                                    <div class="media-body">
                                                                                        <h5 class="mb-0 text-white">PH</h5>
                                                                                        <p class="mb-0 text-white">
                                                                                            @foreach($show_devices_one->take(1)  as $showdevice)
                                                                                                <?php $aff1 = substr($showdevice1->Ph, 0, 5);  ?>

                                                                                                <?php echo $aff1 ;?>
                                                                                            @endforeach
                                                                                        </p>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="widget-numbers text-white"><span><img src="{{asset('assets')}}/images/ph.png" width="55px"></span></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </td>

                                                                <td>
                                                                    <a data-toggle="modal" data-target="#modal-do">
                                                                        <div class="card gradient-info rounded-0">
                                                                            <div class="card-body">
                                                                                <div class="media align-items-center">
                                                                                    <div class="media-body">
                                                                                        <h5 class="mb-0 text-white">DO</h5>
                                                                                        <p class="mb-0 text-white">  NULL
                                                                                        </p>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="widget-numbers text-white"><span><img src="{{asset('assets')}}/images/do2.png" width="65px"></span></div>
                                                                                    </div>                                                                                      </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </td>
                                                                </tr>
                                                               
                                                            <tr>
                                                                <td>
                                                                    <a data-toggle="modal" data-target="#modal-ppm">
                                                                        <div class="card gradient-info rounded-0">
                                                                            <div class="card-body">
                                                                                <div class="media align-items-center">
                                                                                    <div class="media-body">
                                                                                        <h5 class="mb-0 text-white">PPM</h5>
                                                                                        <p class="mb-0 text-white">
                                                                                            @foreach($show_devices_one->take(1)  as $showdevice)
                                                                                                <?php $aff1 = substr($showdevice1->ppm, 0, 5);  ?>

                                                                                                <?php echo $aff1 ;?>
                                                                                            @endforeach
                                                                                        </p>
                                                                                    </div>

                                                                                    <div class="widget-content-right">
                                                                                        <div class="widget-numbers text-white"><span></span></div>
                                                                                    </div>                                                                                     </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a data-toggle="modal" data-target="#modal-azote">

                                                                        <div class="card gradient-info rounded-0">
                                                                            <div class="card-body">
                                                                                <div class="media align-items-center">
                                                                                    <div class="media-body">
                                                                                        <h5 class="mb-0 text-white">Ammonuim</h5>
                                                                                        <p class="mb-0 text-white">
                                                                                            NULL
                                                                                        </p>
                                                                                    </div>

                                                                                    <div class="widget-content-right">
                                                                                        <div class="widget-numbers text-white"><span><img src="{{asset('assets')}}/images/ammonium.png" width="55px"></span></div>
                                                                                    </div>                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a data-toggle="modal" data-target="#modal-water1">

                                                                        <div class="card gradient-info rounded-0">
                                                                            <div class="card-body">
                                                                                <div class="media align-items-center">
                                                                                    <div class="media-body">
                                                                                        <h5 class="mb-0 text-white">Water Level 1</h5>
                                                                                        <p class="mb-0 text-white">
                                                                                            @foreach($show_devices_one->take(1)  as $showdevice)
                                                                                                <?php $aff1 = substr($showdevice1->Flotteur1, 0, 4);  ?>

                                                                                                <?php echo $aff1 ;?>
                                                                                            @endforeach
                                                                                        </p>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="widget-numbers text-white"><span><img src="{{asset('assets')}}/images/Sans titre-1.png" width="60px"></span></div>
                                                                                    </div>                                                                               </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a data-toggle="modal" data-target="#modal-water2">
                                                                        <div class="card gradient-info rounded-0">
                                                                            <div class="card-body">
                                                                                <div class="media align-items-center">
                                                                                    <div class="media-body">
                                                                                        <h5 class="mb-0 text-white">Water Level 2</h5>
                                                                                        <p class="mb-0 text-white">
                                                                                            @foreach($show_devices_one->take(1)  as $showdevice)
                                                                                                <?php $aff1 = substr($showdevice1->Flotteur2, 0, 4);  ?>

                                                                                                <?php echo $aff1 ;?>
                                                                                            @endforeach
                                                                                        </p>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="widget-numbers text-white"><span><img src="{{asset('assets')}}/images/Sans titre-2.png" width="60px"></span></div>
                                                                                    </div>                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a data-toggle="modal" data-target="#modal-air">
                                                                        <div class="card gradient-info rounded-0">
                                                                            <div class="card-body">
                                                                                <div class="media align-items-center">
                                                                                    <div class="media-body">
                                                                                        <h5 class="mb-0 text-white">Air Temperature</h5>
                                                                                        <p class="mb-0 text-white">
                                                                                            @foreach($show_devices_one->take(1) as $showdevice)
                                                                                                <?php $aff1 = substr($showdevice1->TempAir, 0, 6);  ?>

                                                                                                <?php echo $aff1 ;?>
                                                                                            @endforeach
                                                                                        </p>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="widget-content-right">
                                                                                            <div class="widget-numbers text-white"><span><img src="{{asset('assets')}}/images/windmill.png" width="60px"></span></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a data-toggle="modal" data-target="#modal-water">
                                                                        <div class="card gradient-info rounded-0">
                                                                            <div class="card-body">
                                                                                <div class="media align-items-center">
                                                                                    <div class="media-body">
                                                                                        <h5 class="mb-0 text-white">Water Temperature</h5>
                                                                                        <p class="mb-0 text-white">
                                                                                            @foreach($show_devices_one->take(1)  as $showdevice)
                                                                                                <?php $aff1 = substr($showdevice1->TempWater, 0, 6);  ?>

                                                                                                <?php echo $aff1 ;?>
                                                                                            @endforeach
                                                                                        </p>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="widget-numbers text-white"><span><img src="{{asset('assets')}}/images/water.png" width="60px"></span></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <div class="card gradient-info rounded-0">
                                                                        <div class="card-body">
                                                                            <div class="media align-items-center">
                                                                                <div class="media-body">
                                                                                    <h5 class="mb-0 text-white">X1</h5>
                                                                                    <p class="mb-0 text-white">
                                                                                        NULL
                                                                                    </p>
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="card gradient-info rounded-0">
                                                                        <div class="card-body">
                                                                            <div class="media align-items-center">
                                                                                <div class="media-body">
                                                                                    <h5 class="mb-0 text-white">X2</h5>
                                                                                    <p class="mb-0 text-white">
                                                                                        NULL
                                                                                    </p>
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="card gradient-info rounded-0">
                                                                        <div class="card-body">
                                                                            <div class="media align-items-center">
                                                                                <div class="media-body">
                                                                                    <h5 class="mb-0 text-white">X3</h5>
                                                                                    <p class="mb-0 text-white">
                                                                                        NULL
                                                                                    </p>
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="card gradient-info rounded-0">
                                                                        <div class="card-body">
                                                                            <div class="media align-items-center">
                                                                                <div class="media-body">
                                                                                    <h5 class="mb-0 text-white">X5</h5>
                                                                                    <p class="mb-0 text-white">
                                                                                        NULL
                                                                                    </p>
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            </thead>

                                                        </table>
                                                    </div>
                                                </div>
                                                <script type="text/javascript" src="./assets/scripts/main.js"></script>

                                            </div>
                                        </div>
                                        <script type="text/javascript" src="{{asset('assets')}}/scripts/main.js"></script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</div>
</body>
<div class="modal fade modal-fullscreen" id="modal-fullscreen" tabindex="-1" role="dialog" aria-labelledby="myModalLabe2" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <canvas id="line-chart1" width="800" height="450"></canvas>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
                <script>
                    new Chart(document.getElementById("line-chart1"), {
                        type: 'line',
                        data: {
                            labels: [
                                @foreach($show_devices->slice(count($show_devices)-15, count($show_devices)) as $showdevice1)
                                <?php $aff = substr($showdevice1->Time_S, 14, 2 );  ?>
                                <?php $aff1 = substr($showdevice1->Time_S, 11, 2 );  ?>

                                <?php echo $aff1.'.'.$aff ;?>,
                                @endforeach
                            ],
                            datasets: [{
                                data: [
                                    @foreach($show_devices->slice(count($show_devices)-15, count($show_devices)) as $showdevice)
                                    {{$showdevice->Ph}},
                                    @endforeach

                                ],
                                label: "Ph",
                                borderColor: "#0080ff",
                                fill: false
                            },
                            ]
                        },
                        options: {
                            title: {
                                display: true,
                                text: ''
                            },
                            scales: {
                                xAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'Time'
                                    }
                                }],
                                yAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'Ph'
                                    }
                                }]
                            }
                        }
                    });
                </script>

            </div>
        </div>
    </div>
</div>
<div class="modal fade modal-orp" id="modal-orp" tabindex="-1" role="dialog" aria-labelledby="myModalLabe2" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <canvas id="line-chart2" width="800" height="450"></canvas>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
                <script>
                    new Chart(document.getElementById("line-chart2"), {
                        type: 'line',
                        data: {
                            labels: [
                                @foreach($show_devices->slice(count($show_devices)-15, count($show_devices)) as $showdevice1)
                                <?php $aff = substr($showdevice1->Time_S, 14, 2 );  ?>
                                <?php $aff1 = substr($showdevice1->Time_S, 11, 2 );  ?>

                                <?php echo $aff1.'.'.$aff ;?>,
                                @endforeach
                            ],
                            datasets: [{
                                data: [
                                    @foreach($show_devices->slice(count($show_devices)-15, count($show_devices)) as $showdevice)
                                    {{$showdevice->ORP}},
                                    @endforeach

                                ],
                                label: "ORP",
                                borderColor: "#0080ff",
                                fill: false
                            },
                            ]
                        },
                        options: {
                            title: {
                                display: true,
                                text: ''
                            },
                            scales: {
                                xAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'Time'
                                    }
                                }],
                                yAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'mV'
                                    }
                                }]
                            }
                        }
                    });
                </script>

            </div>
        </div>
    </div>
</div>
<div class="modal fade modal-ppm" id="modal-ppm" tabindex="-1" role="dialog" aria-labelledby="myModalLabe2" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <canvas id="line-chart3" width="800" height="450"></canvas>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
                <script>
                    new Chart(document.getElementById("line-chart3"), {
                        type: 'line',
                        data: {
                            labels: [
                                @foreach($show_devices->slice(count($show_devices)-15, count($show_devices)) as $showdevice1)
                                <?php $aff = substr($showdevice1->Time_S, 14, 2 );  ?>
                                <?php $aff1 = substr($showdevice1->Time_S, 11, 2 );  ?>

                                <?php echo $aff1.'.'.$aff ;?>,
                                @endforeach
                            ],
                            datasets: [{
                                data: [
                                    @foreach($show_devices->slice(count($show_devices)-15, count($show_devices)) as $showdevice)
                                    {{$showdevice->ppm}},
                                    @endforeach

                                ],
                                label: "PPM",
                                borderColor: "#0080ff",
                                fill: false
                            },
                            ]
                        },
                        options: {
                            title: {
                                display: true,
                                text: ''
                            },
                            scales: {
                                xAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'Time'
                                    }
                                }],
                                yAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'ppm'
                                    }
                                }]
                            }
                        }
                    });
                </script>

            </div>
        </div>
    </div>
</div>
<div class="modal fade modal-water1" id="modal-water1" tabindex="-1" role="dialog" aria-labelledby="myModalLabe2" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <canvas id="line-chart4" width="800" height="450"></canvas>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
                <script>
                    new Chart(document.getElementById("line-chart4"), {
                        type: 'line',
                        data: {
                            labels: [
                                @foreach($show_devices->slice(count($show_devices)-15, count($show_devices)) as $showdevice1)
                                <?php $aff = substr($showdevice1->Time_S, 14, 2 );  ?>
                                <?php $aff1 = substr($showdevice1->Time_S, 11, 2 );  ?>

                                <?php echo $aff1.'.'.$aff ;?>,
                                @endforeach
                            ],
                            datasets: [{
                                data: [
                                    @foreach($show_devices->slice(count($show_devices)-15, count($show_devices)) as $showdevice)
                                    {{$showdevice->Flotteur1}},
                                    @endforeach

                                ],
                                label: "Water Level 1",
                                borderColor: "#0080ff",
                                fill: false
                            },
                            ]
                        },
                        options: {
                            title: {
                                display: true,
                                text: ''
                            },
                            scales: {
                                xAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'Time'
                                    }
                                }],
                                yAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'LvL'
                                    }
                                }]
                            }
                        }
                    });
                </script>

            </div>
        </div>
    </div>
</div>
<div class="modal fade modal-water2" id="modal-water2" tabindex="-1" role="dialog" aria-labelledby="myModalLabe2" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <canvas id="line-chart5" width="800" height="450"></canvas>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
                <script>
                    new Chart(document.getElementById("line-chart5"), {
                        type: 'line',
                        data: {
                            labels: [
                                @foreach($show_devices->slice(count($show_devices)-15, count($show_devices)) as $showdevice1)
                                <?php $aff = substr($showdevice1->Time_S, 14, 2 );  ?>
                                <?php $aff1 = substr($showdevice1->Time_S, 11, 2 );  ?>

                                <?php echo $aff1.'.'.$aff ;?>,
                                @endforeach
                            ],
                            datasets: [{
                                data: [
                                    @foreach($show_devices->slice(count($show_devices)-15, count($show_devices)) as $showdevice)
                                    {{$showdevice->Flotteur2}},
                                    @endforeach

                                ],
                                label: "Water Level 2",
                                borderColor: "#0080ff",
                                fill: false
                            },
                            ]
                        },
                        options: {
                            title: {
                                display: true,
                                text: ''
                            },
                            scales: {
                                xAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'Time'
                                    }
                                }],
                                yAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'LvL'
                                    }
                                }]
                            }
                        }
                    });
                </script>

            </div>
        </div>
    </div>
</div>
<div class="modal fade modal-air" id="modal-air" tabindex="-1" role="dialog" aria-labelledby="myModalLabe2" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <canvas id="line-chart6" width="800" height="450"></canvas>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
                <script>
                    new Chart(document.getElementById("line-chart6"), {
                        type: 'line',
                        data: {
                            labels: [
                                @foreach($show_devices->slice(count($show_devices)-15, count($show_devices)) as $showdevice1)
                                <?php $aff = substr($showdevice1->Time_S, 14, 2 );  ?>
                                <?php $aff1 = substr($showdevice1->Time_S, 11, 2 );  ?>

                                <?php echo $aff1.'.'.$aff ;?>,
                                @endforeach
                            ],
                            datasets: [{
                                data: [
                                    @foreach($show_devices->slice(count($show_devices)-15, count($show_devices)) as $showdevice)
                                    {{$showdevice->TempAir}},
                                    @endforeach

                                ],
                                label: "Air Temperature",
                                borderColor: "#0080ff",
                                fill: false
                            },
                            ]
                        },
                        options: {
                            title: {
                                display: true,
                                text: ''
                            },
                            scales: {
                                xAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'Time'
                                    }
                                }],
                                yAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: '°C'
                                    }
                                }]
                            }
                        }
                    });
                </script>

            </div>
        </div>
    </div>
</div>
<div class="modal fade modal-water" id="modal-water" tabindex="-1" role="dialog" aria-labelledby="myModalLabe2" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <canvas id="line-chart7" width="800" height="450"></canvas>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
                <script>
                    new Chart(document.getElementById("line-chart7"), {
                        type: 'line',
                        data: {
                            labels: [
                                @foreach($show_devices->slice(count($show_devices)-15, count($show_devices)) as $showdevice1)
                                <?php $aff = substr($showdevice1->Time_S, 14, 2 );  ?>
                                <?php $aff1 = substr($showdevice1->Time_S, 11, 2 );  ?>

                                <?php echo $aff1.'.'.$aff ;?>,
                                @endforeach
                            ],
                            datasets: [{
                                data: [
                                    @foreach($show_devices->slice(count($show_devices)-15, count($show_devices)) as $showdevice)
                                    {{$showdevice->TempWater}},
                                    @endforeach

                                ],
                                label: "Water Temperature",
                                borderColor: "#0080ff",
                                fill: false
                            },
                            ]
                        },
                        options: {
                            title: {
                                display: true,
                                text: ''
                            },
                            scales: {
                                xAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'Time'
                                    }
                                }],
                                yAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: '°C'
                                    }
                                }]
                            }
                        }
                    });
                </script>

            </div>
        </div>
    </div>
</div>
<div class="modal fade modal-do" id="modal-do" tabindex="-1" role="dialog" aria-labelledby="myModalLabe2" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <canvas id="line-chart8" width="800" height="450"></canvas>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
                <script>
                    new Chart(document.getElementById("line-chart8"), {
                        type: 'line',
                        data: {
                            labels: [
                                @foreach($show_devices->slice(count($show_devices)-15, count($show_devices)) as $showdevice1)
                                <?php $aff = substr($showdevice1->Time_S, 14, 2 );  ?>
                                <?php $aff1 = substr($showdevice1->Time_S, 11, 2 );  ?>

                                <?php echo $aff1.'.'.$aff ;?>,
                                @endforeach
                            ],
                            datasets: [{
                                data: [
                                    @foreach($show_devices->slice(count($show_devices)-15, count($show_devices)) as $showdevice)
                                    {{$showdevice->DO}},
                                    @endforeach

                                ],
                                label: "DO",
                                borderColor: "#0080ff",
                                fill: false
                            },
                            ]
                        },
                        options: {
                            title: {
                                display: true,
                                text: ''
                            },
                            scales: {
                                xAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'Time'
                                    }
                                }],
                                yAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'DO'
                                    }
                                }]
                            }
                        }
                    });
                </script>

            </div>
        </div>
    </div>
</div>
<div class="modal fade modal-azote" id="modal-azote" tabindex="-1" role="dialog" aria-labelledby="myModalLabe2" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <canvas id="line-chart9" width="800" height="450"></canvas>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
                <script>
                    new Chart(document.getElementById("line-chart9"), {
                        type: 'line',
                        data: {
                            labels: [
                                @foreach($show_devices->slice(count($show_devices)-15, count($show_devices)) as $showdevice1)
                                <?php $aff = substr($showdevice1->Time_S, 14, 2 );  ?>
                                <?php $aff1 = substr($showdevice1->Time_S, 11, 2 );  ?>

                                <?php echo $aff1.'.'.$aff ;?>,
                                @endforeach
                            ],
                            datasets: [{
                                data: [
                                    @foreach($show_devices->slice(count($show_devices)-15, count($show_devices)) as $showdevice)
                                    {{$showdevice->azote}},
                                    @endforeach

                                ],
                                label: "azote",
                                borderColor: "#0080ff",
                                fill: false
                            },
                            ]
                        },
                        options: {
                            title: {
                                display: true,
                                text: ''
                            },
                            scales: {
                                xAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'Time'
                                    }
                                }],
                                yAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'Azote'
                                    }
                                }]
                            }
                        }
                    });
                </script>

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


</div></div></body>
</html>