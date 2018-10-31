<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>uiCookies:Atlantis &mdash; Free Bootstrap Theme, Free Responsive Bootstrap Website Template</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:300,400,700|Rubik:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('portal/css/styles-merged.css') }}">
    <link rel="stylesheet" href="{{ asset('portal/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('portal/css/custom.css') }}">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <!-- START: header -->

  <header role="banner" class="probootstrap-header">
    <!-- <div class="container"> -->
    <div class="row">
        <a href="index.html" class="probootstrap-logo visible-xs"><img src="img/logo_sm.png" class="hires" width="120" height="33" alt="Free Bootstrap Template by uicookies.com"></a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs"><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li><a href="index.html">Inicio</a></li>
            <li class="active"><a href="rooms.html">Habitaciones</a></li>
            <li class="hidden-xs probootstrap-logo-center"><a href="index.html"><img src="{{ asset('portal/img/logo_md.png') }}" class="hires" width="181" height="50" alt="Free Bootstrap Template by uicookies.com"></a></li>
           
            <li><a href="{{ route('login') }}">Inicio de Sesión</a></li>
            <li><a href="{{ route('register') }}">Registrar</a></li>
          </ul>
          <div class="extra-text visible-xs">
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <h5>Connect With Us</h5>
            <ul class="social-buttons">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </nav>
        </div>
    <!-- </div> -->
  </header>
  <!-- END: header -->

  <section class="probootstrap-slider flexslider probootstrap-inner">
    <ul class="slides">
       <li style="background-image: url({{ asset('portal/img/habitaciones2.jpg') }})" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                  <p><img src= "{{ asset('portal/img/curve_white.svg') }}" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p>
                  <h1 class="probootstrap-heading probootstrap-animate">Nuestras Habitaciones</h1>
                  <div class="probootstrap-animate probootstrap-sub-wrap">Toda una variedad desde la comudidad que necesitas</div>
                </div>
              </div>
            </div>
          </div>
        </li>
    </ul>
  </section>
  
  <section class="probootstrap-section">
    <div class="container">
      <div class="row">

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="probootstrap-room">
            <a href="#"><img src="{{ asset('portal/img/sencilla.jpg') }}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
            <div class="text">
              <h3>Habitaciones Clasicas</h3>
              <p> Por Tan Solo <strong>BsS 550,00/Noche</strong></p>
              <div class="post-meta mb30">
                <ul>
                  <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 122 Comentarios</li>
                  <li><i class="icon-user2"></i> 87 Huespedes</li>
                </ul>
              </div>
              <p><a href="#" class="btn btn-primary" role="button">Reserva Ahora</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="probootstrap-room">
            <a href="#"><img src="{{ asset('portal/img/matrimonial1.jpg') }}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
            <div class="text">
              <h3>Habitacion Matrimonial</h3>
              <p>Por Tan Solo <strong>BsS 600,00/Noche</strong></p>
              <div class="post-meta mb30">
                <ul>
                  <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 36 Comentarios</li>
                  <li><i class="icon-user2"></i> 50 Huespedes</li>
                </ul>
              </div>
              <p><a href="#" class="btn btn-primary" role="button">Reserve Ahora</a></p>
            </div>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="probootstrap-room">
            <a href="#"><img src="{{ ('portal/img/duos.jpg') }}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
            <div class="text">
              <h3>Habitaciones Duos</h3>
              <p>Por Tan Solo <strong>BsS 550,00/Noche</strong></p>
              <div class="post-meta mb30">
                <ul>
                  <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 123 Comentarios</li>
                  <li><i class="icon-user2"></i>100 Huespedes</li>
                </ul>
              </div>
              <p><a href="#" class="btn btn-primary" role="button">Reserve Ahora</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="probootstrap-room">
            <a href="#"><img src="{{ asset('portal/img/aire.jpg') }}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
            <div class="text">
              <h3>Habitaciones Privadas cerca del Mar</h3>
              <p>Por Tan Solo <strong>BsS 659,00/Solo Dia</strong></p>
              <div class="post-meta mb30">
                <ul>
                  <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 120 comentarios</li>
                  <li><i class="icon-user2"></i> 189 Huespedes</li>
                </ul>
              </div>
              <p><a href="#" class="btn btn-primary" role="button">Reserve Ahora</a></p>
            </div>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="probootstrap-room">
            <a href="#"><img src="{{ asset('portal/img/familiares.jpg') }}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
            <div class="text">
              <h3>Habitacion Familiar</h3>
              <p>Por Tan Solo <strong>BsS. 720,00/Noche</strong></p>
              <div class="post-meta mb30">
                <ul>
                  <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 122 Comentarios</li>
                  <li><i class="icon-user2"></i> 100 Huespedes</li>
                </ul>
              </div>
              <p><a href="#" class="btn btn-primary" role="button">Reserve Ahora</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="probootstrap-room">
            <a href="#"><img src="{{ asset('portal/img/arena.jpg') }}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
            <div class="text">
              <h3>Habitaciones De Arena</h3>
              <p>Por Tan Solo <strong>BsS.459,00/Noche</strong></p>
              <div class="post-meta mb30">
                <ul>
                  <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 133 Comentarios</li>
                  <li><i class="icon-user2"></i> 212 Huespedes</li>
                </ul>
              </div>
              <p><a href="#" class="btn btn-primary" role="button">Reserve Ahora</a></p>
            </div>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>

      </div>
      

  <section class="probootstrap-half">
    <div class="image" style="background-image: url(img/slider_2.jpg);"></div>
    <div class="text">
      </div>
    </div>
  </section>

  <!-- START: footer -->
  <footer role="contentinfo" class="probootstrap-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          
          </div>
        </div>
      </div>
      <div class="row mt40">
        <div class="col-md-12 text-center">
          <ul class="probootstrap-footer-social">
            <li><a href=""><i class="icon-twitter"></i></a></li>
            <li><a href=""><i class="icon-facebook"></i></a></li>
            <li><a href=""><i class="icon-instagram2"></i></a></li>
          </ul>
          <p>
            <small>&copy; 2018 <a href="https://uicookies.com/" target="_blank">Hotel Atlantis</a>Bienvenidos A Nuestra Familia</small>
          </p>
          
        </div>
      </div>
    </div>
  </footer>
  <!-- END: footer -->

  <script src="{{ ('portal/js/scripts.min.js') }}"></script>
  <script src="{{ ('portal/js/main.min.js') }}"></script>
  <script src="{{ ('portal/js/custom.js') }}"></script>


  </body>
</html>