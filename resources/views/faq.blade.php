@extends('layout.master')
@section('content')
           <!--Page Header Start-->
           <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            <div class="page-header__shape-1"></div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Our Faq</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Our Faq</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--FAQ Page Start-->
        <section class="faq-page">
            <div class="container">
                <div class="faq-page__top">
                    <h3 class="faq-page__title">Find answers Our Asked Questions</h3>
                    <form class="faq-page__form">
                        <div class="faq-page__form-input-box">
                            <input type="search" placeholder="Search Question" name="search">
                            <button type="submit"><i class="icon-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="faq-page__bottom">
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <div class="accrodion active">
                            <div class="accrodion-title">
                                <h4>01 . Improve Performance and Efficiency</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                        voluptatem quia voluptas sit aspernatur aut odit aut fugit All the Lorem Ipsum
                                        generators on the Internet tend to repeat predefined chunks </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>02 . What are your typical timelines?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                        voluptatem quia voluptas sit aspernatur aut odit aut fugit All the Lorem Ipsum
                                        generators on the Internet tend to repeat predefined chunks </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>03 . What is the typical investment per client?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                        voluptatem quia voluptas sit aspernatur aut odit aut fugit All the Lorem Ipsum
                                        generators on the Internet tend to repeat predefined chunks </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>04 . How are you different from other brand & digital marketing agencies?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                        voluptatem quia voluptas sit aspernatur aut odit aut fugit All the Lorem Ipsum
                                        generators on the Internet tend to repeat predefined chunks</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>05 . Do you offer flexible payment terms?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                        voluptatem quia voluptas sit aspernatur aut odit aut fugit All the Lorem Ipsum
                                        generators on the Internet tend to repeat predefined chunks </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>06 . What should my digital marketing budget be?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                        voluptatem quia voluptas sit aspernatur aut odit aut fugit All the Lorem Ipsum
                                        generators on the Internet tend to repeat predefined chunks </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>07 . When will I see results from paid search advertising?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                        voluptatem quia voluptas sit aspernatur aut odit aut fugit All the Lorem Ipsum
                                        generators on the Internet tend to repeat predefined chunks </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--FAQ Page End-->
@endsection