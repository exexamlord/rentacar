<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Rentaly - Multipurpose Vehicle Car Rental Website Template</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/coloring.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="wrapper">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
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
                <img src="images/background/14.jpg" class="jarallax-img" alt="">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
									<h1>Kullanıcı Paneli</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->

            <section id="section-cars" class="bg-gray-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 mb30">
                            <div class="card p-4 rounded-5">
                                <div class="profile_avatar">
                                    <div class="profile_img">
                                        <img src="images/profile/2.png" alt="">
                                    </div>
                                    <div class="profile_name">
                                        <h4>
                                            {{$user->name}}                                               
                                            <span class="profile_username text-gray">{{$user->mail}}  </span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="spacer-20"></div>
                                <ul class="menu-col">
                                    <li><a href="" class="active"><i class="fa fa-home"></i>Kullanıcı Paneli</a></li>
                                    <li><a href="{{ route('profile') }}"><i class="fa fa-user"></i>Profilim</a></li>
                                    <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i>Sign Out
                                    </a>
                                    <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            

                            <div class="card p-4 rounded-5 mb25">
                                <h4>Siparişlerim</h4>

                                <table class="table de-table">
                                  <thead>
                                    <tr>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray">Sipariş No</span></th>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray">Araba İsmi</span></th>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray">Alınacak Lokasyon</span></th>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray">Bırakılacak Lokasyon</span></th>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray">Alınacak Tarih</span></th>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray">Bırakılacak Tarih</span></th>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray">Durum</span></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($rentals as $rental)
                                        <tr>
                                            <td>
                                                
                                                <div class="badge bg-gray-100 text-dark">#{{ $rental->id }}</div>
                                            </td>
                                            <td>
                                                
                                                <span class="bold">{{ $rental->car_id }}</span>
                                            </td>
                                            <td>
                                                
                                                {{ $rental->pickupLocation }}
                                            </td>
                                            <td>
                                                
                                                {{ $rental->dropoffLocation }}
                                            </td>
                                            <td>
                                                
                                                {{ \Carbon\Carbon::parse($rental->start_time)->format('F j, Y') }}
                                            </td>
                                            <td>
                                                
                                                {{ \Carbon\Carbon::parse($rental->end_time)->format('F j, Y') }}
                                            </td>
                                            <td>
                                                <div class="badge rounded-pill bg-{{ $rental->durum == 'Onaylandı' ? 'success' : 'danger' }}">
                                                    {{ $rental->durum }}
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                </table>
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
                            <h5>About Rentaly</h5>
                            <p>Where quality meets affordability. We understand the importance of a smooth and enjoyable journey without the burden of excessive costs. That's why we have meticulously crafted our offerings to provide you with top-notch vehicles at minimum expense.</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>Contact Info</h5>
                            <address class="s1">
                                <span><i class="id-color fa fa-map-marker fa-lg"></i>08 W 36th St, New York, NY 10001</span>
                                <span><i class="id-color fa fa-phone fa-lg"></i>+1 333 9296</span>
                                <span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:contact@example.com">contact@example.com</a></span>
                                <span><i class="id-color fa fa-file-pdf-o fa-lg"></i><a href="#">Download Brochure</a></span>
                            </address>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <h5>Quick Links</h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="widget">
                                    <ul>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Partners</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>Social Network</h5>
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
                                    <a href="index.html">
                                        Copyright 2024 - Rentaly by Designesia
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