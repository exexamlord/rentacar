
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Gölhisar Rent a Car</title>
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


<body>
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
                                                <li><a href="{{ url('dashboard') }}"><i class="fa fa-home"></i>Kulalnıcı Paneli</a></li>
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
									<h1>{{ $posts->carname }}</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->
            
            
            <section id="section-car-details">
                <div class="container">
                <a href="{{ url('/car-list') }}" class="btn-main">Araba Listesine Geri Dön</a>
                <div class="spacer-30"></div> 
                    <div class="row g-5">
                        <div class="col-lg-6">
                            <div id="slider-carousel" class="owl-carousel">
                                <div class="item">
                                    <img src="/{{ $posts->carimage }}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <h3>{{ $posts->carname }}</h3>
                            <p>Araba Açıklaması</p>

                            <div class="spacer-10"></div>

                            <h4>Özellikler</h4>
                            <div class="de-spec">
                                <div class="d-row">
                                    <span class="d-title">Tür</span>
                                    <spam class="d-value">{{ $posts->carbody }}</spam>
                                </div>
                                <div class="d-row">
                                    <span class="d-title">Koltuk Sayısı</span>
                                    <spam class="d-value">{{ $posts->carseats }}</spam>
                                </div>
                                <div class="d-row">
                                    <span class="d-title">Kapı Sayısı</span>
                                    <spam class="d-value">{{ $posts->cardoors }}</spam>
                                </div>

                                <div class="d-row">
                                    <span class="d-title">Bagaj Kapasitesi</span>
                                    <spam class="d-value">{{ $posts->carbagaj }}</spam>
                                </div>
                               
                                <div class="d-row">
                                    <span class="d-title">Vites</span>
                                    <spam class="d-value">{{ $posts->carvites }}</spam>
                                </div>
                                
                                
                            </div>

                            <div class="spacer-single"></div>

                            <h4>Ekstra Özellikler</h4>
                            <ul class="ul-style-2">
                                <li>Bluetooth</li>
                                <li>Multimedia Player</li>
                            </ul>
                        </div>
                        
                        <div class="col-lg-3">
                            <div class="de-price text-center">
                                Günlük Ücret
                                <h3>{{ $posts->carprice }}₺</h3>
                            </div>
                            <div class="spacer-30"></div>
                            <div class="de-box mb25">
                                <form name="contactForm" id='contact_form' method="POST" action="{{ route('rentals.store') }}">
                                @csrf
                                <input type="hidden" name="car_id" value="{{ $posts->carname }}">
                                    <h4>Kiralama Ayrıntıları</h4>

                                    <div class="spacer-20"></div>

                                    <div class="row">
                                        <div class="col-lg-12 mb20">
                                            <h5>Alınacak Lokasyon</h5>
                                            
                                            <select name="pickupLocation" id="pickupLocation" class="form-control">
                                            <option value="" disabled selected>Lütfen Seçiniz</option>
                                            <option value="Göllhisar">Gölhisar</option>
                                            <option value="Antalya">Antalya</option>
                                            
                                            </select>
                                            <div class="jls-address-preview jls-address-preview--hidden">
                                                <div class="jls-address-preview__header">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb20">
                                            <h5>Bırakılacak Lokasyon</h5>
                                            <select name="dropoffLocation" id="dropoffLocation" class="form-control">
                                                <option value="" disabled selected>Lütfen Seçiniz</option>
                                                <option value="Gölhisar">Gölhisar</option>
                                                <option value="Antalya">Antalya</option>
                                            </select>
                                            
                                            
                                            <div class="jls-address-preview jls-address-preview--hidden">
                                                <div class="jls-address-preview__header">
                                                </div>
                                            </div>
                                        </div>

                                            @if(session('user_id'))
                                                @php
                                                    $user = \App\Models\Mainusers::find(session('user_id'));
                                                @endphp
                                                    <input type="hidden" name="username" id="username" value="{{ $user->name }}">
                                                    <input type="hidden" name="user_id" id="user_id" value="{{ $user->id }}">
                                                    <input type="hidden" name="durum" id="durum" value="Onaylandı">
                                            @else
                                                <script>
                                                    window.location.href = "{{ route('login') }}";
                                                </script>
                                            @endif

                                        <div class="col-lg-12 mb20">
                                            <h5>Alınacak Tarih Saat</h5>
                                            <div class="date-time-field">
                                                <input type="date" id="pickup_date" name="pickup_date" value="pickup_date">
                                                <select name="pickup_time" id="pickup-time" value="pickup_time">
                                                    <option selected disabled value="Select time">Saat</option>
                                                    <option value="00:00">00:00</option>
                                                    <option value="00:30">00:30</option>
                                                    <option value="01:00">01:00</option>
                                                    <option value="01:30">01:30</option>
                                                    <option value="02:00">02:00</option>
                                                    <option value="02:30">02:30</option>
                                                    <option value="03:00">03:00</option>
                                                    <option value="03:30">03:30</option>
                                                    <option value="04:00">04:00</option>
                                                    <option value="04:30">04:30</option>
                                                    <option value="05:00">05:00</option>
                                                    <option value="05:30">05:30</option>
                                                    <option value="06:00">06:00</option>
                                                    <option value="06:30">06:30</option>
                                                    <option value="07:00">07:00</option>
                                                    <option value="07:30">07:30</option>
                                                    <option value="08:00">08:00</option>
                                                    <option value="08:30">08:30</option>
                                                    <option value="09:00">09:00</option>
                                                    <option value="09:30">09:30</option>
                                                    <option value="10:00">10:00</option>
                                                    <option value="10:30">10:30</option>
                                                    <option value="11:00">11:00</option>
                                                    <option value="11:30">11:30</option>
                                                    <option value="12:00">12:00</option>
                                                    <option value="12:30">12:30</option>
                                                    <option value="13:00">13:00</option>
                                                    <option value="13:30">13:30</option>
                                                    <option value="14:00">14:00</option>
                                                    <option value="14:30">14:30</option>
                                                    <option value="15:00">15:00</option>
                                                    <option value="15:30">15:30</option>
                                                    <option value="16:00">16:00</option>
                                                    <option value="16:30">16:30</option>
                                                    <option value="17:00">17:00</option>
                                                    <option value="17:30">17:30</option>
                                                    <option value="18:00">18:00</option>
                                                    <option value="18:30">18:30</option>
                                                    <option value="19:00">19:00</option>
                                                    <option value="19:30">19:30</option>
                                                    <option value="20:00">20:00</option>
                                                    <option value="20:30">20:30</option>
                                                    <option value="21:00">21:00</option>
                                                    <option value="21:30">21:30</option>
                                                    <option value="22:00">22:00</option>
                                                    <option value="22:30">22:30</option>
                                                    <option value="23:00">23:00</option>
                                                    <option value="23:30">23:30</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb20">
                                            <h5>Teslim Edilecek Tarih Saat</h5>
                                            <div class="date-time-field">
                                                <input type="date" id="dropoff_date" name="dropoff_date" value="dropoff_date">
                                                <select name="dropoff_time" id="dropoff_time" value="dropoff_time">
                                                    <option selected disabled value="Select time">Saat</option>
                                                    <option value="00:00">00:00</option>
                                                    <option value="00:30">00:30</option>
                                                    <option value="01:00">01:00</option>
                                                    <option value="01:30">01:30</option>
                                                    <option value="02:00">02:00</option>
                                                    <option value="02:30">02:30</option>
                                                    <option value="03:00">03:00</option>
                                                    <option value="03:30">03:30</option>
                                                    <option value="04:00">04:00</option>
                                                    <option value="04:30">04:30</option>
                                                    <option value="05:00">05:00</option>
                                                    <option value="05:30">05:30</option>
                                                    <option value="06:00">06:00</option>
                                                    <option value="06:30">06:30</option>
                                                    <option value="07:00">07:00</option>
                                                    <option value="07:30">07:30</option>
                                                    <option value="08:00">08:00</option>
                                                    <option value="08:30">08:30</option>
                                                    <option value="09:00">09:00</option>
                                                    <option value="09:30">09:30</option>
                                                    <option value="10:00">10:00</option>
                                                    <option value="10:30">10:30</option>
                                                    <option value="11:00">11:00</option>
                                                    <option value="11:30">11:30</option>
                                                    <option value="12:00">12:00</option>
                                                    <option value="12:30">12:30</option>
                                                    <option value="13:00">13:00</option>
                                                    <option value="13:30">13:30</option>
                                                    <option value="14:00">14:00</option>
                                                    <option value="14:30">14:30</option>
                                                    <option value="15:00">15:00</option>
                                                    <option value="15:30">15:30</option>
                                                    <option value="16:00">16:00</option>
                                                    <option value="16:30">16:30</option>
                                                    <option value="17:00">17:00</option>
                                                    <option value="17:30">17:30</option>
                                                    <option value="18:00">18:00</option>
                                                    <option value="18:30">18:30</option>
                                                    <option value="19:00">19:00</option>
                                                    <option value="19:30">19:30</option>
                                                    <option value="20:00">20:00</option>
                                                    <option value="20:30">20:30</option>
                                                    <option value="21:00">21:00</option>
                                                    <option value="21:30">21:30</option>
                                                    <option value="22:00">22:00</option>
                                                    <option value="22:30">22:30</option>
                                                    <option value="23:00">23:00</option>
                                                    <option value="23:30">23:30</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <input type='submit' id='send_message' value='Şimdi Kirala' class="btn-main btn-fullwidth">

                                    <div class="clearfix"></div>
                                    
                                </form>
                            </div>

                            <div class="de-box">
                                <h4>Paylaş</h4>
                                <div class="de-color-icons">
                                    <span><i class="fa fa-twitter fa-lg"></i></span>
                                    <span><i class="fa fa-facebook fa-lg"></i></span>
                                    <span><i class="fa fa-reddit fa-lg"></i></span>
                                    <span><i class="fa fa-linkedin fa-lg"></i></span>
                                    <span><i class="fa fa-pinterest fa-lg"></i></span>
                                    <span><i class="fa fa-stumbleupon fa-lg"></i></span>
                                    <span><i class="fa fa-delicious fa-lg"></i></span>
                                    <span><i class="fa fa-envelope fa-lg"></i></span>
                                </div>
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
    <script src="{{ asset('/js/plugins.js') }}"></script>
    <script src="{{ asset('/js/designesia.js') }}"></script>

</body>

</html>

