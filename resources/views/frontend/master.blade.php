<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>GölhisarRent</title>
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

<body onload="initialize()" class="dark-scheme">
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
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <section id="subheader" class="jarallax text-light">
                <img src="images/background/16.jpg" class="jarallax-img" alt="">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
									<h1>Araba Kirala</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <section id="section-hero" aria-label="section" class="no-top" data-bgcolor="#121212">
                <div class="container">
            <div class="row align-items-center">

                        <div class="col-lg-12 mt-80 sm-mt-0">
                            <div class="spacer-single sm-hide"></div>
                            <div class="padding40 rounded-5 shadow-soft" data-bgcolor="#ffffff">
                                

                                <form name="contactForm" id='booking_form' class="form-s2 row g-4 on-submit-hide" method="post" action="#">

                                    <div class="col-lg-12 d-light">
                                        

                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <h5>Pick Up Location</h5>
                                                <select name='Pick Up Location' id="pick_up_location" class="form-control opt-1-disable" required>
                                                  <option value='New York'>Enter your pickup location</option>
                                                  
                                                  
                                                </select>
                                            </div>

                                            <div class="col-lg-6">
                                                <h5>Destination</h5>
                                                <select name='Destination' id="destination" class="form-control opt-1-disable" required>
                                                  <option value='New York'>Enter your destination</option>
                                                  
                                                  
                                                </select>
                                            </div>

                                            <div class="col-lg-6">
                                                <h5>Pick Up Date & Time</h5>
                                                <div class="date-time-field">
                                                    <input type="text" id="date-picker" name="Pick Up Date" value="">
                                                    <select name="Pick Up Time" id="pickup-time">
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
                                                        
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <h5>Return Date & Time</h5>
                                                <div class="date-time-field">
                                                    <input type="text" id="date-picker-2" name="Return Date" value="">
                                                    <select name="Return Time" id="collection-time">
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
                                                        
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="spacer-single"></div>
                                        <div class="col-lg-12">
                                        <input type='submit' id='send_message' value='Submit' class="btn-main btn-fullwidth">
                                        </div>
                                        
                                    </div>

                                    

                                    
                                </form>

                                
                            </div>
                        </div>
                    </div>
                    </div>
                    </section>

                    <section id="section-hero" aria-label="section" class="no-top" data-bgcolor="#121212">
                <div class="container">
                    <div class="row text-light">
                                <div class="col-lg-12">
                                    <div class="container-timeline">
                                        <ul>
                                            <li>
                                                <h4>Choose a vehicle</h4>
                                                <p>Unlock unparalleled adventures and memorable journeys with our vast fleet of vehicles tailored to suit every need, taste, and destination.</p>
                                            </li>
                                            <li>
                                                <h4>Pick location &amp; date</h4>
                                                <p>Pick your ideal location and date, and let us take you on a journey filled with convenience, flexibility, and unforgettable experiences.</p>
                                            </li>
                                            <li>
                                                <h4>Make a booking</h4>
                                                <p>Secure your reservation with ease, unlocking a world of possibilities and embarking on your next adventure with confidence.</p>
                                            </li>
                                            <li>
                                                <h4>Sit back &amp; relax</h4>
                                                <p>Hassle-free convenience as we take care of every detail, allowing you to unwind and embrace a journey filled comfort.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                </div>
            </section>
            

            <section id="section-cars">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <h2>Arabalarımız</h2>
                            <p>Gölhisarda bulabileceğiniz tek rent a car rakibimiz yok</p>
                            <div class="spacer-20"></div>
                        </div>

                        <div id="items-carousel" class="owl-carousel wow fadeIn">
                        
                        
                        
                            
                            @foreach ($posts as $carmain2)
                            
                            
                            <div class="col-lg-12">
                                <div class="de-item mb30">
                                    <div class="d-img">
                                        <img src="{{ $carmain2->carimage }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="d-info">
                                        <div class="d-text">
                                            <h4>{{ $carmain2->carname }}</h4>
                                            <div class="d-item_like">
                                                <i class="fa fa-heart"></i><span>{{ $carmain2->carstar }}</span>
                                            </div>
                                            <div class="d-atr-group">
                                                <span class="d-atr"><img src="images/icons/1-green.svg" alt="">{{ $carmain2->carseats }}</span>
                                                <span class="d-atr"><img src="images/icons/2-green.svg" alt="">{{ $carmain2->carbagaj }}</span>
                                                <span class="d-atr"><img src="images/icons/3-green.svg" alt="">{{ $carmain2->cardoors }}</span>
                                                <span class="d-atr"><img src="images/icons/4-green.svg" alt="">{{ $carmain2->carbody }}</span>
                                            </div>
                                            <div class="d-price">
                                                Günlük <span>{{ $carmain2->carprice }}₺</span>
                                                <a class="btn-main" href="{{ url('/cars/' . $carmain2->id) }}">Kirala</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            

                            

                        </div>

                    </div>
                </div>
            </section>

            <section class="text-light jarallax">
                <img src="images/background/9.jpg" class="jarallax-img" alt="">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-6 wow fadeInRight">
                            <h2>Memnun kalmayan müşteri yok</h2>
                        </div>
                        <div class="col-lg-6 wow fadeInLeft">
                            metinnnnn
                        </div>
                    </div>
                    <div class="spacer-double"></div>
                    <div class="row text-center">
                        <div class="col-md-3 col-sm-6 mb-sm-30">
                            <div class="de_count transparent text-light wow fadeInUp">
                                <h3 class="timer" data-to="15425" data-speed="3000">0</h3>
                                Tamamlanan Rezervasyonlar
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-sm-30">
                            <div class="de_count transparent text-light wow fadeInUp">
                                <h3 class="timer" data-to="8745" data-speed="3000">0</h3>
                                Mutlu Müşteriler
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-sm-30">
                            <div class="de_count transparent text-light wow fadeInUp">
                                <h3 class="timer" data-to="235" data-speed="3000">0</h3>
                                kiralanan arabalarrr
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-sm-30">
                            <div class="de_count transparent text-light wow fadeInUp">
                                <h3 class="timer" data-to="15" data-speed="3000">0</h3>
                                Tecrübemiz Gün Olarak
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section aria-label="section" class="no-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <h2>Özelliklerimiz</h2>
                            <p>Unutulmaz maceralara ve kusursuz mobilite çözümlerine giden yol, Rent a Car Gölhisar</p>
                            <div class="spacer-20"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-3">
                            <div class="box-icon s2 p-small mb20 wow fadeInRight" data-wow-delay=".5s">
                                <i class="fa bg-color fa-trophy"></i>
                                <div class="d-inner">
                                    <h4>Birinci Sınıf Hizmetler</h4>
                                    Sadece Gölhisardayız Başka Şube Yok
                                </div>
                            </div>
                            <div class="box-icon s2 p-small mb20 wow fadeInL fadeInRight" data-wow-delay=".75s">
                                <i class="fa bg-color fa-road"></i>
                                <div class="d-inner">
                                    <h4>7/24 Yol Yardımı</h4>
                                     Çekici Gönderiyoruz Gönül Rahatlığı ile Kaza Yapabilirsiniz
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <img src="images/misc/car-2.png" alt="" class="img-fluid wow fadeInUp">
                        </div>

                        <div class="col-lg-3">
                            <div class="box-icon s2 d-invert p-small mb20 wow fadeInL fadeInLeft" data-wow-delay="1s">
                                <i class="fa bg-color fa-tag"></i>
                                <div class="d-inner">
                                    <h4>Fiyat Performans</h4>
                                     Uygun Fiyat Max Kalite
                                </div>
                            </div>
                            <div class="box-icon s2 d-invert p-small mb20 wow fadeInL fadeInLeft" data-wow-delay="1.25s">
                                <i class="fa bg-color fa-map-pin"></i>
                                <div class="d-inner">
                                    <h4>İstediğin Yerde Bırak</h4>
                                     Ücretsiz teslim alma ve teslim etme özelliği sayesinde aracı istediğiniz yerden alıp bırakabilirsiniz.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-testimonials" class="no-top no-bottom">
                <div class="container">
                    <div class="row g-4 align-items-center">

                        <div class="col-md-4">
                            <div class="de-image-text">
                                <div class="d-text">
                                    <div class="d-quote id-color"><i class="fa fa-quote-right"></i></div>
                                    <h4>Excellent Service! Car Rent Service!</h4>
                                    <blockquote>
                                       I have been using Rentaly for my Car Rental needs for over 5 years now. I have never had any problems with their service. Their customer support is always responsive and helpful. I would recommend Rentaly to anyone looking for a reliable Car Rental provider.
                                       <span class="by">Stepanie Hutchkiss</span>
                                   </blockquote>
                                </div> 
                                <img src="images/testimonial/1.jpg" class="img-fluid" alt="">
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="spacer-double sm-hide"></div>
                            <div class="spacer-double sm-hide"></div>
                            <div class="de-image-text">
                                <div class="d-text">
                                    <div class="d-quote id-color"><i class="fa fa-quote-right"></i></div>
                                    <h4>Excellent Service! Car Rent Service!</h4>
                                    <blockquote>
                                       We have been using Rentaly for our trips needs for several years now and have always been happy with their service. Their customer support is Excellent Service! and they are always available to help with any issues we have. Their prices are also very competitive.
                                       <span class="by">Jovan Reels</span>
                                   </blockquote>
                                </div>
                                <img src="images/testimonial/2.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="spacer-double sm-hide"></div>
                            <div class="spacer-double sm-hide"></div>
                            <div class="spacer-double sm-hide"></div>
                            <div class="spacer-double sm-hide"></div>
                            <div class="de-image-text">
                                <div class="d-text">
                                    <div class="d-quote id-color"><i class="fa fa-quote-right"></i></div>
                                    <h4>Excellent Service! Car Rent Service!</h4>
                                    <blockquote>
                                       Endorsed by industry experts, Rentaly is the Car Rental solution you can trust. With years of experience in the field, we provide fast, reliable and secure Car Rental services.
                                       <span class="by">Kanesha Keyton</span>
                                   </blockquote>
                                </div>
                                <img src="images/testimonial/3.jpg" class="img-fluid" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </section>            

            <section id="section-news">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <h2>Latest News</h2>
                            <p>Breaking news, fresh perspectives, and in-depth coverage - stay ahead with our latest news, insights, and analysis.</p>
                            <div class="spacer-20"></div>
                        </div>
                        
                        <div class="col-lg-4 mb10">
                            <div class="bloglist s2 item">
                                <div class="post-content">
                                    <div class="post-image">
                                        <div class="date-box">
                                            <div class="m">10</div>
                                            <div class="d">MAR</div>
                                        </div>
                                        <img alt="" src="images/news/pic-blog-1.jpg" class="lazy">
                                    </div>
                                    <div class="post-text">                         
                                        <h4><a href="news-single.html">Enjoy Best Travel Experience<span></span></a></h4>
                                        <p>Traveling is an enriching experience that allows us to explore new destinations, immerse ourselves in different cultures, and create lifelong memories.</p>
                                        <a class="btn-line" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                                
                        <div class="col-lg-4 mb10">
                            <div class="bloglist s2 item">
                                <div class="post-content">
                                    <div class="post-image">
                                        <div class="date-box">
                                            <div class="m">12</div>
                                            <div class="d">MAR</div>
                                        </div>
                                        <img alt="" src="images/news/pic-blog-2.jpg" class="lazy">
                                    </div>
                                    <div class="post-text">                           
                                        <h4><a href="news-single.html">The Future of Car Rent<span></span></a></h4>
                                        <p>As technology continues to advance at a rapid pace, the car rental industry is poised for a transformative shift. The future of car rental promises..</p>
                                        <a class="btn-line" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                                
                        <div class="col-lg-4 mb10">
                            <div class="bloglist s2 item">
                                <div class="post-content">
                                    <div class="post-image">
                                        <div class="date-box">
                                            <div class="m">14</div>
                                            <div class="d">MAR</div>
                                        </div>
                                        <img alt="" src="images/news/pic-blog-3.jpg" class="lazy">
                                    </div>
                                    <div class="post-text">                            
                                        <h4><a href="news-single.html">Holiday Tips For Backpacker<span></span></a></h4>
                                        <p>For adventure seekers and budget-conscious travelers, backpacking offers a thrilling and immersive way to explore the world. Whether you're embarking..</p>
                                        <a class="btn-line" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="text-light jarallax" aria-label="section">
                <img src="images/background/3.jpg" alt="" class="jarallax-img">
                <div class="container">
                    <div class="row">
                    <div class="col-lg-3">
                        <h1>Let's Your Adventure Begin</h1>
                        <div class="spacer-20"></div>
                    </div>
                    <div class="col-md-3">
                        <i class="fa fa-trophy de-icon mb20"></i>
                        <h4>First Class Services</h4>
                        <p>Where luxury meets exceptional care, creating unforgettable moments and exceeding your every expectation.</p>
                    </div>
                    <div class="col-md-3">
                        <i class="fa fa-road de-icon mb20"></i>
                        <h4>24/7 road assistance</h4>
                        <p>Reliable support when you need it most, keeping you on the move with confidence and peace of mind.</p>
                    </div>
                    <div class="col-md-3">
                        <i class="fa fa-map-pin de-icon mb20"></i>
                        <h4>Free Pick-Up & Drop-Off</h4>
                        <p>Enjoy free pickup and drop-off services, adding an extra layer of ease to your car rental experience.</p>
                    </div>
                </div>
                </div>
            </section>       

            <section id="section-faq">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h2>Have Any Questions?</h2>
                            <div class="spacer-20"></div>
                        </div>
                    </div>
                    <div class="row g-custom-x">
                        <div class="col-md-6 wow fadeInUp">
                            <div class="accordion secondary">
                                <div class="accordion-section">
                                    <div class="accordion-section-title" data-tab="#accordion-1">
                                        How do I get started with Car Rental?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-1">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                    </div>
                                    <div class="accordion-section-title" data-tab="#accordion-2">
                                        Can I rent a car with a debit card??
                                    </div>
                                    <div class="accordion-section-content" id="accordion-2">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                    </div>
                                    <div class="accordion-section-title" data-tab="#accordion-3">
                                        What kind of Car Rental do I need?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-3">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 wow fadeInUp">
                            <div class="accordion secondary">
                                <div class="accordion-section">
                                    <div class="accordion-section-title" data-tab="#accordion-b-4">
                                        What is a rental car security deposit?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-b-4">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                    </div>
                                    <div class="accordion-section-title" data-tab="#accordion-b-5">
                                        Can I cancel or modify my reservation?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-b-5">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                    </div>
                                    <div class="accordion-section-title" data-tab="#accordion-b-6">
                                        Is it possible to extend my rental period?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-b-6">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section aria-label="section" class="pt40 pb40 text-light" data-bgcolor="#111111">
                <div class="wow fadeInRight d-flex">
                  <div class="de-marquee-list">
                    <div class="d-item">
                      <span class="d-item-txt">SUV</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Hatchback</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Crossover</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Convertible</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Sedan</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Sports Car</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Coupe</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Minivan</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Station Wagon</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Truck</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Minivans</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Exotic Cars</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                     </div>
                  </div>

                  <div class="de-marquee-list">
                    <div class="d-item">
                      <span class="d-item-txt">SUV</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Hatchback</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Crossover</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Convertible</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Sedan</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Sports Car</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Coupe</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Minivan</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Station Wagon</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Truck</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Minivans</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
                      <span class="d-item-txt">Exotic Cars</span>
                      <span class="d-item-display">
                        <i class="d-item-dot"></i>
                      </span>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgiM7ogCAA2Y5pgSk2KXZfxF5S_1jsptA&amp;libraries=places&amp;callback=initPlaces" async="" defer=""></script>

</body>

</html>