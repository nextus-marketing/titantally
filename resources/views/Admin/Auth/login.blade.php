@extends('layouts.frontend')
@section('title')
    404 Not Found |Titan Tally
@endsection
@section('content')

<section class="breadcrumb__area pt-165 pb-150 p-relative z-index-1 fix" data-bg-color="#16243E">
   <div class="breadcrumb__bg" data-background="/frontend/my-img/bredcrum.png"></div>
   <div class="container">
      <div class="row align-items-center">
         <div class="col-sm-6">
            <div class="breadcrumb__content">
               <h3 class="breadcrumb__title">404 Not Found</h3>
            </div>
         </div>
         <div class="col-sm-6">
            <div class="breadcrumb__content">
            <div class="breadcrumb__list text-center text-sm-end">
               <span><a href="/">Home</a></span>
               <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
               <span>404 Not Found</span>
            </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- ================= 404 CONTENT ================= -->
<section class="tp-process-area pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="tp-process-title-wrapper-2 text-center">

                    <!-- Big 404 -->
                    <span style="
                        font-size:120px;
                        font-weight:800;
                        color:#16243E;
                        display:block;
                        line-height:1;
                    ">
                        404
                    </span>

                    <!-- Main Title -->
                    <h3 class="tp-section-title mt-20 mb-15">
                        Oops! Page Not Found
                    </h3>

                    <!-- Description -->
                    <p class="mb-40" style="font-size:18px; color:#6b7280;">
                        The page you’re looking for doesn’t exist or has been moved.
                        Please check the URL or return to the homepage.
                    </p>

                    <!-- Button -->
                    <div class="tp-about-btn-wrapper-2 d-flex justify-content-center">
                        <div class="tp-about-btn-2">
                            <a href="/" class="tp-btn">
                              <i class="fa-solid fa-house"></i>  Back To Home
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
