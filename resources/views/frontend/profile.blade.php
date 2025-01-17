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
                                    
                                    <li><a class="menu-item" href="{{ route('contact') }}">İletişim</a>
                                        
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
									<h1>My Profile</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->

            <section id="section-settings" class="bg-gray-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 mb30">
                            <div class="card p-4 rounded-5">
                                <div class="profile_avatar">
                                    <div class="profile_img">
                                        <img src="images/profile/1.jpg" alt="">
                                    </div>
                                    <div class="profile_name">
                                        <h4>
                                            Monica Lucas                                                
                                            <span class="profile_username text-gray">monica@rentaly.com</span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="spacer-20"></div>
                                <ul class="menu-col">
                                    <li><a href="account-dashboard.html"><i class="fa fa-home"></i>Dashboard</a></li>
                                    <li><a href="account-profile.html" class="active"><i class="fa fa-user"></i>My Profile</a></li>
                                    <li><a href="account-booking.html"><i class="fa fa-calendar"></i>My Orders</a></li>
                                    <li><a href="account-favorite.html"><i class="fa fa-car"></i>My Favorite Cars</a></li>
                                    <li><a href="login.html"><i class="fa fa-sign-out"></i>Sign Out</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            <div class="card p-4  rounded-5">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form id="form-create-item" class="form-border" method="post" action="email.php">
                                        <div class="de_tab tab_simple">
                                        
                                            <ul class="de_nav">
                                                <li class="active"><span>Profile</span></li>
                                                <li><span>Notifications</span></li>
                                            </ul>
                                            
                                            <div class="de_tab_content">                            
                                                <div class="tab-1">
                                                    <div class="row">
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Username</h5>
                                                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter username" />
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Email Address</h5>
                                                            <input type="text" name="email_address" id="email_address" class="form-control" placeholder="Enter email" />
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>New Password</h5>
                                                            <input type="Password" name="user_password" id="user_password" class="form-control" placeholder="********" />
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Re-enter Password</h5>
                                                            <input type="Password" name="user_password_re-enter" id="user_password_re-enter" class="form-control" placeholder="********" />
                                                        </div>
                                                        <div class="col-md-6 mb20">
                                                            <h5>Language</h5>
                                                            <p class="p-info">Select your prefered language.</p>
                                                            <div id="select_lang" class="dropdown fullwidth">
                                                                <a href="#" class="btn-selector">English</a>
                                                                <ul>
                                                                    <li class="active"><span>English</span></li>
                                                                    <li><span>France</span></li>
                                                                    <li><span>German</span></li>
                                                                    <li><span>Japan</span></li>
                                                                    <li><span>Italy</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb20">
                                                            <h5>Hour Format</h5>
                                                            <p class="p-info">Select your prefered language.</p>
                                                            <div id="select_hour_format" class="dropdown fullwidth">
                                                                <a href="#" class="btn-selector">24-hour</a>
                                                                <ul>
                                                                    <li class="active"><span>24-hour</span></li>
                                                                    <li><span>12-hour</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>                               
                                                    </div>
                                                </div>

                                                <div class="tab-2">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-sm-20">
                                                            <div class="switch-with-title s2">
                                                                <h5>Discount Notifications</h5>
                                                                <div class="de-switch">
                                                                  <input type="checkbox" id="notif-item-sold" class="checkbox">
                                                                  <label for="notif-item-sold"></label>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <p class="p-info">You'll get notification while new discount available.</p>
                                                            </div>

                                                            <div class="spacer-20"></div>

                                                            <div class="switch-with-title s2">
                                                                <h5>New Product Notification</h5>
                                                                <div class="de-switch">
                                                                  <input type="checkbox" id="notif-bid-activity" class="checkbox">
                                                                  <label for="notif-bid-activity"></label>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <p class="p-info">You'll get notification while new product available.</p>
                                                            </div>

                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="switch-with-title s2">
                                                                <h5>Daily Reports</h5>
                                                                <div class="de-switch">
                                                                  <input type="checkbox" id="notif-auction-expiration" class="checkbox">
                                                                  <label for="notif-auction-expiration"></label>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <p class="p-info">We will send you a report everyday.</p>
                                                            </div>

                                                            <div class="spacer-20"></div>

                                                            <div class="switch-with-title s2">
                                                                <h5>Monthly Reports</h5>
                                                                <div class="de-switch">
                                                                  <input type="checkbox" id="notif-outbid" class="checkbox">
                                                                  <label for="notif-outbid"></label>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <p class="p-info">We will send you a report each month.</p>
                                                            </div>

                                                        </div>

                                                        <div class="spacer-20"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <input type="button" id="submit" class="btn-main" value="Update profile">
                                        </form>
                                    </div>
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