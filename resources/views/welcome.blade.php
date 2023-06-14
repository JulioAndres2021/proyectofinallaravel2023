<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Klinik - Clinic Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('clinic/vendors/owl-carousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('clinic/vendors/owl-carousel/css/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{asset('clinic/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('clinic/vendors/aos/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('clinic/css/style.min.css')}}">
</head>

<body>
   
   
            <!--AGREGADO DESDE UNA PLANTILLA-->
            <header id="header-section">
                <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
                <div class="container">
                  <div class="navbar-brand-wrapper d-flex w-100">
                    <img src="{{asset('clinic/images/LogoCambiado2023.png')}}" alt="" width="160px">
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="mdi mdi-menu navbar-toggler-icon"></span>
                    </button> 
                  </div>
                  <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
                    <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
                      <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
                        <div class="navbar-collapse-logo">
                          <img src="{{asset('clinic/images/Group2.svg')}}" alt="">
                        </div>
                        <button class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
                        </button>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#header-section">Inicio <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#features-section">Nosotros</a>
                      </li>
                      {{-- <li class="nav-item">
                        <a class="nav-link" href="#digital-marketing-section">Blog</a>  
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#feedback-section">Testimonials</a>
                      </li> --}}
                      <li class="nav-item btn-contact-us pl-4 pl-lg-0">
                        @if(Auth::check())
                        <a class="btn btn-info" href="{{route('home')}}">Entrar</a>
                            
                         @endif
                    {{-- <a class="btn btn-info"  href="{{route('login')}}">Iniciar Sesión</a> --}}
                    @if (Route::has('login'))
            {{-- <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10"> --}}
                @auth
                <a class="btn btn-danger" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Cerrar Sesión') }}
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-info font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Iniciar Sesión</a>

                     @if (Route::has('register'))
                        {{-- <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrarse</a> --}}
                    @endif 
                @endauth
            {{-- </div> --}}
        @endif
                    
                      </li>
                    </ul>
                  </div>
                </div> 
                </nav>   
              </header>
              <div class="banner" >
                <div class="container">
                  <h1 class="font-weight-semibold">MedicalCare <br>Consultorio Particular.</h1>
                  <h6 class="font-weight-normal text-muted pb-3">Consultas médicas a los teléfonos: (2302)-123456.</h6>
                  <div>
                    {{-- <button class="btn btn-opacity-light mr-1">Get started</button>
                    <button class="btn btn-opacity-success ml-1">Learn more</button> --}}
                  </div>
                  <img src="{{asset('clinic/images/Group171.svg')}}" alt="" class="img-fluid">
                </div>
              </div>
              <div class="content-wrapper">
                <div class="container">
                  <section class="features-overview" id="features-section" >
                    <div class="content-header">
                      <h2>How does it works</h2>
                      <h6 class="section-subtitle text-muted">One theme that serves as an easy-to-use operational toolkit<br>that meets customer's needs.</h6>
                    </div>
                    <div class="d-md-flex justify-content-between">
                      <div class="grid-margin d-flex justify-content-start">
                        <div class="features-width">
                          <img src="{{asset('clinic/images/Group12.svg')}}" alt="" class="img-icons">
                          <h5 class="py-3">Sector<br>Cardiología</h5>
                          <p class="text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                          <a href="#"><p class="readmore-link">Leer más</p></a>  
                        </div>
                      </div>
                      <div class="grid-margin d-flex justify-content-center">
                        <div class="features-width">
                          <img src="{{asset('clinic/images/Group7.svg')}}" alt="" class="img-icons">
                          <h5 class="py-3">Traumatología<br>y ortopedia</h5>
                          <p class="text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                          <a href="#"><p class="readmore-link">Leer más</p></a>
                        </div>
                      </div>
                      <div class="grid-margin d-flex justify-content-end">
                        <div class="features-width">
                          <img src="{{asset('clinic/images/Group5.svg')}}" alt="" class="img-icons">
                          <h5 class="py-3">Optica<br>y Oftalmología</h5>
                          <p class="text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                          <a href="#"><p class="readmore-link">Leer más</p></a>
                        </div>
                      </div>
                    </div>
                  </section>     
                  <section class="digital-marketing-service" id="digital-marketing-section">
                    <div class="row align-items-center">
                      <div class="col-12 col-lg-7 grid-margin grid-margin-lg-0" data-aos="fade-right">
                        <h3 class="m-0">Ofrecemos un amplio servicio en atención al paciente<br>Sumate a nuestro centro de salud.!</h3>
                        <div class="col-lg-7 col-xl-6 p-0">
                          <p class="py-4 m-0 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                          <p class="font-weight-medium text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer</p>
                        </div>    
                      </div>
                      <div class="col-12 col-lg-5 p-0 img-digital grid-margin grid-margin-lg-0" data-aos="fade-left">
                        <img src="{{asset('clinic/images/Group1.png')}}" alt="" class="img-fluid">
                      </div>
                    </div>
                    <div class="row align-items-center">
                      <div class="col-12 col-lg-7 text-center flex-item grid-margin" data-aos="fade-right">
                        <img src="{{asset('clinic/images/Group2.png')}}" alt="" class="img-fluid">
                      </div>
                      <div class="col-12 col-lg-5 flex-item grid-margin" data-aos="fade-left">
                        <h3 class="m-0">Somos líderes en distintas<br>áreas específicas para la atención del paciente.</h3>
                        <div class="col-lg-9 col-xl-8 p-0">
                          <p class="py-4 m-0 text-muted">Power-packed with impressive features and well-optimized, this template is designed to provide the best performance in all circumstances.</p>
                          <p class="pb-2 font-weight-medium text-muted">Its smart features make it a powerful stand-alone website building tool.</p>
                        </div>
                        <button class="btn btn-info">Readmore</button>
                      </div>
                    </div>
                  </section>     
                  {{-- <section class="case-studies" id="case-studies-section">
                    <div class="row grid-margin">
                      <div class="col-12 text-center pb-5">
                        <h2>Our case studies</h2>
                        <h6 class="section-subtitle text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum.</h6>
                      </div>
                      <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in">
                        <div class="card color-cards">
                          <div class="card-body p-0">
                            <div class="bg-primary text-center card-contents">
                              <div class="card-image">
                                <img src="{{asset('clinic/images/Group95.svg')}}" class="case-studies-card-img" alt="">
                              </div>  
                              <div class="card-desc-box d-flex align-items-center justify-content-around">
                                <div>
                                  <h6 class="text-white pb-2 px-3">Know more about Online marketing</h6>
                                  <button class="btn btn-white">Read More</button>
                                </div>
                              </div>
                            </div>   
                            <div class="card-details text-center pt-4">
                                <h6 class="m-0 pb-1">Online Marketing</h6>
                                <p>Seo, Marketing</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="card color-cards">
                          <div class="card-body p-0">
                            <div class="bg-warning text-center card-contents">
                              <div class="card-image">
                                  <img src="{{asset('clinic/images/Group108.svg')}}" class="case-studies-card-img" alt="">
                              </div>  
                              <div class="card-desc-box d-flex align-items-center justify-content-around">
                                <div>
                                  <h6 class="text-white pb-2 px-3">Know more about Web Development</h6>
                                  <button class="btn btn-white">Read More</button>
                                </div>
                              </div>
                            </div>   
                            <div class="card-details text-center pt-4">
                                <h6 class="m-0 pb-1">Web Development</h6>
                                <p>Developing, Designing</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
                        <div class="card color-cards">
                          <div class="card-body p-0">
                            <div class="bg-violet text-center card-contents">
                              <div class="card-image">
                                  <img src="{{asset('clinic/images/Group126.svg')}}" class="case-studies-card-img" alt="">
                              </div>  
                              <div class="card-desc-box d-flex align-items-center justify-content-around">
                                <div>
                                  <h6 class="text-white pb-2 px-3">Know more about Web Designing</h6>
                                  <button class="btn btn-white">Read More</button>
                                </div>
                              </div>
                            </div>   
                            <div class="card-details text-center pt-4">
                                <h6 class="m-0 pb-1">Web Designing</h6>
                                <p>Designing, Developing</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-3 stretch-card" data-aos="zoom-in" data-aos-delay="600">
                        <div class="card color-cards">
                          <div class="card-body p-0">
                            <div class="bg-success text-center card-contents">
                              <div class="card-image">
                                  <img src="{{asset('clinic/images/Group115.svg')}}" class="case-studies-card-img" alt="">
                              </div>  
                              <div class="card-desc-box d-flex align-items-center justify-content-around">
                                <div>
                                  <h6 class="text-white pb-2 px-3">Know more about Software Development</h6>
                                  <button class="btn btn-white">Read More</button>
                                </div>
                              </div>
                            </div>   
                            <div class="card-details text-center pt-4">
                                <h6 class="m-0 pb-1">Software Development</h6>
                                <p>Developing, Designing</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>      --}}
                  {{-- <section class="customer-feedback" id="feedback-section">
                    <div class="row">
                      <div class="col-12 text-center pb-5">
                        <h2>What our customers have to say</h2>
                        <h6 class="section-subtitle text-muted m-0">Lorem ipsum dolor sit amet, tincidunt vestibulum.</h6>
                      </div>
                      <div class="owl-carousel owl-theme grid-margin">
                          <div class="card customer-cards">
                            <div class="card-body">
                              <div class="text-center">
                                <img src="{{asset('clinic/images/face2.jpg')}}" width="89" height="89" alt="" class="img-customer">
                                <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                                <div class="content-divider m-auto"></div>
                                <h6 class="card-title pt-3">Tony Martinez</h6>
                                <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                              </div>
                            </div>
                          </div>
                          <div class="card customer-cards">
                            <div class="card-body">
                              <div class="text-center">
                                <img src="{{asset('clinic/images/face3.jpg')}}" width="89" height="89" alt="" class="img-customer">
                                <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                                <div class="content-divider m-auto"></div>
                                <h6 class="card-title pt-3">Sophia Armstrong</h6>
                                <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                              </div>
                            </div>
                          </div>
                          <div class="card customer-cards">
                            <div class="card-body">
                              <div class="text-center">
                                <img src="{{asset('clinic/images/face20.jpg')}}" width="89" height="89" alt="" class="img-customer">
                                <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                                <div class="content-divider m-auto"></div>
                                <h6 class="card-title pt-3">Cody Lambert</h6>
                                <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                              </div>
                            </div>
                          </div>
                          <div class="card customer-cards">
                            <div class="card-body">
                              <div class="text-center">
                                <img src="{{asset('clinic/images/face15.jpg')}}" width="89" height="89" alt="" class="img-customer">
                                <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                                <div class="content-divider m-auto"></div>
                                <h6 class="card-title pt-3">Cody Lambert</h6>
                                <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                              </div>
                            </div>
                          </div>
                          <div class="card customer-cards">
                            <div class="card-body">
                              <div class="text-center">
                                <img src="{{asset('clinic/images/face16.jpg')}}" width="89" height="89" alt="" class="img-customer">
                                <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                                <div class="content-divider m-auto"></div>
                                <h6 class="card-title pt-3">Cody Lambert</h6>
                                <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                              </div>
                            </div>
                          </div>
                          <div class="card customer-cards">
                            <div class="card-body">
                              <div class="text-center">
                                <img src="{{asset('clinic/images/face1.jpg')}}" width="89" height="89" alt="" class="img-customer">
                                <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                                <div class="content-divider m-auto"></div>
                                <h6 class="card-title pt-3">Tony Martinez</h6>
                                <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                              </div>
                            </div>
                          </div>
                          <div class="card customer-cards">
                            <div class="card-body">
                              <div class="text-center">
                                <img src="{{asset('clinic/images/face2.jpg')}}" width="89" height="89" alt="" class="img-customer">
                                <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                                <div class="content-divider m-auto"></div>
                                <h6 class="card-title pt-3">Tony Martinez</h6>
                                <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                              </div>
                            </div>
                          </div>
                          <div class="card customer-cards">
                            <div class="card-body">
                              <div class="text-center">
                                <img src="{{asset('clinic/images/face3.jpg')}}" width="89" height="89" alt="" class="img-customer">
                                <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                                <div class="content-divider m-auto"></div>
                                <h6 class="card-title pt-3">Sophia Armstrong</h6>
                                <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                              </div>
                            </div>
                          </div>
                          <div class="card customer-cards">
                            <div class="card-body">
                              <div class="text-center">
                                <img src="{{asset('clinic/images/face20.jpg')}}" width="89" height="89" alt="" class="img-customer">
                                <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                                <div class="content-divider m-auto"></div>
                                <h6 class="card-title pt-3">Cody Lambert</h6>
                                <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </section> --}}
                  {{-- <section class="contact-us" id="contact-section">
                    <div class="contact-us-bgimage grid-margin" >
                      <div class="pb-4">
                        <h4 class="px-3 px-md-0 m-0" data-aos="fade-down">Do you have any projects?</h4>
                        <h4 class="pt-1" data-aos="fade-down">Contact us</h4>
                      </div>
                      <div data-aos="fade-up">
                        <button class="btn btn-rounded btn-outline-danger">Contact us</button>
                      </div>          
                    </div>
                  </section> --}}
                  {{-- <section class="contact-details" id="contact-details-section">
                    <div class="row text-center text-md-left">
                      <div class="col-12 col-md-6 col-lg-3 grid-margin">
                        <img src="{{asset('clinic/images/Group2.svg')}}" alt="" class="pb-2">
                        <div class="pt-2">
                          <p class="text-muted m-0">mikayla_beer@feil.name</p>
                          <p class="text-muted m-0">906-179-8309</p>
                        </div>         
                      </div>
                      <div class="col-12 col-md-6 col-lg-3 grid-margin">
                        <h5 class="pb-2">Get in Touch</h5>
                        <p class="text-muted">Don’t miss any updates of our new templates and extensions.!</p>
                        <form>
                          <input type="text" class="form-control" id="Email" placeholder="Email id">
                        </form>
                        <div class="pt-3">
                          <button class="btn btn-dark">Subscribe</button>
                        </div>   
                      </div>
                      <div class="col-12 col-md-6 col-lg-3 grid-margin">
                        <h5 class="pb-2">Our Guidelines</h5>
                        <a href="#"><p class="m-0 pb-2">Terms</p></a>   
                        <a href="#" ><p class="m-0 pt-1 pb-2">Privacy policy</p></a> 
                        <a href="#"><p class="m-0 pt-1 pb-2">Cookie Policy</p></a> 
                        <a href="#"><p class="m-0 pt-1">Discover</p></a> 
                      </div>
                      <div class="col-12 col-md-6 col-lg-3 grid-margin">
                          <h5 class="pb-2">Our address</h5>
                          <p class="text-muted">518 Schmeler Neck<br>Bartlett. Illinois</p>
                          <div class="d-flex justify-content-center justify-content-md-start">
                            <a href="#"><span class="mdi mdi-facebook"></span></a>
                            <a href="#"><span class="mdi mdi-twitter"></span></a>
                            <a href="#"><span class="mdi mdi-instagram"></span></a>
                            <a href="#"><span class="mdi mdi-linkedin"></span></a>
                          </div>
                      </div>
                    </div>  
                  </section> --}}
                  <footer class="border-top">
                    <p class="text-center text-muted pt-4">Copyright © 2023<a href="https://www.bootstrapdash.com/" class="px-1">MedicalCare</a>Todos los derechos reservados.</p>
            
                    <p class="text-center text-muted pt-2">Distributed By: <a href="#" class="px-1" target="_blank">Julio Andres</a></p>
                  </footer>
                  <!-- Modal for Contact - us Button -->
                  {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="exampleModalLabel">Contácto</h4>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <label for="Name">Name</label>
                              <input type="text" class="form-control" id="Name" placeholder="Name">
                            </div>
                            <div class="form-group">
                              <label for="Email">Email</label>
                              <input type="email" class="form-control" id="Email-1" placeholder="Email">
                            </div>
                            <div class="form-group">
                              <label for="Message">Message</label>
                              <textarea class="form-control" id="Message" placeholder="Enter your Message"></textarea>
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
              </div> --}}
              <script src="{{asset('clinic/vendors/jquery/jquery.min.js')}}"></script>
              <script src="{{asset('clinic/vendors/bootstrap/bootstrap.min.js')}}"></script>
              <script src="{{asset('clinic/vendors/owl-carousel/js/owl.carousel.min.js')}}"></script>
              <script src="{{asset('clinic/vendors/aos/js/aos.js')}}"></script>
              <script src="{{asset('clinic/js/landingpage.js')}}"></script>
            <!--FIN AGREGADO DESDE UNA PLANTILLA-->
</body>

</html>