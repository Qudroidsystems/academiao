@extends('layout.master')
@section('content')
         


     
        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            <div class="page-header__shape-1"></div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Services</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Our services</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->


          <!--About Three Start-->
            <section class="about-three">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="about-three__left">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline">ABOUT ACADEMIA O COLLEGE</span>
                                    <h2 class="section-title__title">Shaping minds today for a brighter tomorrow</h2>
                                </div>
                                <p class="about-three__text-1">
                                    At Academia O College, we believe education is more than acquiring knowledge — it is about nurturing character, inspiring innovation, and preparing future leaders. Our commitment is to provide quality learning experiences that empower students to excel academically and socially. 
                                </p>
                                <div class="about-three__creativity">
                                    {{-- <div class="icon">
                                        <span class="icon-bulb-business-idea"></span>
                                    </div> --}}
                                    <div class="text">
                                        <h3>Innovatio et Excellentia</h3>
                                    </div>
                                </div>
                                <p class="about-three__text-2">
                                    With dedicated teachers, modern facilities, and a supportive community, Academia O College offers a balanced approach to education — blending academics, creativity, and personal development. We prepare our students not just for exams, but for life.
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="about-three__right">
                                <div class="about-three__img">
                                    <img src="{{ asset('assets/assets/images/resources/logo.jpg')}}" alt="Academia O College Logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
@endsection