<!doctype html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>@yield('title')</title>
      <meta name="description" content="Titan Tally provides reliable accounting, bookkeeping, GST filing, payroll, and tax services designed for startups and small businesses.">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
      <link rel="canonical" href="{{ url()->current() }}" />
      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="/frontend/assets/img/logo/favicon.png">
      <!-- CSS here -->
      <link rel="stylesheet" href="/frontend/assets/css/bootstrap.css">
      <link rel="stylesheet" href="/frontend/assets/css/animate.css">
      <link rel="stylesheet" href="/frontend/assets/css/swiper-bundle.css">
      <link rel="stylesheet" href="/frontend/assets/css/slick.css">
      <link rel="stylesheet" href="/frontend/assets/css/magnific-popup.css">
      <link rel="stylesheet" href="/frontend/assets/css/font-awesome-pro.css"> 
      <link rel="stylesheet" href="/frontend/assets/css/flaticon.css">
      <link rel="stylesheet" href="/frontend/assets/css/spacing.css">
      <link rel="stylesheet" href="/frontend/assets/css/main.css">
      <link rel="stylesheet" href="/frontend/assets/css/my.css">
      <!-- Swiper CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
      <!-- Swiper JS -->
      <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
   </head>
   <body>
      <!-- back to top start -->
      <div class="back-to-top-wrapper">
         <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>               
         </button>
      </div>
      <!-- back to top end -->
      <!-- search area start -->
      <div class="search-area">
         <div class="search-inner p-relative">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-8">
                     <div class="search-wrapper">
                        <div class="search-close">
                           <button class="search-close-btn">
                              <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                           </button>
                        </div>
                        <div class="search-content pt-35">
                           <h3 class="heading text-center mb-30">Hi! How can we help You?</h3>
                           <div class="d-flex justify-content-center px-5">
                              <div class="search w-100 p-relative">
                                 <input type="text" class="search-input" placeholder="Search...">
                                 <button  class="search-icon">
                                 <i class="fa fa-search"></i>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="search-overlay"></div>
      <!-- search area end -->

      <!-- offcanvas area start -->
      <div class="offcanvas__area">
         <div class="offcanvas__wrapper">
            <div class="offcanvas__close">
               <button class="offcanvas__close-btn offcanvas-close-btn">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                     <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
               </button>
            </div>
            <div class="offcanvas__content">
               <div class="offcanvas__top mb-50 d-flex justify-content-between align-items-center">
                  <div class="offcanvas__logo logo">
                     <a href="/">
                        <img src="/frontend/my-img/logo.png" alt="logo" style="width:144px; height:48px;">
                     </a>
                  </div>
               </div>
               <div class="tp-main-menu-mobile fix d-xl-none mb-40"></div>
               
               <div class="offcanvas__contact">
                  <h4 class="offcanvas__title">Contacts</h4>
                  <div class="offcanvas__contact-content d-flex">
                     <div class="offcanvas__contact-content-icon">
                        <i class="fa-sharp fa-solid fa-location-dot"></i>
                     </div>
                     <div class="offcanvas__contact-content-content">
                        <a href="https://www.google.com/maps/search/86+Road+Broklyn+Street,+600+New+York,+USA/@40.6897806,-74.0278086,12z/data=!3m1!4b1">86 Road Broklyn Street, 600 </a>
                     </div>
                  </div>
                  <div class="offcanvas__contact-content d-flex">
                     <div class="offcanvas__contact-content-icon">
                        <i class="fa-solid fa-envelope"></i>
                     </div>
                     <div class="offcanvas__contact-content-content">
                        <a href="mailto:needhelp@company.com"> Needhelp@company.com  </a>
                     </div>
                  </div>
                  <div class="offcanvas__contact-content d-flex">
                     <div class="offcanvas__contact-content-icon">
                        <i class="fa-solid fa-phone"></i>
                     </div>
                     <div class="offcanvas__contact-content-content">
                        <a href="tel:01310-069824">+92 666 888 0000</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="body-overlay"></div>
      <!-- offcanvas area end -->


      <!-- header area start -->
      <header id="header-sticky" class="tp-header-area-2 p-relative tp-header-height">
         <div class="tp-header-space-2">
            <div class="container-fluid">
               <div class="row align-items-center">
                  <div class="col-xl-4 col-6">
                     <div class="tp-header-logo-2 p-relative">
                        <a href="/">
                          <img src="/frontend/my-img/logo.png" alt="logo" style="width:174px; height:50px;" >
                        </a>
                     </div>
                  </div>
                  <div class="col-lg-5 d-none d-xl-block">
                     <div class="tp-main-menu home-2 d-none d-xl-block">
                        <nav class="tp-main-menu-content">
                           <ul class="tp-onepage-menu">
                              <li><a href="/">Home</a></li>
                              <li><a href="/#about">About Us</a></li>
                              <li><a href="/#contact">Contact Us</a></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
                  <div class="col-xl-3 col-6">
                     <div class="tp-header-main-right-2 d-flex align-items-center justify-content-xl-end">
                        <div class="tp-header-contact-2 d-flex align-items-center">
                           <div class="tp-header-contact-search search-open-btn d-none d-xxl-block">
                              <span><i class="fa-solid fa-magnifying-glass"></i></span>
                           </div>
                           <div class="tp-header-contact-inner d-none d-xl-flex align-items-center">
                              <div class="tp-header-contact-icon">
                                 <span><i class="fa-solid fa-phone"></i></span>
                              </div>
                              <div class="tp-header-contact-content">
                                 <p>Requesting A Call:</p>
                                 <span><a href="tel:555-0111">(629) 555-0129</a></span>
                              </div>
                           </div>
                        </div>
                        <div class="tp-header-main-right-hamburger-btn d-xl-none offcanvas-open-btn text-end">
                           <button class="hamburger-btn">
                              <span></span>
                              <span></span>
                              <span></span>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- header area end -->
      
      @yield('content')
         <!-- footer area start -->
         <footer class="tp-footer-area-2 pt-140 p-relative z-index-1" data-bg-color="#16243E">
            <div class="tp-footer-bg-shape-2">
               <img class="shape-1" src="/frontend/assets/img/footer/home-2/shape-1.png" alt="shape-1">
               <img class="shape-2" src="/frontend/assets/img/footer/home-2/shape-2.png" alt="shape-2">
            </div>
            <div class="tp-footer-main-area tp-footer-border">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                        <div class="tp-footer-widget tp-footer-2-col-1 mb-50">
                           <div class="tp-footer-logo mb-20">
                           <a href="/"> <img src="/frontend/my-img/footer-logo.png" alt="logo" style="width:174px; height:50px;" ></a>
                           </div>
                           <div class="tp-footer-widget-content">
                              <p>Titantally is a trusted accounting and financial services firm providing expert bookkeeping, tax, and payroll solutions. We help businesses and individuals stay organized, compliant, and audit-ready.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6">
                        <div class="tp-footer-widget tp-footer-2-col-2 mb-50">
                           <h3 class="tp-footer-widget-title">Quick links</h3>
                           <div class="tp-footer-widget-content">
                              <ul>
                                 <li><a href="/">Home</a></li>
                                 <li><a href="/#about">About Us</a></li>
                                 <li><a href="/#contact">Contact Us</a></li>
                              </ul>
                           </div>
                        </div> 
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="tp-footer-widget tp-footer-2-col-3">
                           <h3 class="tp-footer-widget-title">Get In Touch</h3>
                           <div class="tp-footer-widget-content">
                              <div class="tp-footer-widget-item">
                                 <span><i class="fa-regular fa-envelope"></i><a href="mailto:info@titantally.com">info@titantally.com</a></span>
                              </div>
                              <div class="tp-footer-widget-item">
                                 <span><i class="fa-solid fa-phone"></i><a href="tel:+0123456789">(+0) 123 456 789</a></span>
                              </div>
                              <div class="tp-footer-widget-item">
                                 <span><i class="fa-solid fa-location-dot"></i> 255 Sheet, City Name Home Land, NY</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tp-footer-copyright-area p-relative">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12 col-lg-6">
                        <div class="tp-footer-copyright-inner">
                           <p>© 2025 Powered by Titantally All Rights Reserved.</p>
                        </div>
                     </div>
                     <div class="col-md-12 col-lg-6">
                        <div class="tp-footer-copyright-inner text-lg-end">
                           <a href="/privacy-policy">Privacy Policy</a>
                           <a href="/terms-and-conditions">Terms And Condtions</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- footer area end -->
         <a href="tel:+1234567890" class="call-now-btn">
            <i class="fas fa-phone"></i>
         </a>

      <style>
         .call-now-btn {
         position: fixed;
         bottom: 30px;
         left: 30px;
         width: 60px;          /* circle width */
         height: 60px;         /* circle height */
         display: flex;
         align-items: center;
         justify-content: center;
         background: linear-gradient(90deg, #004D6E 0%, #00ACCC 100%);
         color: white;
         font-size: 26px;      /* icon size */
         border-radius: 50%;   /* makes it circular */
         box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
         text-decoration: none;
         transition: transform 0.2s, box-shadow 0.2s;
         z-index: 9999;
         }

         .call-now-btn:hover {
         transform: scale(1.1);
         box-shadow: 0 12px 25px rgba(0, 0, 0, 0.4);
         }

         @media (max-width: 768px) {
         .call-now-btn {
            width: 50px;
            height: 50px;
            font-size: 22px;
            bottom: 44px;
            right: 20px;
         }
         }
      </style>

      <!-- JS here -->
      <script src="/frontend/assets/js/vendor/jquery.js"></script>
      <script src="/frontend/assets/js/vendor/waypoints.js"></script>
      <script src="/frontend/assets/js/bootstrap-bundle.js"></script>
      <script src="/frontend/assets/js/meanmenu.js"></script>
      <script src="/frontend/assets/js/swiper-bundle.js"></script>
      <script src="/frontend/assets/js/slick.js"></script>
      <script src="/frontend/assets/js/jquery-appear.js"></script>
      <script src="/frontend/assets/js/jquery-knob.js"></script>
      <script src="/frontend/assets/js/magnific-popup.js"></script>
      <script src="/frontend/assets/js/nice-select.js"></script>
      <script src="/frontend/assets/js/purecounter.js"></script>
      <script src="/frontend/assets/js/countdown.js"></script>
      <script src="/frontend/assets/js/wow.js"></script>
      <script src="/frontend/assets/js/isotope-pkgd.js"></script>
      <script src="https://html.storebuild.shop/finbest-prv/finbest/assets/js/imagesloaded-pkgd.js"></script>
      <script src="/frontend/assets/js/ajax-form.js"></script>
      <script src="/frontend/assets/js/main.js"></script>
   </body>
</html>