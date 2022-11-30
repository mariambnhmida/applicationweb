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
                <li class="nav-item dropdown-lg">
                    <div class="dropdown-menu dropdown-menu-right">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                You have 12 new messages
                                <span class="badge badge-primary">12</span>
                            </li>
                            <li class="list-group-item">
                                <a href="">
                                    <div class="media">
                                        <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                                        <div class="media-body">
                                            <h6 class="mt-0 msg-title">Jhon Deo</h6>
                                            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                            <small>Today, 4:10 PM</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="">
                                    <div class="media">
                                        <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                                        <div class="media-body">
                                            <h6 class="mt-0 msg-title">Sara Jen</h6>
                                            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                            <small>Yesterday, 8:30 AM</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="">
                                    <div class="media">
                                        <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                                        <div class="media-body">
                                            <h6 class="mt-0 msg-title">Dannish Josh</h6>
                                            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                            <small>5/11/2018, 2:50 PM</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="">
                                    <div class="media">
                                        <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                                        <div class="media-body">
                                            <h6 class="mt-0 msg-title">Katrina Mccoy</h6>
                                            <p class="msg-info">Lorem ipsum dolor sit amet.</p>
                                            <small>1/11/2018, 2:50 PM</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item text-center"><a href="">See All Messages</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown-lg">
                    <div class="dropdown-menu dropdown-menu-right">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                You have 14 Notifications
                                <span class="badge badge-info">14</span>
                            </li>
                            <li class="list-group-item">
                                <a href="">
                                    <div class="media">
                                        <i class="zmdi zmdi-accounts fa-2x mr-3 text-info"></i>
                                        <div class="media-body">
                                            <h6 class="mt-0 msg-title">New Registered Users</h6>
                                            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="">
                                    <div class="media">
                                        <i class="zmdi zmdi-coffee fa-2x mr-3 text-warning"></i>
                                        <div class="media-body">
                                            <h6 class="mt-0 msg-title">New Received Orders</h6>
                                            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="">
                                    <div class="media">
                                        <i class="zmdi zmdi-notifications-active fa-2x mr-3 text-danger"></i>
                                        <div class="media-body">
                                            <h6 class="mt-0 msg-title">New Updates</h6>
                                            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item text-center"><a href="">See All Notifications</a></li>
                        </ul>
                    </div>
                </li>
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

                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="page-title">Create User</h4>
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
                            <form action ="{{route('handelCreateUser')}}" method="post">
                                {{csrf_field()}}
                                <br>
                                <div class="form-group">
                                    <label for="exampleEmail11" class="">Email *</label>
                                    <input name="email" id="exampleEmail11" placeholder="Email" type="email" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="examplePassword11" class="">Password *</label>
                                    <input name="password" id="txtPassword" placeholder="Password " type="password" class="form-control" required>

                                <div class="form-group">
                                    <label for="examplePassword11" class="">Confirm Password *</label>
                                    <input name="password_confirmation" id="txtConfirmPassword" placeholder="Check your password "type="password" class="form-control"required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleEmail11" class="">First Name *</label>
                                    <input name="nom" id="exampleEmail11" placeholder="First Name" type="nom" class="form-control"required>
                                </div>


                                <div class="form-group">
                                    <label for="examplePassword11" class="">Last Name *</label>
                                    <input name="prenom" id="examplePassword11" placeholder="Last Name" type="prenom" class="form-control"required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleCity" class="">Adress</label>
                                    <input name="adresse" id="exampleCity" placeholder="adresse" type="adresse" class="form-control"required>
                                    <div id="adresse_error" class="val_error">
                                    </div>
                                </div>

                                <label for="examplePassword11" class="">Country</label>
                                <div id="pays_error" class="val_error">
                                    <select name="pays" id="pays" class="form-control " >
                                        <option value="AD">AD - Andorra (+376)</option>
                                        <option value="AE">AE - United Arab Emirates (+971)</option>
                                        <option value="AF">AF - Afghanistan (+93)</option>
                                        <option value="AG">AG - Antigua And Barbuda (+1268)</option>
                                        <option value="AI">AI - Anguilla (+1264)</option>
                                        <option value="AL">AL - Albania (+355)</option>
                                        <option value="AM">AM - Armenia (+374)</option>
                                        <option value="AN">AN - Netherlands Antilles (+599)</option>
                                        <option value="AO">AO - Angola (+244)</option>
                                        <option value="AQ">AQ - Antarctica (+672)</option>
                                        <option value="AR">AR - Argentina (+54)</option>
                                        <option value="AS">AS - American Samoa (+1684)</option>
                                        <option value="AT">AT - Austria (+43)</option>
                                        <option value="AU">AU - Australia (+61)</option>
                                        <option value="AW">AW - Aruba (+297)</option>
                                        <option value="AZ">AZ - Azerbaijan (+994)</option>
                                        <option value="BA">BA - Bosnia And Herzegovina (+387)</option>
                                        <option value="BB">BB - Barbados (+1246)</option>
                                        <option value="BD">BD - Bangladesh (+880)</option>
                                        <option value="BE">BE - Belgium (+32)</option>
                                        <option value="BF">BF - Burkina Faso (+226)</option>
                                        <option value="BG">BG - Bulgaria (+359)</option>
                                        <option value="BH">BH - Bahrain (+973)</option>
                                        <option value="BI">BI - Burundi (+257)</option>
                                        <option value="BJ">BJ - Benin (+229)</option>
                                        <option value="BL">BL - Saint Barthelemy (+590)</option>
                                        <option value="BM">BM - Bermuda (+1441)</option>
                                        <option value="BN">BN - Brunei Darussalam (+673)</option>
                                        <option value="BO">BO - Bolivia (+591)</option>
                                        <option value="BR">BR - Brazil (+55)</option>
                                        <option value="BS">BS - Bahamas (+1242)</option>
                                        <option value="BT">BT - Bhutan (+975)</option>
                                        <option value="BW">BW - Botswana (+267)</option>
                                        <option value="BY">BY - Belarus (+375)</option>
                                        <option value="BZ">BZ - Belize (+501)</option>
                                        <option value="CA">CA - Canada (+1)</option>
                                        <option value="CC">CC - Cocos (keeling) Islands (+61)</option>
                                        <option value="CD">CD - Congo, The Democratic Republic Of The (+243)</option>
                                        <option value="CF">CF - Central African Republic (+236)</option>
                                        <option value="CG">CG - Congo (+242)</option>
                                        <option value="CH">CH - Switzerland (+41)</option>
                                        <option value="CI">CI - Cote D Ivoire (+225)</option>
                                        <option value="CK">CK - Cook Islands (+682)</option>
                                        <option value="CL">CL - Chile (+56)</option>
                                        <option value="CM">CM - Cameroon (+237)</option>
                                        <option value="CN">CN - China (+86)</option>
                                        <option value="CO">CO - Colombia (+57)</option>
                                        <option value="CR">CR - Costa Rica (+506)</option>
                                        <option value="CU">CU - Cuba (+53)</option>
                                        <option value="CV">CV - Cape Verde (+238)</option>
                                        <option value="CX">CX - Christmas Island (+61)</option>
                                        <option value="CY">CY - Cyprus (+357)</option>
                                        <option value="CZ">CZ - Czech Republic (+420)</option>
                                        <option value="DE">DE - Germany (+49)</option>
                                        <option value="DJ">DJ - Djibouti (+253)</option>
                                        <option value="DK">DK - Denmark (+45)</option>
                                        <option value="DM">DM - Dominica (+1767)</option>
                                        <option value="DO">DO - Dominican Republic (+1809)</option>
                                        <option value="DZ">DZ - Algeria (+213)</option>
                                        <option value="EC">EC - Ecuador (+593)</option>
                                        <option value="EE">EE - Estonia (+372)</option>
                                        <option value="EG">EG - Egypt (+20)</option>
                                        <option value="ER">ER - Eritrea (+291)</option>
                                        <option value="ES">ES - Spain (+34)</option>
                                        <option value="ET">ET - Ethiopia (+251)</option>
                                        <option value="FI">FI - Finland (+358)</option>
                                        <option value="FJ">FJ - Fiji (+679)</option>
                                        <option value="FK">FK - Falkland Islands (malvinas) (+500)</option>
                                        <option value="FM">FM - Micronesia, Federated States Of (+691)</option>
                                        <option value="FO">FO - Faroe Islands (+298)</option>
                                        <option value="FR">FR - France (+33)</option>
                                        <option value="GA">GA - Gabon (+241)</option>
                                        <option value="GB">GB - United Kingdom (+44)</option>
                                        <option value="GD">GD - Grenada (+1473)</option>
                                        <option value="GE">GE - Georgia (+995)</option>
                                        <option value="GH">GH - Ghana (+233)</option>
                                        <option value="GI">GI - Gibraltar (+350)</option>
                                        <option value="GL">GL - Greenland (+299)</option>
                                        <option value="GM">GM - Gambia (+220)</option>
                                        <option value="GN">GN - Guinea (+224)</option>
                                        <option value="GQ">GQ - Equatorial Guinea (+240)</option>
                                        <option value="GR">GR - Greece (+30)</option>
                                        <option value="GT">GT - Guatemala (+502)</option>
                                        <option value="GU">GU - Guam (+1671)</option>
                                        <option value="GW">GW - Guinea-bissau (+245)</option>
                                        <option value="GY">GY - Guyana (+592)</option>
                                        <option value="HK">HK - Hong Kong (+852)</option>
                                        <option value="HN">HN - Honduras (+504)</option>
                                        <option value="HR">HR - Croatia (+385)</option>
                                        <option value="HT">HT - Haiti (+509)</option>
                                        <option value="HU">HU - Hungary (+36)</option>
                                        <option value="ID">ID - Indonesia (+62)</option>
                                        <option value="IE">IE - Ireland (+353)</option>
                                        <option value="IL">IL - Israel (+972)</option>
                                        <option value="IM">IM - Isle Of Man (+44)</option>
                                        <option value="IN">IN - India (+91)</option>
                                        <option value="IQ">IQ - Iraq (+964)</option>
                                        <option value="IR">IR - Iran, Islamic Republic Of (+98)</option>
                                        <option value="IS">IS - Iceland (+354)</option>
                                        <option value="IT">IT - Italy (+39)</option>
                                        <option value="JM">JM - Jamaica (+1876)</option>
                                        <option value="JO">JO - Jordan (+962)</option>
                                        <option value="JP">JP - Japan (+81)</option>
                                        <option value="KE">KE - Kenya (+254)</option>
                                        <option value="KG">KG - Kyrgyzstan (+996)</option>
                                        <option value="KH">KH - Cambodia (+855)</option>
                                        <option value="KI">KI - Kiribati (+686)</option>
                                        <option value="KM">KM - Comoros (+269)</option>
                                        <option value="KN">KN - Saint Kitts And Nevis (+1869)</option>
                                        <option value="KP">KP - Korea Democratic Peoples Republic Of (+850)</option>
                                        <option value="KR">KR - Korea Republic Of (+82)</option>
                                        <option value="KW">KW - Kuwait (+965)</option>
                                        <option value="KY">KY - Cayman Islands (+1345)</option>
                                        <option value="KZ">KZ - Kazakstan (+7)</option>
                                        <option value="LA">LA - Lao Peoples Democratic Republic (+856)</option>
                                        <option value="LB">LB - Lebanon (+961)</option>
                                        <option value="LC">LC - Saint Lucia (+1758)</option>
                                        <option value="LI">LI - Liechtenstein (+423)</option>
                                        <option value="LK">LK - Sri Lanka (+94)</option>
                                        <option value="LR">LR - Liberia (+231)</option>
                                        <option value="LS">LS - Lesotho (+266)</option>
                                        <option value="LT">LT - Lithuania (+370)</option>
                                        <option value="LU">LU - Luxembourg (+352)</option>
                                        <option value="LV">LV - Latvia (+371)</option>
                                        <option value="LY">LY - Libyan Arab Jamahiriya (+218)</option>
                                        <option value="MA">MA - Morocco (+212)</option>
                                        <option value="MC">MC - Monaco (+377)</option>
                                        <option value="MD">MD - Moldova, Republic Of (+373)</option>
                                        <option value="ME">ME - Montenegro (+382)</option>
                                        <option value="MF">MF - Saint Martin (+1599)</option>
                                        <option value="MG">MG - Madagascar (+261)</option>
                                        <option value="MH">MH - Marshall Islands (+692)</option>
                                        <option value="MK">MK - Macedonia, The Former Yugoslav Republic Of (+389)</option>
                                        <option value="ML">ML - Mali (+223)</option>
                                        <option value="MM">MM - Myanmar (+95)</option>
                                        <option value="MN">MN - Mongolia (+976)</option>
                                        <option value="MO">MO - Macau (+853)</option>
                                        <option value="MP">MP - Northern Mariana Islands (+1670)</option>
                                        <option value="MR">MR - Mauritania (+222)</option>
                                        <option value="MS">MS - Montserrat (+1664)</option>
                                        <option value="MT">MT - Malta (+356)</option>
                                        <option value="MU">MU - Mauritius (+230)</option>
                                        <option value="MV">MV - Maldives (+960)</option>
                                        <option value="MW">MW - Malawi (+265)</option>
                                        <option value="MX">MX - Mexico (+52)</option>
                                        <option value="MY">MY - Malaysia (+60)</option>
                                        <option value="MZ">MZ - Mozambique (+258)</option>
                                        <option value="NA">NA - Namibia (+264)</option>
                                        <option value="NC">NC - New Caledonia (+687)</option>
                                        <option value="NE">NE - Niger (+227)</option>
                                        <option value="NG">NG - Nigeria (+234)</option>
                                        <option value="NI">NI - Nicaragua (+505)</option>
                                        <option value="NL">NL - Netherlands (+31)</option>
                                        <option value="NO">NO - Norway (+47)</option>
                                        <option value="NP">NP - Nepal (+977)</option>
                                        <option value="NR">NR - Nauru (+674)</option>
                                        <option value="NU">NU - Niue (+683)</option>
                                        <option value="NZ">NZ - New Zealand (+64)</option>
                                        <option value="OM">OM - Oman (+968)</option>
                                        <option value="PA">PA - Panama (+507)</option>
                                        <option value="PE">PE - Peru (+51)</option>
                                        <option value="PF">PF - French Polynesia (+689)</option>
                                        <option value="PG">PG - Papua New Guinea (+675)</option>
                                        <option value="PH">PH - Philippines (+63)</option>
                                        <option value="PK">PK - Pakistan (+92)</option>
                                        <option value="PL">PL - Poland (+48)</option>
                                        <option value="PM">PM - Saint Pierre And Miquelon (+508)</option>
                                        <option value="PN">PN - Pitcairn (+870)</option>
                                        <option value="PR">PR - Puerto Rico (+1)</option>
                                        <option value="PT">PT - Portugal (+351)</option>
                                        <option value="PW">PW - Palau (+680)</option>
                                        <option value="PY">PY - Paraguay (+595)</option>
                                        <option value="QA">QA - Qatar (+974)</option>
                                        <option value="RO">RO - Romania (+40)</option>
                                        <option value="RS">RS - Serbia (+381)</option>
                                        <option value="RU">RU - Russian Federation (+7)</option>
                                        <option value="RW">RW - Rwanda (+250)</option>
                                        <option value="SA">SA - Saudi Arabia (+966)</option>
                                        <option value="SB">SB - Solomon Islands (+677)</option>
                                        <option value="SC">SC - Seychelles (+248)</option>
                                        <option value="SD">SD - Sudan (+249)</option>
                                        <option value="SE">SE - Sweden (+46)</option>
                                        <option value="SG">SG - Singapore (+65)</option>
                                        <option value="SH">SH - Saint Helena (+290)</option>
                                        <option value="SI">SI - Slovenia (+386)</option>
                                        <option value="SK">SK - Slovakia (+421)</option>
                                        <option value="SL">SL - Sierra Leone (+232)</option>
                                        <option value="SM">SM - San Marino (+378)</option>
                                        <option value="SN">SN - Senegal (+221)</option>
                                        <option value="SO">SO - Somalia (+252)</option>
                                        <option value="SR">SR - Suriname (+597)</option>
                                        <option value="ST">ST - Sao Tome And Principe (+239)</option>
                                        <option value="SV">SV - El Salvador (+503)</option>
                                        <option value="SY">SY - Syrian Arab Republic (+963)</option>
                                        <option value="SZ">SZ - Swaziland (+268)</option>
                                        <option value="TC">TC - Turks And Caicos Islands (+1649)</option>
                                        <option value="TD">TD - Chad (+235)</option>
                                        <option value="TG">TG - Togo (+228)</option>
                                        <option value="TH">TH - Thailand (+66)</option>
                                        <option value="TJ">TJ - Tajikistan (+992)</option>
                                        <option value="TK">TK - Tokelau (+690)</option>
                                        <option value="TL">TL - Timor-leste (+670)</option>
                                        <option value="TM">TM - Turkmenistan (+993)</option>
                                        <option value="TN">TN - Tunisia (+216)</option>
                                        <option value="TO">TO - Tonga (+676)</option>
                                        <option value="TR">TR - Turkey (+90)</option>
                                        <option value="TT">TT - Trinidad And Tobago (+1868)</option>
                                        <option value="TV">TV - Tuvalu (+688)</option>
                                        <option value="TW">TW - Taiwan, Province Of China (+886)</option>
                                        <option value="TZ">TZ - Tanzania, United Republic Of (+255)</option>
                                        <option value="UA">UA - Ukraine (+380)</option>
                                        <option value="UG">UG - Uganda (+256)</option>
                                        <option value="US">US - United States (+1)</option>
                                        <option value="UY">UY - Uruguay (+598)</option>
                                        <option value="UZ">UZ - Uzbekistan (+998)</option>
                                        <option value="VA">VA - Holy See (vatican City State) (+39)</option>
                                        <option value="VC">VC - Saint Vincent And The Grenadines (+1784)</option>
                                        <option value="VE">VE - Venezuela (+58)</option>
                                        <option value="VG">VG - Virgin Islands, British (+1284)</option>
                                        <option value="VI">VI - Virgin Islands, U.s. (+1340)</option>
                                        <option value="VN">VN - Viet Nam (+84)</option>
                                        <option value="VU">VU - Vanuatu (+678)</option>
                                        <option value="WF">WF - Wallis And Futuna (+681)</option>
                                        <option value="WS">WS - Samoa (+685)</option>
                                        <option value="XK">XK - Kosovo (+381)</option>
                                        <option value="YE">YE - Yemen (+967)</option>
                                        <option value="YT">YT - Mayotte (+262)</option>
                                        <option value="ZA">ZA - South Africa (+27)</option>
                                        <option value="ZM">ZM - Zambia (+260)</option>
                                        <option value="ZW">ZW - Zimbabwe (+263)</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="examplePassword11" class="">Phone</label>
                                    <input name="tel" id="exampleCity" placeholder="Enter your Phone" type="tel" class="form-control"required>
                                    <div id="tel_error" class="val_error">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="examplePassword11" class="">Site</label>
                                    <select name="site_id"  class="form-control ">
                                        @foreach($sites as $site)
                                            <option value="{{$site->id}}">{{$site->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="w3-container">
                                    <a href="{{route('showSite')}}" ><button class="w3-button w3-small w3-blue w3-card-4">Add Site +</button></a>
                                </div>

                                <div class="form-group text-center">
                                    <div class="form-footer">
                                        <a href="{{route('showlistuser')}}">
                                            <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Create</button>
                                        </a>  </div>
                                </div>

                                </div></form>
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
    <a href="" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
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

<script type="text/javascript" src="{{asset('assets')}}/scripts/main.js"></script>

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
<script type="text/javascript" src="./assets/scripts/main.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#Create").click(function () {
            var password = $("#txtPassword").val();
            var password2 = $("#txtConfirmPassword").val();
            if (password != password2) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
    </script>
<script type="text/javascript" src="./assets/scripts/main.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#Create").click(function () {
            var password = $("#txtPassword").val();
            var email = $("#exampleEmail11").val();
            if (password == email) {
                alert("Your email cannot be your password.Please check your password!");
                return false;
            }
            return true;
        });
    });

</script>


