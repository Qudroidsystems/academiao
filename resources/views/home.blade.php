@extends('layout.master')
@section('content')
            <!--Main Slider Start-->
            <section class="main-slider-three clearfix">
                <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                    "effect": "fade",
                    "pagination": {
                    "el": "#main-slider-pagination",
                    "type": "bullets",
                    "clickable": true
                    },
                    "navigation": {
                    "nextEl": "#main-slider__swiper-button-next",
                    "prevEl": "#main-slider__swiper-button-prev"
                    },
                    "autoplay": {
                    "delay": 5000
                    }}'>
                    <div class="swiper-wrapper">
    
                        <div class="swiper-slide">
                            <div class="image-layer-three"
                                style="background-image: url({{ asset('assets/assets/images/backgrounds/bg1.jpg')}});"></div>
                            <!-- /.image-layer -->
    
                            <div class="main-slider-three__shape-1"></div>
                            <div class="main-slider-three__shape-2"></div>
    
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="main-slider-three__content">
                                            <h2 class="main-slider-three__title">Welcome to Academia O College<br> </h2>
                                            <p class="main-slider-three__text">where innovation meets excellence
                                               
                                            </p>
                                            {{-- <div class="main-slider-three__btn-box">
                                                <a href="about.html')}}"
                                                    class="thm-btn main-slider__btn main-slider-two__btn">Creative
                                                    Solution</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="swiper-slide">
                            <div class="image-layer-three"
                                style="background-image: url({{ asset('assets/assets/images/backgrounds/bg1.jpg')}});"></div>
                            <!-- /.image-layer -->
    
                            <div class="main-slider-three__shape-1"></div>
                            <div class="main-slider-three__shape-2"></div>
    
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="main-slider-three__content">
                                            <h2 class="main-slider-three__title">The Future begins  <br>here</h2>
                                            <p class="main-slider-three__text">A future-focused High school  where academic excellence meets
                                                <br>innovation, character and vision</p>
                                            <div class="main-slider-three__btn-box">
                                                <a href="about.html')}}"
                                                    class="thm-btn main-slider__btn main-slider-two__btn">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        {{-- <div class="swiper-slide">
                            <div class="image-layer-three"
                                style="background-image: url({{ asset('assets/assets/images/backgrounds/bg1.jpg')}});"></div>
                            <!-- /.image-layer -->
    
                            <div class="main-slider-three__shape-1"></div>
                            <div class="main-slider-three__shape-2"></div>
    
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="main-slider-three__content">
                                            <h2 class="main-slider-three__title">We Create Digital <br> Benchmarks</h2>
                                            <p class="main-slider-three__text">We excel at digital strategy, branding and
                                                the development of digital <br> products such as websites, immersive
                                                experiences </p>
                                            <div class="main-slider-three__btn-box">
                                                <a href="about.html')}}"
                                                    class="thm-btn main-slider__btn main-slider-two__btn">Creative
                                                    Solution</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
     --}}
    
                    </div>
    
                    <!-- If we need navigation buttons -->
                    <div class="main-slider-three__nav">
                        <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                            <i class="icon-right-arrow-1"></i>
                        </div>
                        <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                            <i class="icon-left-arrow-1"></i>
                        </div>
                    </div>
    
                </div>
            </section>
            <!--Main Slider End-->
    
            <!--Services Three start-->
            <section class="services-three">
                <div class="container">
                    <div class="section-title text-center">
                        <span class="section-title__tagline">Schools @ Academia O</span>
                        <div class="section-title-shape">
                            <img src="{{ asset('assets/assets/images/shapes/section-title-shape-1.png')}}" alt="">
                        </div>
                        <h2 class="section-title__title">Our included service</h2>
                    </div>
                    <div class="row">
                        <!--services One single start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-one__single">
                                <div class="services-one__count"></div>
                                <div class="services-one__content">
                                    <div class="services-one__title">
                                        <h3><a href="branding.html')}}">Creative Brand <br> strategy</a></h3>
                                    </div>
                                    <div class="services-one__icon">
                                        <span class="icon-bulb-business-idea"></span>
                                    </div>
                                </div>
                                <p class="services-one__text">Lorem Ipsum generators on the Internet tend to repeat agency
                                    solution</p>
                                <div class="services-one__btn">
                                    <a href="branding.html')}}" class="thm-btn services-three__btn">Read more<i
                                            class="icon-right-arrow1"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--services One single End-->
                        <!--services One single start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="services-one__single">
                                <div class="services-one__count"></div>
                                <div class="services-one__content">
                                    <div class="services-one__title">
                                        <h3><a href="digital-marketing.html')}}">Digital solutions <br> solves Marketing</a>
                                        </h3>
                                    </div>
                                    <div class="services-one__icon">
                                        <span class="icon-business-management-target"></span>
                                    </div>
                                </div>
                                <p class="services-one__text">Lorem Ipsum generators on the Internet tend to repeat agency
                                    solution</p>
                                <div class="services-one__btn">
                                    <a href="digital-marketing.html')}}" class="thm-btn services-three__btn">Read more<i
                                            class="icon-right-arrow1"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--services One single End-->
                        <!--services One single start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                            <div class="services-one__single">
                                <div class="services-one__count"></div>
                                <div class="services-one__content">
                                    <div class="services-one__title">
                                        <h3><a href="digital-solutions.html')}}">Business Consulting <br> and solution</a></h3>
                                    </div>
                                    <div class="services-one__icon">
                                        <span class="icon-megaphone"></span>
                                    </div>
                                </div>
                                <p class="services-one__text">Lorem Ipsum generators on the Internet tend to repeat agency
                                    solution</p>
                                <div class="services-one__btn">
                                    <a href="digital-solutions.html')}}" class="thm-btn services-three__btn">Read more<i
                                            class="icon-right-arrow1"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--services One single End-->
                    </div>
                </div>
            </section>
            <!--Services One End-->
    
            <!--About Three Start-->
            <section class="about-three">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="about-three__left">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline">ABOUT COMPANY</span>
                                    <h2 class="section-title__title">We help people & organisations grow and succeed</h2>
                                </div>
                                <p class="about-three__text-1">We are a digital agency that helps brands become the digital
                                    benchmark.We create brand experiences that cut through the noise and meaningfully
                                    participate in people’s lives</p>
                                <div class="about-three__creativity">
                                    <div class="icon">
                                        <span class="icon-bulb-business-idea"></span>
                                    </div>
                                    <div class="text">
                                        <h3>We combine strategy with <br> creativity to build brand</h3>
                                    </div>
                                </div>
                                <p class="about-three__text-2">We are a global team of creative problem solvers designers
                                    entrepreneurs, enthusiastic cyclists, developers, bartenders,</p>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="about-three__right">
                                <div class="about-three__img">
                                    <img src="{{ asset('assets/assets/images/resources/logo.png')}}" alt="">
                                    <div class="about-three__digital-agency">
                                        <div class="about-three__digital-agency-icon">
                                            <span class="icon-megaphone"></span>
                                        </div>
                                        <h3 class="about-three__digital-agency-title">Best Digital
                                            Brand Strategy Agency</h3>
                                    </div>
                                </div>
                                <ul class="about-three__points-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Recruiting Services</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Digital Solutions solves your marketing</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Professional Development</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="about-three__global-solutions">
                                    <h3 class="about-three__global-solutions-title">We are a global workforce solutions</h3>
                                    <p class="about-three__global-solutions-text-1">We create brand experiences that cut
                                        through the noise</p>
                                    <p class="about-three__global-solutions-text-2">and meaningfully participate in people’s
                                        lives</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--About Three End-->
    
            <!--Consulting Two Start-->
            <section class="consulting-two">
                <div class="consulting-two__bg" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url({{ asset('assets/assets/images/backgrounds/bg1.jpg')}});"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="consulting-one__left">
                                <h3 class="consulting-one__title">We breathe marketing and exhale digital.</h3>
                                <p class="consulting-one__text">We breathe marketing and exhale digital adi piscing elit.
                                    sed do eiusmod tempor labore et dolore magna aliqua business. Duis aute irure dolor in
                                    reprehenderit in voluptate velit esse cillum </p>
                                <div class="consulting-one__bottom">
                                    <div class="consulting-one__Strategy">
                                        <div class="icon">
                                            <span class="icon-chart-diagram-pie"></span>
                                        </div>
                                        <div class="text">
                                            <h3>Consulting & Strategy</h3>
                                        </div>
                                    </div>
                                    <div class="consulting-one__count-box">
                                        <div class="consulting-one__count">
                                            <h3 class="odometer" data-count="863">00</h3>
                                            <span class="consulting-one__count-plus">+</span>
                                        </div>
                                        <div class="consulting-one__count-text">
                                            <p>Our Worlds <br> Clients</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="consulting-one__right">
                                <div class="consulting-one__right-form-box wow slideInRight" data-wow-delay="100ms"
                                    data-wow-duration="2500ms">
                                    <p class="consulting-one__form-sub-title">Get More Updates</p>
                                    <h3 class="consulting-one__form-title">Free Consultation</h3>
                                    <form action="https://themazine.com/mr/bcorz-html/index.html')}}" method="post" class="consulting-one__right-form">
                                        <div class="consulting-one__input-box">
                                            <input type="text" placeholder="Name" name="Name">
                                        </div>
                                        <div class="consulting-one__input-box">
                                            <input type="email" placeholder="Email Address" name="email">
                                        </div>
                                        <div class="consulting-one__input-box">
                                            <input type="text" placeholder="Phone Number" name="Phone">
                                        </div>
                                        <div class="consulting-one__input-box">
                                            <select class="selectpicker" aria-label="Default select example">
                                                <option selected>Subject</option>
                                                <option value="1">Subject 1</option>
                                                <option value="2">Subject 2</option>
                                                <option value="3">Subject 3</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="thm-btn consulting-one__btn">Consultation</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Consulting Two End-->
    
            @include('layout.inc.whychooseus')
    
            <!--Project One start-->
            <section class="project-three">
                <div class="container">
                    <div class="project-one__top">
                        <div class="section-title text-center">
                            <span class="section-title__tagline">Our Project</span>
                            <div class="section-title-shape">
                                <img src="{{ asset('assets/assets/images/shapes/section-title-shape-1.png')}}" alt="">
                            </div>
                            <h2 class="section-title__title">Success work sotries</h2>
                        </div>
                    </div>
                    <div class="project-one__bottom">
                        <div class="project-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                            "loop": true,
                            "autoplay": false,
                            "margin": 30,
                            "nav": false,
                            "dots": true,
                            "smartSpeed": 500,
                            "autoplayTimeout": 10000,
                            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                            "responsive": {
                                "0": {
                                    "items": 1
                                },
                                "768": {
                                    "items": 2
                                },
                                "992": {
                                    "items": 3
                                },
                                "1200": {
                                    "items": 3
                                }
                            }
                        }'>
                            <!--Project One Single Start-->
                            <div class="item">
                                <div class="project-one__single">
                                    <div class="project-one__img">
                                        <img src="{{ asset('assets/assets/images/project/project-1-1.jpg')}}" alt="">
                                    </div>
                                    <div class="project-one__content-box">
                                        <div class="project-one__content">
                                            <p class="project-one__sub-title">Social marketing</p>
                                            <h3 class="project-one__title"><a href="project-details.html')}}">Social
                                                    strategy</a></h3>
                                        </div>
                                        <div class="project-one__btn">
                                            <a href="project-details.html')}}"><i class="icon-right-arrow-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Project One Single End-->
                            <!--Project One Single Start-->
                            <div class="item">
                                <div class="project-one__single">
                                    <div class="project-one__img">
                                        <img src="{{ asset('assets/assets/images/project/project-1-2.jpg')}}" alt="">
                                    </div>
                                    <div class="project-one__content-box">
                                        <div class="project-one__content">
                                            <p class="project-one__sub-title">Social marketing</p>
                                            <h3 class="project-one__title"><a href="project-details.html')}}">Brand strategy</a>
                                            </h3>
                                        </div>
                                        <div class="project-one__btn">
                                            <a href="project-details.html')}}"><i class="icon-right-arrow-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Project One Single End-->
                            <!--Project One Single Start-->
                            <div class="item">
                                <div class="project-one__single">
                                    <div class="project-one__img">
                                        <img src="{{ asset('assets/assets/images/project/project-1-3.jpg')}}" alt="">
                                    </div>
                                    <div class="project-one__content-box">
                                        <div class="project-one__content">
                                            <p class="project-one__sub-title">Social marketing</p>
                                            <h3 class="project-one__title"><a href="project-details.html')}}">Digital
                                                    marketing</a></h3>
                                        </div>
                                        <div class="project-one__btn">
                                            <a href="project-details.html')}}"><i class="icon-right-arrow-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Project One Single End-->
                            <!--Project One Single Start-->
                            <div class="item">
                                <div class="project-one__single">
                                    <div class="project-one__img">
                                        <img src="{{ asset('assets/assets/images/project/project-1-1.jpg')}}" alt="">
                                    </div>
                                    <div class="project-one__content-box">
                                        <div class="project-one__content">
                                            <p class="project-one__sub-title">Social marketing</p>
                                            <h3 class="project-one__title"><a href="project-details.html')}}">Social
                                                    strategy</a></h3>
                                        </div>
                                        <div class="project-one__btn">
                                            <a href="project-details.html')}}"><i class="icon-right-arrow-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Project One Single End-->
                            <!--Project One Single Start-->
                            <div class="item">
                                <div class="project-one__single">
                                    <div class="project-one__img">
                                        <img src="{{ asset('assets/assets/images/project/project-1-2.jpg')}}" alt="">
                                    </div>
                                    <div class="project-one__content-box">
                                        <div class="project-one__content">
                                            <p class="project-one__sub-title">Social marketing</p>
                                            <h3 class="project-one__title"><a href="project-details.html')}}">Brand strategy</a>
                                            </h3>
                                        </div>
                                        <div class="project-one__btn">
                                            <a href="project-details.html')}}"><i class="icon-right-arrow-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Project One Single End-->
                            <!--Project One Single Start-->
                            <div class="item">
                                <div class="project-one__single">
                                    <div class="project-one__img">
                                        <img src="{{ asset('assets/assets/images/project/project-1-3.jpg')}}" alt="">
                                    </div>
                                    <div class="project-one__content-box">
                                        <div class="project-one__content">
                                            <p class="project-one__sub-title">Social marketing</p>
                                            <h3 class="project-one__title"><a href="project-details.html')}}">Digital
                                                    marketing</a></h3>
                                        </div>
                                        <div class="project-one__btn">
                                            <a href="project-details.html')}}"><i class="icon-right-arrow-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Project One Single End-->
                            <!--Project One Single Start-->
                            <div class="item">
                                <div class="project-one__single">
                                    <div class="project-one__img">
                                        <img src="{{ asset('assets/assets/images/project/project-1-1.jpg')}}" alt="">
                                    </div>
                                    <div class="project-one__content-box">
                                        <div class="project-one__content">
                                            <p class="project-one__sub-title">Social marketing</p>
                                            <h3 class="project-one__title"><a href="project-details.html')}}">Social
                                                    strategy</a></h3>
                                        </div>
                                        <div class="project-one__btn">
                                            <a href="project-details.html')}}"><i class="icon-right-arrow-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Project One Single End-->
                            <!--Project One Single Start-->
                            <div class="item">
                                <div class="project-one__single">
                                    <div class="project-one__img">
                                        <img src="{{ asset('assets/assets/images/project/project-1-2.jpg')}}" alt="">
                                    </div>
                                    <div class="project-one__content-box">
                                        <div class="project-one__content">
                                            <p class="project-one__sub-title">Social marketing</p>
                                            <h3 class="project-one__title"><a href="project-details.html')}}">Brand strategy</a>
                                            </h3>
                                        </div>
                                        <div class="project-one__btn">
                                            <a href="project-details.html')}}"><i class="icon-right-arrow-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Project One Single End-->
                            <!--Project One Single Start-->
                            <div class="item">
                                <div class="project-one__single">
                                    <div class="project-one__img">
                                        <img src="{{ asset('assets/assets/images/project/project-1-3.jpg')}}" alt="">
                                    </div>
                                    <div class="project-one__content-box">
                                        <div class="project-one__content">
                                            <p class="project-one__sub-title">Social marketing</p>
                                            <h3 class="project-one__title"><a href="project-details.html')}}">Digital
                                                    marketing</a></h3>
                                        </div>
                                        <div class="project-one__btn">
                                            <a href="project-details.html')}}"><i class="icon-right-arrow-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Project One Single End-->
                            <!--Project One Single Start-->
                            <div class="item">
                                <div class="project-one__single">
                                    <div class="project-one__img">
                                        <img src="{{ asset('assets/assets/images/project/project-1-1.jpg')}}" alt="">
                                    </div>
                                    <div class="project-one__content-box">
                                        <div class="project-one__content">
                                            <p class="project-one__sub-title">Social marketing</p>
                                            <h3 class="project-one__title"><a href="project-details.html')}}">Social
                                                    strategy</a></h3>
                                        </div>
                                        <div class="project-one__btn">
                                            <a href="project-details.html')}}"><i class="icon-right-arrow-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Project One Single End-->
                            <!--Project One Single Start-->
                            <div class="item">
                                <div class="project-one__single">
                                    <div class="project-one__img">
                                        <img src="{{ asset('assets/assets/images/project/project-1-2.jpg')}}" alt="">
                                    </div>
                                    <div class="project-one__content-box">
                                        <div class="project-one__content">
                                            <p class="project-one__sub-title">Social marketing</p>
                                            <h3 class="project-one__title"><a href="project-details.html')}}">Brand strategy</a>
                                            </h3>
                                        </div>
                                        <div class="project-one__btn">
                                            <a href="project-details.html')}}"><i class="icon-right-arrow-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Project One Single End-->
                            <!--Project One Single Start-->
                            <div class="item">
                                <div class="project-one__single">
                                    <div class="project-one__img">
                                        <img src="{{ asset('assets/assets/images/project/project-1-3.jpg')}}" alt="">
                                    </div>
                                    <div class="project-one__content-box">
                                        <div class="project-one__content">
                                            <p class="project-one__sub-title">Social marketing</p>
                                            <h3 class="project-one__title"><a href="project-details.html')}}">Digital
                                                    marketing</a></h3>
                                        </div>
                                        <div class="project-one__btn">
                                            <a href="project-details.html')}}"><i class="icon-right-arrow-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Project One Single End-->
                        </div>
                    </div>
                </div>
            </section>
            <!--Project Three End-->
    
           @include('layout.inc.counters')
    
           @include('layout.inc.testimonials')
    
           @include('layout.inc.team')
    
@endsection