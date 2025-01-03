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
                        

                        <div class="col-lg-12">
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