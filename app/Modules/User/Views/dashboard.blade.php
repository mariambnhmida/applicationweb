<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>MyDigiPool || Dashboard</title>
    <link href="{{asset('css')}}/style.css" rel="stylesheet">
    <link href="{{asset('css')}}/stylewater.css" rel="stylesheet">
    <link href="{{asset('css_u')}}/main.css" rel="stylesheet"></head>

<link href="{{asset('css_u')}}/style.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>


</head>
<body>
<input type="checkbox" id="check">
<label for="check">
    <i class="fas fa-bars" id="btn"></i>
    <i class="fas fa-times" id="cancel"></i>
</label>
<div class="sidebar">
    <header>MyDigiPool</header>
    <ul>
        <li><a href=""><i class="fas fa-qrcode"></i>Dashboard</a></li>
        <ul>
            <li><a href="{{route('showlistuser')}}">&nbsp;&nbsp;&nbsp;<i class="fas fa-user"></i>Users</a></li>
            <li><a href="{{route('showlistsite')}}">&nbsp;&nbsp;&nbsp;<i class="fas fa-map-marked-alt"></i>Sites</a></li>
            <li><a href="{{route('showlistdevise2')}}">&nbsp;&nbsp;&nbsp;<i class="fas fa-box"></i>Devices</a></li>
        </ul>
        <li><a href="{{route('showcontact')}}"><i class="far fa-envelope"></i>Contact</a></li>
        <li><a href="{{route('handleLogout')}}" onclick="return confirm('Are you sure to Logout?')"><i class="fas fa-sign-out-alt"></i>Log out</a></li>

    </ul>
</div>
<?php $i=0 ;$j=0;$k=0;$g=0;$a=0;$b=0;$c=0;$d=0;$e=0; ?>
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="col-md-10 pull-right mr-12">
            <div class="col-lg-10">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div class="row">
                            <div class="">
                                <div class="dashboard-wrapper">
                                    <div class="dashboard-finance">
                                        @foreach($sites as $site)
                                            <h1 class="text-center bg-deep-blue">Site : {{$site->name}}</h1>
                                            <div class="container-fluid dashboard-content">
                                                @foreach($devises as $devise)
                                                    @if( $site->id == $devise->site_id)
                                                        <h3>{{$devise->name_device}}</h3>
                                                        <div class="row">
                                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="metric-value d-inline-block">
                                                                            <h1 class="mb-1">ORP</h1>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-body text-center bg-deep-blue p-t-40 p-b-40">
                                                                        <div id="sparkline-revenue2">
                                                                            <canvas id="<?php echo "orp".$k; ?>" width="800" height="450"></canvas>
                                                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>

                                                                        </div>
                                                                    </div>
                                                                    <div class="card-footer text-center bg-white">
                                                                        <a href="{{route('showchart')}}" class="card-link">View Details</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="metric-value d-inline-block">
                                                                            <h1 class="mb-1">Ph</h1>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-body bg-deep-blue p-t-40 p-b-40">
                                                                        <canvas id="<?php echo "ph".$i ;?>" width="800" height="450"></canvas>
                                                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
                                                                    </div>
                                                                    <div class="card-footer text-center bg-white">
                                                                        <a href="{{route('showchart')}}" class="card-link">View Details</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="metric-value d-inline-block">
                                                                            <h1 class="mb-1">PPM</h1>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-body bg-deep-blue p-t-40 p-b-40">
                                                                        <div id="sparkline-revenue3">
                                                                            <canvas id="<?php echo "ppm".$g ; ?>" width="800" height="450"></canvas>
                                                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>

                                                                        </div>
                                                                    </div>
                                                                    <div class="card-footer text-center bg-white">
                                                                        <a href="{{route('showchart')}}" class="card-link">View Details</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="metric-value d-inline-block">
                                                                            <h1 class="mb-1">Air Temp</h1>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-body bg-deep-blue p-b-40 p-t-40">
                                                                        <div id="sparkline-revenue4">
                                                                            <canvas id="<?php echo "tempair".$b;?>" width="800" height="450"></canvas>
                                                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>

                                                                        </div>
                                                                    </div>
                                                                    <div class="card-footer text-center bg-white">
                                                                        <a href="{{route('showchart')}}" class="card-link">View Details</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="metric-value d-inline-block">
                                                                            <h1 class="mb-1">Water Temp</h1>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-body bg-deep-blue p-b-40 p-t-40">
                                                                        <div id="sparkline-revenue4">
                                                                            <canvas id="<?php echo "tempwater".$c;?>" width="800" height="450"></canvas>
                                                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>

                                                                        </div>
                                                                    </div>
                                                                    <div class="card-footer text-center bg-white">
                                                                        <a href="{{route('showchart')}}" class="card-link">View Details</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="metric-value d-inline-block">
                                                                            <h1 class="mb-1">Water LvL1</h1>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-body bg-deep-blue p-b-40 p-t-40">
                                                                        <div id="sparkline-revenue4">
                                                                            <canvas id="<?php echo "lvl1".$a;?>" width="800" height="450"></canvas>
                                                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>

                                                                        </div>
                                                                    </div>
                                                                    <div class="card-footer text-center bg-white">
                                                                        <a href="{{route('showchart')}}" class="card-link">View Details</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="metric-value d-inline-block">
                                                                            <h1 class="mb-1">Water LvL2</h1>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-body bg-deep-blue p-b-40 p-t-40">
                                                                        <div id="sparkline-revenue4">
                                                                            <canvas id="<?php echo "lvl2".$d;?>" width="800" height="450"></canvas>
                                                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>

                                                                        </div>
                                                                    </div>
                                                                    <div class="card-footer text-center bg-white">
                                                                        <a href="{{route('showchart')}}" class="card-link">View Details</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="metric-value d-inline-block">
                                                                            <h1 class="mb-1">Ammonium</h1>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-body bg-deep-blue p-b-40 p-t-40">
                                                                        <div id="sparkline-revenue4">
                                                                            <canvas id="<?php echo "ammonium".$e;?>" width="800" height="450"></canvas>
                                                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>

                                                                        </div>
                                                                    </div>
                                                                    <div class="card-footer text-center bg-white">
                                                                        <a href="{{route('showchart')}}" class="card-link">View Details</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php $i++;$j++;$k++;$g++;$a++;$b++;$c++;$d++;$e++;  ?>
                                                    @endif
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                    <style>
                                        .hover {
                                            position: relative;
                                            display: flex;
                                            align-items: center;
                                            justify-content: center;
                                            width: 300px;
                                            height: 75px;
                                            background-color: #4db6ac;
                                            border-radius: 99px;
                                            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
                                            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
                                            overflow: hidden;
                                        }
                                        .hover:before, .hover:after {
                                            position: absolute;
                                            top: 0;
                                            display: flex;
                                            align-items: center;
                                            width: 50%;
                                            height: 100%;
                                            transition: 0.25s linear;
                                            z-index: 1;
                                        }
                                        .hover:before {
                                            content: '';
                                            left: 0;
                                            justify-content: flex-end;
                                            background-color: #4db6ac;
                                        }
                                        .hover:after {
                                            content: '';
                                            right: 0;
                                            justify-content: flex-start;
                                            background-color: #44a69c;
                                        }
                                        .hover:hover {
                                            background-color: #46627f;
                                            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
                                        }
                                        .hover:hover span {
                                            opacity: 0;
                                            z-index: -3;
                                        }
                                        .hover:hover:before {
                                            opacity: 0.5;
                                            transform: translateY(-100%);
                                        }
                                        .hover:hover:after {
                                            opacity: 0.5;
                                            transform: translateY(100%);
                                        }
                                        .hover span {
                                            position: absolute;
                                            top: 0;
                                            left: 0;
                                            display: flex;
                                            align-items: center;
                                            justify-content: center;
                                            width: 100%;
                                            height: 100%;
                                            color: whitesmoke;
                                            font-family: 'Fira Mono', monospace;
                                            font-size: 24px;
                                            font-weight: 700;
                                            opacity: 1;
                                            transition: opacity 0.25s;
                                            z-index: 2;
                                        }
                                        .hover .social-link {
                                            position: relative;
                                            display: flex;
                                            align-items: center;
                                            justify-content: center;
                                            width: 25%;
                                            height: 100%;
                                            color: whitesmoke;
                                            font-size: 24px;
                                            text-decoration: none;
                                            transition: 0.25s;
                                        }
                                        .hover .social-link i {
                                            text-shadow: 1px 1px rgba(70, 98, 127, 0.7);
                                            transform: scale(1);
                                        }
                                        .hover .social-link:hover {
                                            background-color: rgba(245, 245, 245, 0.1);
                                        }
                                        .hover .social-link:hover i {
                                            animation: bounce 0.4s linear;
                                        }
                                        @keyframes bounce {
                                            40% {
                                                transform: scale(1.4);
                                            }
                                            60% {
                                                transform: scale(0.8);
                                            }
                                            80% {
                                                transform: scale(1.2);
                                            }
                                            100% {
                                                transform: scale(1);
                                            }
                                        }

                                    </style>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    for (var i = 0; i < 20; i++) {
        ch="ph"+i;
        new Chart(document.getElementById(ch), {
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
                    borderColor: "#0080ff",
                    fill: false
                },
                ]
            },

            options: {
                title: {
                    display: false,
                },
                legend: {
                    display: false,
                },
                scales: {
                    xAxes: [{
                        display: false,
                        scaleLabel: {
                            display: false,
                        }
                    }],
                    yAxes: [{
                        display: false,
                        scaleLabel: {
                            display: false,
                        }
                    }]
                }
            }
        });

    }



</script>
{{--//ph--}}
<script>
    for (var a = 0; a < 20; a++) {
        chlvl = "lvl1"+a;
        new Chart(document.getElementById(chlvl), {

            type: 'line',
            data: {
                labels: [
                    @foreach($show_devices->slice(count($show_devices)-15, count($show_devices)) as $showdevice1)
                    <?php $aff = substr($showdevice1->Time_S, 14, 2);  ?>
                    <?php $aff1 = substr($showdevice1->Time_S, 11, 2);  ?>

                    <?php echo $aff1 . '.' . $aff;?>,
                    @endforeach
                ],
                datasets: [{
                    data: [
                        @foreach($show_devices->slice(count($show_devices)-15, count($show_devices)) as $showdevice)
                        {{$showdevice->Flotteur1}},
                        @endforeach
                    ],
                    borderColor: "#0080ff",
                    fill: false
                },
                ]
            },
            options: {
                title: {
                    display: false,
                },
                legend: {
                    display: false,
                },
                scales: {
                    xAxes: [{
                        display: false,
                        scaleLabel: {
                            display: false,
                        }
                    }],
                    yAxes: [{
                        display: false,
                        scaleLabel: {
                            display: false,
                        }
                    }]
                }
            }

        });
    }
</script>
{{--//flotteur1--}}
<script>
    for (var c = 0; c < 20; c++) {
        chtempwater="tempwater"+c;
        new Chart(document.getElementById(chtempwater), {
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
                    borderColor: "#0080ff",
                    fill: false
                },
                ]
            },
            options: {
                title: {
                    display: false,
                },
                legend: {
                    display: false,
                },
                scales: {
                    xAxes: [{
                        display: false,
                        scaleLabel: {
                            display: false,
                        }
                    }],
                    yAxes: [{
                        display: false,
                        scaleLabel: {
                            display: false,
                        }
                    }]
                }
            }
        });}
</script>
{{--//tempwater--}}
<script>
    for (var g = 0; g < 20; g++) {
        chppm="ppm"+g;
        new Chart(document.getElementById(chppm), {
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
                    borderColor: "#0080ff",
                    fill: false
                },
                ]
            },
            options: {
                title: {
                    display: false,
                },
                legend: {
                    display: false,
                },
                scales: {
                    xAxes: [{
                        display: false,
                        scaleLabel: {
                            display: false,
                        }
                    }],
                    yAxes: [{
                        display: false,
                        scaleLabel: {
                            display: false,
                        }
                    }]
                }
            }
        });}
</script>
{{--//ppm--}}
<script>
    for (var b = 0; b < 20; b++) {
        chtempair="tempair"+b;
        new Chart(document.getElementById(chtempair), {
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
                    borderColor: "#0080ff",
                    fill: false
                },
                ]
            },
            options: {
                title: {
                    display: false,
                },
                legend: {
                    display: false,
                },
                scales: {
                    xAxes: [{
                        display: false,
                        scaleLabel: {
                            display: false,
                        }
                    }],
                    yAxes: [{
                        display: false,
                        scaleLabel: {
                            display: false,
                        }
                    }]
                }
            }
        });}
</script>
{{--//tempair--}}
<script>
    for (var d = 0; d < 20; d++) {
        chlvl2="lvl2"+d;
        new Chart(document.getElementById(chlvl2), {
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
                        {{$showdevice->Flotteur2    }},
                        @endforeach
                    ],
                    borderColor: "#0080ff",
                    fill: false
                },
                ]
            },
            options: {
                title: {
                    display: false,
                },
                legend: {
                    display: false,
                },
                scales: {
                    xAxes: [{
                        display: false,
                        scaleLabel: {
                            display: false,
                        }
                    }],
                    yAxes: [{
                        display: false,
                        scaleLabel: {
                            display: false,
                        }
                    }]
                }
            }
        });}
</script>
{{--//flotteur2--}}
<script>
    for (var k = 0; k < 20; k++) {
        chorp="orp"+k;
        new Chart(document.getElementById(chorp), {
            type: 'line',
            data: {
                labels: [
                    @foreach($show_devices->slice(count($show_devices)-15, count($show_devices)) as $showdevice1)
                    <?php $aff = substr($showdevice1->Time_S, 14, 2);  ?>
                    <?php $aff1 = substr($showdevice1->Time_S, 11, 2);  ?>

                    <?php echo $aff1 . '.' . $aff;?>,
                    @endforeach
                ],
                datasets: [{
                    data: [
                        @foreach($show_devices->slice(count($show_devices)-15, count($show_devices)) as $showdevice)
                        {{$showdevice->ORP}},
                        @endforeach
                    ],
                    borderColor: "#0080ff",
                    fill: false
                },
                ]
            },
            options: {
                title: {
                    display: false,
                },
                legend: {
                    display: false,
                },
                scales: {
                    xAxes: [{
                        display: false,
                        scaleLabel: {
                            display: false,
                        }
                    }],
                    yAxes: [{
                        display: false,
                        scaleLabel: {
                            display: false,
                        }
                    }]
                }
            }
        });
    }
</script>
{{--//orp--}}
<script>
    for (var e = 0; e < 20; e++) {
        chammonium="ammonium"+e;
        new Chart(document.getElementById(chammonium), {
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
                        {{$showdevice->ammonuim}},
                        @endforeach
                    ],
                    borderColor: "#0080ff",
                    fill: false
                },
                ]
            },
            options: {
                title: {
                    display: false,
                },
                legend: {
                    display: false,
                },
                scales: {
                    xAxes: [{
                        display: false,
                        scaleLabel: {
                            display: false,
                        }
                    }],
                    yAxes: [{
                        display: false,
                        scaleLabel: {
                            display: false,
                        }
                    }]
                }
            }
        });}
</script>
{{--//ammon--}}
</body>
</html>
