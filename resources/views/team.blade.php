@extends('layout.master')
@section('content')
           <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            <div class="page-header__shape-1"></div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Our Team</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Our Team</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Team Page Start-->
        <section class="team-page">
           
  <!--Team One Start-->
  <section class="team-one">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Our Best Expert</span>
            <div class="section-title-shape">
                <img src="{{ asset('assets/assets/images/shapes/section-title-shape-1.png')}}" alt="">
            </div>
            <h2 class="section-title__title">Meet the team members</h2>
        </div>
        <div class="row">

              
   <!--Team One Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                <div class="team-one__single">
                    <div class="team-one__inner">
                        <div class="team-one__shape-1 float-bob-y"></div>
                        <div class="team-one__img">
                            <img src="{{ asset('assets/assets/images/team/4.jpg')}}" alt="">
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3 class="team-one__name"><a href="#">Mr Philip Oklu</a></h3>
                            <p class="team-one__sub-title">Principal</p>
                            {{-- <div class="team-one__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!--Team One Single End-->
  
            <!--Team One Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <div class="team-one__single">
                    <div class="team-one__inner">
                        <div class="team-one__shape-1 float-bob-y"></div>
                        <div class="team-one__img">
                            <img src="{{ asset('assets/assets/images/team/1.jpg')}}" alt="">
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3 class="team-one__name"><a href="#">Mrs Kofoworola Njoku </a></h3>
                            <p class="team-one__sub-title">Vice Principal</p>
                            {{-- <div class="team-one__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!--Team One Single End-->
           
            <!--Team One Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                <div class="team-one__single">
                    <div class="team-one__inner">
                        <div class="team-one__shape-1 float-bob-y"></div>
                        <div class="team-one__img">
                            <img src="{{ asset('assets/assets/images/team/3.jpg')}}" alt="">
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3 class="team-one__name"><a href="#">Lawal Harafat</a></h3>
                            <p class="team-one__sub-title">Student President</p>
                            {{-- <div class="team-one__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!--Team One Single End-->
        </div>
    </div>
</section>
<!--Team One End-->
        </section>
        <!--Team Page End-->

   

 
@endsection