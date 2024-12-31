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
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <a href="login.html" class="btn-main">Üye Girişi</a>
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <section id="section-hero" aria-label="section" class="jarallax">
                <img src="images/background/2.jpg" class="jarallax-img" alt="">
                <div class="v-center">
                    <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-4 offset-lg-4">
                                    <div class="padding40 rounded-3 shadow-soft" data-bgcolor="#ffffff">
                                        <h4>Giriş Yap</h4>
                                        <div class="spacer-10"></div>
                                        <form id="form_register" class="form-border" method="post" action="{{ route('login') }}">
                                            
                                            <div class="field-set">
                                                @csrf
                                                   
                                                <input type="text" name="mail" id="mail"  class="form-control" placeholder="E-posta" required />
                                            </div>
                                            <div class="field-set">
                                                <input type="password" name="password" id="password" class="form-control" placeholder="Şifre" required />
                                            </div>
                                            <div id="submit">
                                                <input type="submit" id="send_message" value="Giriş Yap" class="btn-main btn-fullwidth rounded-3" />
                                            </div>
                                        </form>
                                        <div class="title-line">Hala&nbsp;hesabınız&nbsp;yok&nbsp;mu?</div>
                                        <div class="row g-2">
                                            <div id="submit">
                                                <input type="submit" id="send_message" value="Kayıt Ol" class="btn-main btn-fullwidth rounded-3" />
                                            </div>
                                                @if ($errors->has('message'))
                                                <div style="color: red;">
                                                    {{ $errors->first('message') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </section>
        </div>
        <!-- content close -->
    
    <!-- Javascript Files
    ================================================== -->
    <script src="/js/plugins.js"></script>
    <script src="/js/designesia.js"></script>

</body>

</html>