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
                                            <h2 class="main-slider-three__title">Welcome to Academia O College<br> where innovation meets excellence</h2>
                                            <p class="main-slider-three__text">We are inovaton and goal driven as we
                                                the development of digital <br> deliver quality and top notch education 
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
                        <span class="section-title__tagline">Our Services Offer</span>
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
                    style="background-image: url({{ asset('assets/assets/images/backgrounds/consulting-two-bg-1.jpg')}});"></div>
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
    
            <!--Why Choose Two Start-->
            <section class="why-choose-two">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="why-choose-two__left">
                                <div class="why-choose-two__img-1 wow slideInLeft" data-wow-delay="100ms"
                                    data-wow-duration="2500ms">
                                    <img src="{{ asset('assets/assets/images/resources/why-choose-2-1.jpg')}}" alt="">
                                    <div class="why-choose-two__img-2">
                                        <img src="{{ asset('assets/assets/images/resources/why-choose-2-2.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="why-choose-two__right">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline">WHY CHOOSE</span>
                                    <div class="section-title-shape">
                                        <img src="{{ asset('assets/assets/images/shapes/section-title-shape-1.png')}}" alt="">
                                    </div>
                                    <h2 class="section-title__title">Why Choose Our
                                        Digital agency</h2>
                                </div>
                                <p class="why-choose-two__text-1">We are a digital agency that helps brands become the
                                    digital benchmark.We create brand experiences that cut through the noise and
                                    meaningfully participate in people’s lives</p>
                                <h3 class="why-choose-two__title">Quality Support</h3>
                                <p class="why-choose-two__text-2">Quis exercit ullamo laboris nisi aliqui com dolorq. iru
                                    qui <br> nostrud exercit ullamo.</p>
                                <div class="why-choose-two__points-box">
                                    <ul class="why-choose-two__points list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-check"></span>
                                            </div>
                                            <div class="text">
                                                <p>Quality Support</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-check"></span>
                                            </div>
                                            <div class="text">
                                                <p>Team Managment</p>
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
                                    <div class="why-choose-two__icon-box">
                                        <span class="icon-business-management-presentation"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Why Choose Two End-->
    
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
    
            <!--Counter Two Start-->
            <section class="counter-two">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <ul class="counter-one__points list-unstyled">
                                <li>
                                    <div class="counter-one__points-box">
                                        <div class="counter-one__icon">
                                            <span class="icon-newspaper-news"></span>
                                        </div>
                                        <div class="counter-one__count-box">
                                            <h3 class="odometer" data-count="11">00</h3>
                                            <span class="counter-one__letter">k</span>
                                        </div>
                                    </div>
                                    <p class="counter-one__text">Projects Completed</p>
                                </li>
                                <li>
                                    <div class="counter-one__points-box">
                                        <div class="counter-one__icon">
                                            <span class="icon-flower-smile"></span>
                                        </div>
                                        <div class="counter-one__count-box">
                                            <h3 class="odometer" data-count="99">00</h3>
                                            <span class="counter-one__letter">%</span>
                                        </div>
                                    </div>
                                    <p class="counter-one__text">Happy Customers</p>
                                </li>
                                <li>
                                    <div class="counter-one__points-box">
                                        <div class="counter-one__icon">
                                            <span class="icon-rating"></span>
                                        </div>
                                        <div class="counter-one__count-box">
                                            <h3 class="odometer" data-count="10">00</h3>
                                            <span class="counter-one__letter">m</span>
                                        </div>
                                    </div>
                                    <p class="counter-one__text">3,280 avg rating</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--Counter Two End-->
    
            <!--Testimonial Two Start-->
            <div class="testimonial-two">
                <div class="container">
                    <div class="testimonial-two__top">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="testimonial-two__left">
                                    <div class="section-title text-left">
                                        <span class="section-title__tagline">Testimonial</span>
                                        <div class="section-title-shape">
                                            <img src="{{ asset('assets/assets/images/shapes/section-title-shape-1.png')}}" alt="">
                                        </div>
                                        <h2 class="section-title__title">Sotries from client.</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="testimonial-two__right">
                                    <p class="testimonial-two__right-text">There are many variations of passages of Lorem
                                        Ipsum
                                        available, but the majority have suffered alteration Lorem Ipsum as their default
                                        model
                                        text
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-two__bottom">
                        <div class="testimonial-two__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                            "loop": true,
                            "autoplay": false,
                            "margin": 30,
                            "nav": false,
                            "dots": false,
                            "smartSpeed": 500,
                            "autoplayTimeout": 10000,
                            "navText": ["<span class=\"icon-left-arrow-1\"></span>","<span class=\"icon-right-arrow-1\"></span>"],
                            "responsive": {
                                "0": {
                                    "items": 1
                                },
                                "768": {
                                    "items": 1
                                },
                                "992": {
                                    "items": 2
                                },
                                "1200": {
                                    "items": 2
                                }
                            }
                        }'>
                            <!--Testimonial Two Single Start-->
                            <div class="item">
                                <div class="testimonial-two__single">
                                    <div class="testimonial-two__inner">
                                        <div class="testimonial-two__client-img-box">
                                            <div class="testimonial-two__client-img">
                                                <img src="{{ asset('assets/assets/images/testimonial/testimonial-2-1.jpg')}}" alt="">
                                            </div>
                                            <div class="testimonial-two__icon">
                                                <span class="icon-quote"></span>
                                            </div>
                                        </div>
                                        <div class="testimonial-two__client-info">
                                            <div class="testimonial-two__rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h3 class="testimonial-two__client-name">John wiliam tom</h3>
                                            <p>Brand Strategy Data Analytics</p>
                                        </div>
                                    </div>
                                    <p class="testimonial-two__text">“We’re positively impatient and constantly searching
                                        for ways to inspire and challenge there are many variations of passages of Lorem
                                        Ipsum available, but the majority have suffered alteration”</p>
                                </div>
                            </div>
                            <!--Testimonial Two Single End-->
                            <!--Testimonial Two Single Start-->
                            <div class="item">
                                <div class="testimonial-two__single">
                                    <div class="testimonial-two__inner">
                                        <div class="testimonial-two__client-img-box">
                                            <div class="testimonial-two__client-img">
                                                <img src="{{ asset('assets/assets/images/testimonial/testimonial-2-2.jpg')}}" alt="">
                                            </div>
                                            <div class="testimonial-two__icon">
                                                <span class="icon-quote"></span>
                                            </div>
                                        </div>
                                        <div class="testimonial-two__client-info">
                                            <div class="testimonial-two__rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h3 class="testimonial-two__client-name">Tony kiaam ron</h3>
                                            <p>Brand architecture</p>
                                        </div>
                                    </div>
                                    <p class="testimonial-two__text">“We’re positively impatient and constantly searching
                                        for ways to inspire and challenge there are many variations of passages of Lorem
                                        Ipsum available, but the majority have suffered alteration”</p>
                                </div>
                            </div>
                            <!--Testimonial Two Single End-->
                        </div>
                    </div>
                </div>
            </div>
            <!--Testimonial Two End-->
    
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
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <div class="team-one__single">
                                <div class="team-one__inner">
                                    <div class="team-one__shape-1 float-bob-y"></div>
                                    <div class="team-one__img">
                                        <img src="{{ asset('assets/assets/images/team/team-1-1.jpg')}}" alt="">
                                    </div>
                                    <div class="team-one__content">
                                        <div class="team-one__rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="team-one__name"><a href="team-details.html')}}">Jack Da Conaz</a></h3>
                                        <p class="team-one__sub-title">Business Consulting expert</p>
                                        <div class="team-one__social">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Team One Single End-->
                        <!--Team One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="team-one__single">
                                <div class="team-one__inner">
                                    <div class="team-one__shape-1 float-bob-y"></div>
                                    <div class="team-one__img">
                                        <img src="{{ asset('assets/assets/images/team/team-1-2.jpg')}}" alt="">
                                    </div>
                                    <div class="team-one__content">
                                        <div class="team-one__rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="team-one__name"><a href="team-details.html')}}">Chopa Kendalo</a></h3>
                                        <p class="team-one__sub-title">Business Consulting expert</p>
                                        <div class="team-one__social">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </div>
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
                                        <img src="{{ asset('assets/assets/images/team/team-1-3.jpg')}}" alt="">
                                    </div>
                                    <div class="team-one__content">
                                        <div class="team-one__rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3 class="team-one__name"><a href="team-details.html')}}">Goplin ka chu</a></h3>
                                        <p class="team-one__sub-title">Business Consulting expert</p>
                                        <div class="team-one__social">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Team One Single End-->
                    </div>
                </div>
            </section>
            <!--Team One End-->
    
            <!--Blog One Start-->
            <section class="blog-one">
                <div class="container">
                    <div class="blog-one__top">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8">
                                <div class="blog-one__top-left">
                                    <div class="section-title text-left">
                                        <span class="section-title__tagline">Our Blog Post</span>
                                        <div class="section-title-shape">
                                            <img src="{{ asset('assets/assets/images/shapes/section-title-shape-1.png')}}" alt="">
                                        </div>
                                        <h2 class="section-title__title">Latest post from the blog</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4">
                                <div class="blog-one__top-right">
                                    <div class="blog-one__btn-box">
                                        <a href="blog.html')}}" class="thm-btn">More News<i class="icon-right-arrow1"></i></a>
                                        <p>Our weekly post See more grounds</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!--Blog One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <div class="blog-one__single">
                                <div class="blog-one__img-box">
                                    <div class="blog-one__img">
                                        <img src="{{ asset('assets/assets/images/blog/blog-1-1.jpg')}}" alt="">
                                        <a href="blog-details.html')}}">
                                            <span class="news-one__plus"></span>
                                        </a>
                                    </div>
                                    <div class="blog-one__date">
                                        <p>12</p>
                                        <span>Aug</span>
                                    </div>
                                </div>
                                <div class="blog-one__content">
                                    <ul class="blog-one__meta list-unstyled">
                                        <li>
                                            <a href="blog-details.html')}}"><i class="icon-user-1"></i>By Admin</a>
                                        </li>
                                        <li>
                                            <a href="blog-details.html')}}"><i class="icon-folder-1"></i>Marketing</a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-one__title"><a href="blog-details.html')}}">What a Digital Marketing Agency
                                            Should Do</a>
                                    </h3>
                                    <div class="blog-one__bottom">
                                        <div class="blog-one__btn">
                                            <a href="blog-details.html')}}">Read more<i class="icon-right-arrow1"></i></a>
                                        </div>
                                        <div class="blog-one__comment">
                                            <a href="blog-details.html')}}"><i class="icon-image-comment"></i>10 Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Blog One Single End-->
                        <!--Blog One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="blog-one__single">
                                <div class="blog-one__img-box">
                                    <div class="blog-one__img">
                                        <img src="{{ asset('assets/assets/images/blog/blog-1-2.jpg')}}" alt="">
                                        <a href="blog-details.html')}}">
                                            <span class="news-one__plus"></span>
                                        </a>
                                    </div>
                                    <div class="blog-one__date">
                                        <p>12</p>
                                        <span>Aug</span>
                                    </div>
                                </div>
                                <div class="blog-one__content">
                                    <ul class="blog-one__meta list-unstyled">
                                        <li>
                                            <a href="blog-details.html')}}"><i class="icon-user-1"></i>By Admin</a>
                                        </li>
                                        <li>
                                            <a href="blog-details.html')}}"><i class="icon-folder-1"></i>Marketing</a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-one__title"><a href="blog-details.html')}}">Curabitur id nisi at nulla
                                            volutpat vulputate</a>
                                    </h3>
                                    <div class="blog-one__bottom">
                                        <div class="blog-one__btn">
                                            <a href="blog-details.html')}}">Read more<i class="icon-right-arrow1"></i></a>
                                        </div>
                                        <div class="blog-one__comment">
                                            <a href="blog-details.html')}}"><i class="icon-image-comment"></i>10 Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Blog One Single End-->
                        <!--Blog One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog-one__single">
                                <div class="blog-one__img-box">
                                    <div class="blog-one__img">
                                        <img src="{{ asset('assets/assets/images/blog/blog-1-3.jpg')}}" alt="">
                                        <a href="blog-details.html')}}">
                                            <span class="news-one__plus"></span>
                                        </a>
                                    </div>
                                    <div class="blog-one__date">
                                        <p>12</p>
                                        <span>Aug</span>
                                    </div>
                                </div>
                                <div class="blog-one__content">
                                    <ul class="blog-one__meta list-unstyled">
                                        <li>
                                            <a href="blog-details.html')}}"><i class="icon-user-1"></i>By Admin</a>
                                        </li>
                                        <li>
                                            <a href="blog-details.html')}}"><i class="icon-folder-1"></i>Marketing</a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-one__title"><a href="#">Fusce non quam nec nibh condimentum iaculis</a>
                                    </h3>
                                    <div class="blog-one__bottom">
                                        <div class="blog-one__btn">
                                            <a href="blog-details.html')}}">Read more<i class="icon-right-arrow1"></i></a>
                                        </div>
                                        <div class="blog-one__comment">
                                            <a href="blog-details.html')}}"><i class="icon-image-comment"></i>10 Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Blog One Single End-->
                    </div>
                </div>
            </section>
            <!--Blog One End-->
@endsection