<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Gölhisar Rnet a Car</title>
    <link rel="icon" href="{{ asset('/images/icon.png') }}" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{ asset('/css/mdb.min.css') }}" rel="stylesheet" type="text/css" id="mdb">
    <link href="{{ asset('/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/coloring.css') }}" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="{{ asset('/css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css">
</head>

<body class="dark-scheme">
    <div id="wrapper">
        
        <!-- page preloader begin -->
        <div id="de-preloader"></div>
        <!-- page preloader close -->

        <!-- header begin -->
        <header class="transparent">            
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="/">
                                            <img class="logo-1" src="/images/logo-light.png" alt="">
                                            <img class="logo-2" src="/images/logo-light.png" alt="">
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <li><a class="menu-item" href="/">Anasayfa</a>
                                    </li>
                                    
                                    <li><a class="menu-item" href="{{ url('/car-list') }}">Arabalar</a>  
                                    </li>
                                    <li><a class="menu-item" href="quick-booking.html">Hızlı Rezervasyon</a>
                                        
                                    </li>
                                    <li><a class="menu-item" href="contact.html">İletişim</a>
                                        
                                    </li>
                                </ul>
                            </div>
                        <!-- üye girişi başlangıc -->

                        <div class="de-flex-col">
                            <div class="menu_side_area">
                                @if(session('user_id'))
                                    @php
                                        $user = \App\Models\Mainusers::find(session('user_id'));
                                    @endphp
                                    <div class="de-login-menu">
                                        <span id="de-click-menu-profile" class="de-menu-profile">
                                            <!-- Statik Profil Fotoğrafı -->
                                            <img src="{{ asset('images/profile/2.png') }}" class="img-fluid" alt="Profil Resmi">
                                        </span>
                                        <div id="de-submenu-profile" class="de-submenu">
                                            <div class="d-name">
                                                <h4>{{ $user->name ?? 'Kullanıcı Adı' }}</h4>
                                                <span class="text-gray">{{ $user->mail ?? 'Kullanıcı E-posta' }}</span>
                                            </div>
                                            <div class="d-line"></div>
                                            <ul class="menu-col">
                                                <li><a href="{{ url('dashboard') }}"><i class="fa fa-home"></i>Kullanıcı Paneli</a></li>
                                                <li><a href="{{ route('profile') }}"><i class="fa fa-user"></i>Profilim</a></li>
                                                <li>
                                                    <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                        <i class="fa fa-sign-out"></i>Çıkış Yap
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @else
                                    <a href="{{ route('login') }}" class="btn-main">Üye Girişi</a>
                                @endif
                                <span id="menu-btn"></span>
                            </div>
                        </div>




                        <!-- üye girişi bitiş -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
            <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top zebra" id="content">
            <div id="top"></div>
            
            <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="/images/background/2.jpg" class="jarallax-img" alt="">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
									<h1>Arabalar</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->

            <section id="section-cars">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="item_filter_group">
                                <h4>Vehicle Type</h4>
                                <div class="de_form">
                                    <div class="de_checkbox">
                                        <input id="vehicle_type_1" name="vehicle_type_1" type="checkbox" value="vehicle_type_1">
                                        <label for="vehicle_type_1">Car</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="vehicle_type_2" name="vehicle_type_2" type="checkbox" value="vehicle_type_2">
                                        <label for="vehicle_type_2">Van</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="vehicle_type_3" name="vehicle_type_3" type="checkbox" value="vehicle_type_3">
                                        <label for="vehicle_type_3">Minibus</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="vehicle_type_4" name="vehicle_type_4" type="checkbox" value="vehicle_type_4">
                                        <label for="vehicle_type_4">Prestige</label>
                                    </div>

                                </div>
                            </div>

                            <div class="item_filter_group">
                                <h4>Car Body Type</h4>
                                <div class="de_form">
                                    <div class="de_checkbox">
                                        <input id="car_body_type_1" name="car_body_type_1" type="checkbox" value="car_body_type_1">
                                        <label for="car_body_type_1">Convertible</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_body_type_2" name="car_body_type_2" type="checkbox" value="car_body_type_2">
                                        <label for="car_body_type_2">Coupe</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_body_type_3" name="car_body_type_3" type="checkbox" value="car_body_type_3">
                                        <label for="car_body_type_3">Exotic Cars</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_body_type_4" name="car_body_type_4" type="checkbox" value="car_body_type_4">
                                        <label for="car_body_type_4">Hatchback</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_body_type_5" name="car_body_type_5" type="checkbox" value="car_body_type_5">
                                        <label for="car_body_type_5">Minivan</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_body_type_6" name="car_body_type_6" type="checkbox" value="car_body_type_6">
                                        <label for="car_body_type_6">Truck</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_body_type_7" name="car_body_type_7" type="checkbox" value="car_body_type_7">
                                        <label for="car_body_type_7">Sedan</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_body_type_8" name="car_body_type_8" type="checkbox" value="car_body_type_8">
                                        <label for="car_body_type_8">Sports Car</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_body_type_9" name="car_body_type_9" type="checkbox" value="car_body_type_9">
                                        <label for="car_body_type_9">Station Wagon</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_body_type_10" name="car_body_type_10" type="checkbox" value="car_body_type_10">
                                        <label for="car_body_type_10">SUV</label>
                                    </div>

                                </div>
                            </div>

                            <div class="item_filter_group">
                                <h4>Car Seats</h4>
                                <div class="de_form">
                                    <div class="de_checkbox">
                                        <input id="car_seat_1" name="car_seat_1" type="checkbox" value="car_seat_1">
                                        <label for="car_seat_1">2 seats</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_seat_2" name="car_seat_2" type="checkbox" value="car_seat_2">
                                        <label for="car_seat_2">4 seats</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_seat_3" name="car_seat_3" type="checkbox" value="car_seat_3">
                                        <label for="car_seat_3">6 seats</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_seat_4" name="car_seat_4" type="checkbox" value="car_seat_4">
                                        <label for="car_seat_4">6+ seats</label>
                                    </div>

                                </div>
                            </div>

                            <div class="item_filter_group">
                                <h4>Car Engine Capacity (cc)</h4>
                                <div class="de_form">
                                    <div class="de_checkbox">
                                        <input id="car_engine_1" name="car_engine_1" type="checkbox" value="car_engine_1">
                                        <label for="car_engine_1">1000 - 2000</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_engine_2" name="car_engine_2" type="checkbox" value="car_engine_2">
                                        <label for="car_engine_2">2000 - 4000</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_engine_3" name="car_engine_3" type="checkbox" value="car_engine_3">
                                        <label for="car_engine_3">4000 - 6000</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_engine_4" name="car_engine_4" type="checkbox" value="car_engine_4">
                                        <label for="car_engine_4">6000+</label>
                                    </div>

                                </div>
                            </div>

                            <div class="item_filter_group">
                                <h4>Price ($)</h4>
                                  <div class="price-input">
                                    <div class="field">
                                      <span>Min</span>
                                      <input type="number" class="input-min" value="0">
                                    </div>
                                    <div class="field">
                                      <span>Max</span>
                                      <input type="number" class="input-max" value="2000">
                                    </div>
                                  </div>
                                  <div class="slider">
                                    <div class="progress"></div>
                                  </div>
                                  <div class="range-input">
                                    <input type="range" class="range-min" min="0" max="2000" value="0" step="1">
                                    <input type="range" class="range-max" min="0" max="2000" value="2000" step="1">
                                  </div>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            <div class="row">

                            @foreach ($posts as $carmain2)
                                <div class="col-lg-12">
                                    <div class="de-item-list mb30">
                                        <div class="d-img">
                                            <img src="{{ $carmain2->carimage }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="d-info">
                                            <div class="d-text">
                                                <h4>{{ $carmain2->carname }}</h4>
                                                <div class="d-atr-group">
                                                    <ul class="d-atr">
                                                        <li><span>Kişi:</span>{{ $carmain2->carseats }}</li>
                                                        <li><span>Bagaj:</span>{{ $carmain2->carbagaj }}</li>
                                                        <li><span>Kapı:</span>{{ $carmain2->cardoors }}</li>
                                                        <li><span>Fuel:</span>Petrol</li>
                                                        <li><span>Araç Türü:</span>{{ $carmain2->carbody }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-price">
                                            Günlük <span>{{ $carmain2->carprice }}₺</span>
                                            <a class="btn-main" href="{{ url('/cars/' . $carmain2->id) }}">Şimdi Kirala</a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            @endforeach

                                

                                

                                

                            </div>
                        </div>
                    </div>
                </div>
            </section>
			
			
        </div>
        <!-- content close -->

        <a href="#" id="back-to-top"></a>
        
        <!-- footer begin -->
        <footer class="text-light">
            <div class="container">
                <div class="row g-custom-x">
                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>Hakkında</h5>
                            <p>Hakkında Açıklama</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>İletişim Bilgileri</h5>
                            <address class="s1">
                                <span><i class="id-color fa fa-map-marker fa-lg"></i>adress</span>
                                <span><i class="id-color fa fa-phone fa-lg"></i>telefon no</span>
                                <span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="#">mail</a></span>
                                <span><i class="id-color fa fa-file-pdf-o fa-lg"></i><a href="#">reklam pdf</a></span>
                            </address>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <h5>Hızlı Linkler</h5>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="widget">
                                    <ul>
                                        <li><a href="/">Anasayfa</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Arabalar</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>Sosyal Medya</h5>
                            <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    <a href="/">
                                        Copyright 2024 - Moonyhar
                                    </a>
                                </div>
                                <ul class="menu-simple">
                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
        
    </div>


    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>

</body>

</html>