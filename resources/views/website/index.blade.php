<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Special Vans Pasto</title>

    <!-- Bootstrap core CSS 
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    -->

    <link href="{!! asset('website/vendor/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">


<!--


-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{!! asset('website/assets/css/templatemo-chain-app-dev.css') !!}">

    <link rel="stylesheet" href="{!! asset('website/assets/css/animated.css') !!}">
    
    <link rel="stylesheet" href="{!! asset('website/assets/css/owl.css') !!}"> 

    <link rel="stylesheet" href="{!! asset('website/assets/css/lightgallery.min.css') !!}">

    <link rel="stylesheet" href="{!! asset('website/assets/css/style.css') !!}">

    <link rel="stylesheet" href="{!! asset('website/assets/css/estilos.css') !!}">

    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!--WhatsApp Button-->

  <a href="https://api.whatsapp.com/send?phone=+57" class="btn-wsp" target="_blank">
	    <i class="fa fa-whatsapp icono"></i>
	</a>
  <!--WhatsApp Button end-->

  <!--Scroll Top Button-->
  <a href="#" class="scroll-top" title="Ir arriba">
    <i class="fa fa-angle-up"></i>
  </a>
  <style>
    a.scroll-top {
      color: #fff;
      display: none;
      width: 40px;
      height: 40px;
      position: fixed;
      z-index: 1000;
      bottom: 40px;
      right: 30px;
      font-size: 20px;
      background: #000039;
      border-radius: 20px !important;
      text-align: center;
      border: 3px solid hsla(0, 0%, 78%, 0.3)
    }
    a.scroll-top i {
    position: relative;
    top: 2px;
    }
  </style>
  
  
  <!--Scroll Top End-->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <style type="text/css">
                #logo-header {
                  width:140px !important;
                  height: 80px !important;
                }
               </style>
              <img id="logo-header" src="{!! asset('website/assets/images/logo-special-vans.png') !!}" alt="Special Vans">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Inicio</a></li>
              <li class="scroll-to-section"><a href="#seccion1">Quienes Somos</a></li>
              <li class="scroll-to-section"><a href="#seccion2">Pilares Corporativos</a></li>
              <li class="scroll-to-section"><a href="#services">Servicios</a></li>
              <li class="scroll-to-section"><a href="#tours">Tours</a></li>
              <li class="scroll-to-section"><a href="#galeria">Galería</a></li>
              <li class="scroll-to-section"><a href="#footer">Contacto</a></li>
              <!--
              <li><div class="gradient-button"><a id="modal_trigger" href="#modal"><i class="fa fa-sign-in-alt"></i> Sign In Now</a></div></li>
              --> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  
  <div id="modal" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title">Login</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>

    <section class="popupBody">
        <!-- Social Login -->
        <div class="social_login">
            <div class="">
                <a href="#" class="social_box fb">
                    <span class="icon"><i class="fab fa-facebook"></i></span>
                    <span class="icon_title">Connect with Facebook</span>

                </a>

                <a href="#" class="social_box google">
                    <span class="icon"><i class="fab fa-google-plus"></i></span>
                    <span class="icon_title">Connect with Google</span>
                </a>
            </div>

            <div class="centeredText">
                <span>Or use your Email address</span>
            </div>

            <div class="action_btns">
                <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
            </div>
        </div>

        <!-- Username & Password Login form -->
        <div class="user_login">
            <form>
                <label>Email / Username</label>
                <input type="text" />
                <br />

                <label>Password</label>
                <input type="password" />
                <br />

                <div class="checkbox">
                    <input id="remember" type="checkbox" />
                    <label for="remember">Remember me on this computer</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><a href="#" class="btn btn_red">Login</a></div>
                </div>
            </form>

            <a href="#" class="forgot_password">Forgot password?</a>
        </div>

        <!-- Register Form -->
        <div class="user_register">
            <form>
                <label>Full Name</label>
                <input type="text" />
                <br />

                <label>Email Address</label>
                <input type="email" />
                <br />

                <label>Password</label>
                <input type="password" />
                <br />

                <div class="checkbox">
                    <input id="send_updates" type="checkbox" />
                    <label for="send_updates">Send me occasional email updates</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
                </div>
            </form>
        </div>
    </section>
</div>
  <div class="main-banner1 wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2 style="color:white">Sección 1</h2>
                    <p style="color:white">Publicidad aqui</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{!! asset('website/assets/images/slider-dec.png') !!}"  alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Duplicar seccion 2 Quienes Somos -->
  <div class="main-banner2 wow fadeIn" id="seccion1" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h3 style="color:white; text-align:justify;"><b>¿Quienes Somos?</b></h3>
                    <p style="color:white">Es una empresa dedicada a satisfacer las necesidades de transporte especial, turístico y empresarial a nivel nacional. </p>
                    
                    <h3 style="color:white"><b>MISIÓN</b></h3>
                    <p style="color:white; text-align:justify;">Special vans Es una empresa dedicada a la solución de servicios de transporte a nivel nacional en el sector turístico y empresarial, ofreciendo puntualidad, calidad y tecnología de punta con el acompañamiento del mejor talento humano.</p>

                    <h3 style="color:white"><b>VISIÓN</b></h3>
                    <p style="color:white; text-align:justify;">Special vans acordé con los principios de confianza y puntualidad acompañados por la gestión de talento humano alcanzará el reconocimiento de sus clientes asegurando un mayor posicionamiento en las soluciones de transporte a nivel nacional.</p>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{!! asset('website/assets/images/logo-special-vans.png') !!}" class="img-fluid" alt="Special Vans">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Final Duplicar seccion 2-->

    <!--seccion Pilares Corporativos-->
    <div class="main-banner3 wow fadeIn" id="seccion2" data-wow-duration="1s" data-wow-delay="0.5s">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                  <img  src="{!! asset('website/assets/images/pilares.png') !!}">
              </div>
          </div>
        </div>
      </div>
    </div>
    <!--Final Duplicar seccion 2-->

    <!-- Carousel test section -->
    
    <!--Final Carousel test section-->

    <div id="div-servicios">
    <div class="container" >
      <div id="services" class="services section">
      <div class="row" >
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4 style="color: white;">NUESTROS SERVICIOS</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="service-item first-service">
            <div class="icon"></div>
            <h4>Transporte Aeropuerto</h4>
            <h4>El Dorado - Bogotá</h4>
            <img src="{!! asset('website/assets/images/trans-aero.png') !!}" style="border-radius: 5% 20% 5% 5%;">
            <br><br>
            <p>Prestamos el servicio desde y hacia el aeropuerto, sin límite de pasajeros.<br> Nos ajustamos a sus necesidades.</p>
            
            <div class="text-button">
              <a href="#">Leer más <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-item second-service">
            <div class="icon"></div>
            <h4>Transporte Empresarial</h4>
            <h4>Servicio Ejecutivo</h4>
            <img src="{!! asset('website/assets/images/trans-ejecutivo.png') !!}" style="border-radius: 5% 20% 5% 5%;">
            <br>
            <p>* Servicio empresarial
              <br>
              * Servicio de transporte puerta a puerta
              <br>
              * Servicio por horas
              <br>
              * Sin límite de pasajeros</p>
            <div class="text-button">
              <a href="#">Leer más <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4" >
          <div class="service-item third-service" >
            <div class="icon"></div>
            <h4>Servicios Expresos</h4>
            <h4>Especiales</h4>
            <img src="{!! asset('website/assets/images/trans-expreso.png') !!}" style="border-radius: 5% 20% 5% 5%;" width="100" height="220">  
            <p>
            * Expresos dentro y fuera de la ciudad
            <br>
            * Rutas navideñas
            <br>
            * Paseos familiares
            <br>
            * Paseos con amigos
            <br>
            * Paseos Empresariales
            </p>
            <div class="text-button">
              <a href="#">Leer más <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <!--
        <div class="col-lg-3">
          <div class="service-item fourth-service">
            <div class="icon"></div>
            <h4>24/7 Help &amp; Support</h4>
            <p>Lorem ipsum dolor consectetur adipiscing elit sedder williamsburg photo booth quinoa and fashion axe.</p>
            <div class="text-button">
              <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      -->
      </div>
    </div>
  </div>
</div>

<div id="div-tours">
  <div id="tours" class="pricing-tables">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4 style="color: white;">TOURS</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eismod tempor incididunt ut labore et dolore magna.</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="pricing-item-regular">
            <span class="price">$12</span>
            <h4>TOUR BOGOTÁ</h4>
            <div class="icon">
              <img src="{!! asset('website/assets/images/tour-bog.jpg') !!}" alt="">
            </div>
            <ul>
            <li>Tiquete Pasto - Bogotá</li>
              <li>Alojamiento en hotel</li>
              <li>Alimentación</li>
              <li>Visita Sitios Turisticos</li>
              <li>Guía turístico</li>
            </ul>
            <div class="border-button">
              <a href="#">COMPRAR AHORA</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="pricing-item-regular">
            <span class="price">$25</span>
            <h4>TOUR EJE CAFETERO</h4>
            <div class="icon">
              <img src="{!! asset('website/assets/images/eje-caf.jpg') !!}" alt="">
            </div>
            <ul>
            <li>Tiquete Pasto - Eje cafetero</li>
              <li>Alojamiento en hotel</li>
              <li>Alimentación</li>
              <li>Visita Sitios Turisticos</li>
              <li>Guía turístico</li>
            </ul>
            <div class="border-button">
              <a href="#">COMPRAR AHORA</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="pricing-item-regular">
            <span class="price">$66</span>
            <h4>TOUR CALI</h4>
            <div class="icon">
              <img src="{!! asset('website/assets/images/cali-tour-1.jpg') !!}" alt="">
            </div>
            <ul>
              <li>Tiquete Pasto - Medellín</li>
              <li>Alojamiento en hotel</li>
              <li>Alimentación</li>
              <li>Visita Sitios Turisticos</li>
              <li>Guía turístico</li>
            </ul>
            <div class="border-button">
              <a href="#">COMPRAR AHORA</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="pricing-item-regular">
            <span class="price">$25</span>
            <h4>TOUR MEDELLÍN</h4>
            <div class="icon">
              <img src="{!! asset('website/assets/images/medellin-1.jpeg') !!}" alt="">
            </div>
            <ul>
              <li>Tiquete Pasto - Cali</li>
              <li>Alojamiento en hotel</li>
              <li>Alimentación</li>
              <li>Visita Sitios Turisticos</li>
              <li>Guía turístico</li>
            </ul>
            <div class="border-button">
              <a href="#">COMPRAR AHORA</a>
            </div>
          </div>
        </div>

       


      </div>
    </div>
  </div>

  

</div>

<div id="galeria" class="about-us section">
      <!-- Gallery Area Start -->
      <section class="gauto-gallery-area section_70">
        <div class="container">
		<h4 align=center>GALERÍA DE IMAGENES</h4>
            <div class="row" id="lightgallery">
                <div class="col-lg-4" data-src="{!! asset('website/assets/images/tours/bogota.jpeg') !!}">
                    <div class="single-gallery">
                        <div class="img-holder"><img src="{!! asset('website/assets/images/tours/bogota.jpeg') !!}" alt="Tour Bogota" />
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="title-box">
                                        <h3><a href="#">Tour Bogotá</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="link-zoom-button">
                                <div class="single-button"><a href="#"><span class="fa fa-link"></span>Details</a></div>
                                <div class="single-button"><a class="zoom lightbox-image"
                                        href="{!! asset('website/assets/images/tours/bogota.jpeg') !!}" ><span class="fa fa-search"></span>Zoom</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-src="{!! asset('website/assets/images/tours/eje-cafetero.jpg') !!}">
                    <div class="single-gallery">
                        <div class="img-holder"><img src="{!! asset('website/assets/images/tours/eje-cafetero.jpg') !!}" alt="Tour Eje Cafetero" />
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="title-box">
                                        <h3><a href="#">Tour Eje Cafetero</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="link-zoom-button">
                                <div class="single-button"><a href="#"><span class="fa fa-link"></span>Details</a></div>
                                <div class="single-button"><a class="zoom lightbox-image"
                                        href="{!! asset('website/assets/images/tours/eje-cafetero.jpg') !!}"><span class="fa fa-search"></span>Zoom</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-src="{!! asset('website/assets/images/tours/cali.jpeg') !!}">
                    <div class="single-gallery">
                        <div class="img-holder"><img src="{!! asset('website/assets/images/tours/cali.jpeg') !!}" alt="Tour Cali" />
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="title-box">
                                        <h3><a href="#">Tour Cali</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="link-zoom-button">
                                <div class="single-button"><a href="#"><span class="fa fa-link"></span>Details</a></div>
                                <div class="single-button"><a class="zoom lightbox-image"
                                        href="{!! asset('website/assets/images/tours/cali.jpeg') !!}"><span class="fa fa-search"></span>Zoom</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-src="{!! asset('website/assets/images/tours/medellin.jpg') !!}">
                    <div class="single-gallery">
                        <div class="img-holder"><img src="{!! asset('website/assets/images/tours/medellin.jpg') !!}" alt="Tour Medellin" />
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="title-box">
                                        <h3><a href="#">Tour Medellín</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="link-zoom-button">
                                <div class="single-button"><a href="#"><span class="fa fa-link"></span>Details</a></div>
                                <div class="single-button"><a class="zoom lightbox-image"
                                        href="{!! asset('website/assets/images/tours/medellin.jpg') !!}"><span class="fa fa-search"></span>Zoom</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-src="{!! asset('website/assets/images/tours/chicamocha.jpg') !!}">
                    <div class="single-gallery">
                        <div class="img-holder"><img src="{!! asset('website/assets/images/tours/chicamocha.jpg') !!}" alt="Tour Chicamocha" />
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="title-box">
                                        <h3><a href="#">Tour Chicamocha</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="link-zoom-button">
                                <div class="single-button"><a href="#"><span class="fa fa-link"></span>Details</a></div>
                                <div class="single-button"><a class="zoom lightbox-image"
                                        href="{!! asset('website/assets/images/tours/chicamocha.jpg') !!}"><span class="fa fa-search"></span>Zoom</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-src="{!! asset('website/assets/images/tours/boyaca.jpg') !!}">
                    <div class="single-gallery">
                        <div class="img-holder"><img src="{!! asset('website/assets/images/tours/boyaca.jpg') !!}" alt="Tour Boyaca" />
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="title-box">
                                        <h3><a href="#">Tour Boyacá - Villa de Leyva</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="link-zoom-button">
                                <div class="single-button"><a href="#"><span class="fa fa-link"></span>Details</a></div>
                                <div class="single-button"><a class="zoom lightbox-image"
                                        href="{!! asset('website/assets/images/tours/boyaca.jpg') !!}"><span class="fa fa-search"></span>Zoom</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!-- Gallery Area End -->
</div>

  <footer id="footer">
    <div class="container">
      <div class="row">
      <div class="col-lg-4">
      <div class="logo">
              <img src="{!! asset('website/assets/images/logo-special-vans.png') !!}" alt="Special Vans">
            </div>
          <div class="footer-widget">
            <h4>¿Quienes Somos?</h4>
            <p><b>Special Vans:</b> es una empresa dedicada a satisfacer las necesidades de transporte especial, turístico y empresarial a nivel nacional. </p>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="footer-widget">
            <h4>Contacto</h4>
            <p>-Dirección- Pasto, Colombia </p>
            <p><a href="#">-000-000-0000</a></p>
            <p><a href="#">info@company.co</a></p>
          </div>
        </div>
        
        <div class="col-lg-4">
          <div class="footer-widget">
            <h4>About Us</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Testimonials</a></li>
              <li><a href="#">Pricing</a></li>
            </ul>
            <ul>
              <li><a href="#">About</a></li>
              <li><a href="#">Testimonials</a></li>
              <li><a href="#">Pricing</a></li>
            </ul>
          </div>
        </div>

        
        <div class="col-lg-12">
          <div class="copyright-text">
            <p>Copyright © 2022 Special Vans - San Juan de Pasto. Todos los derechos reservados. 
          <br><b>Diseño e implementación:</b> HR Solutions | Pasto</p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->


  <!--
  <script src="vendor/jquery/jquery.min.js"></script>
  -->
  <script src="{!! asset('website/vendor/jquery/jquery.min.js') !!}"></script>

  <!--
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  -->
  <script src="{!! asset('website/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

  <!--
  <script src="assets/js/owl-carousel.js"></script>
  -->
  <script src="{!! asset('website/assets/js/owl-carousel.js') !!}"></script>

  <script>
    $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
        $('a.scroll-top').fadeIn('slow');

    } else {
        $('a.scroll-top').fadeOut('slow');
    }
    });

    $('a.scroll-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 600);
    });
  </script>
  <!--
  <script src="assets/js/animation.js"></script>
  -->
  <script src="{!! asset('website/assets/js/animation.js') !!}"></script>

  <!--
  <script src="assets/js/imagesloaded.js"></script>
  -->
  <script src="{!! asset('website/assets/js/imagesloaded.js') !!}"></script>

  <!--
  <script src="assets/js/popup.js"></script>
  -->
  <script src="{!! asset('website/assets/js/popup.js') !!}"></script>

  <!--
  <script src="assets/js/custom.js"></script>
  -->
  <script src="{!! asset('website/assets/js/custom.js') !!}"></script>


  <!--Lightgallery js-->

  <!--
  <script src="assets/js/lightgallery-all.js"></script>
  -->
  <script src="{!! asset('website/assets/js/lightgallery-all.js') !!}"></script>

  <!--
  <script src="assets/js/custom_lightgallery.js"></script>
  -->
  <script src="{!! asset('website/assets/js/custom_lightgallery.js') !!}"></script>

  <!--
  <script src="assets/js/jquery.min.js"></script>
  -->
  <script src="{!! asset('website/assets/js/jquery.min.js') !!}"></script>

</body>
</html>