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

@endsection
