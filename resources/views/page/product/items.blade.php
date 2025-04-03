@extends('layouts.layout')
<x-seo.meta
    title=""
    description=""
    keywords=""
/>
@section('content')
    <div class="robotil-counter-bg breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 txtc  text-center">
                    <div class="brpt brptsize">
                        <h1>{{ config2('moonshine.product.title') }}</h1>
                    </div>
                    <div class="breadcumb-inner">
                        <ul>Вы здесь!<i class="icofont-thin-right"></i>
                            <li><a href="{{route('home')}}">Главная</a></li>
                            <i class="icofont-thin-right"></i><span
                                class="current">{{ config2('moonshine.product.title') }}</span></ul>
                        <!-- .breadcrumbs -->
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>
    <section class="elementor-section background_F9F9F9 elementor-top-section elementor-element  elementor-section-boxed elementor-section-height-default elementor-section-height-default pad_t40 pad_b40">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element techite-star-rating--align-center elementor-widget elementor-widget-witr_section_title" >
                        <div class="elementor-widget-container">
                            <!-- title center -->
                            <div class="witr_section_title">

                                <div class="witr_section_title_inner text-center pad_b24">
                                    <h1>{{ config2('moonshine.product.title') }}</h1>
                                    {!!  (config2('moonshine.product.subtitle'))?'<h2>' . config2('moonshine.product.subtitle')  . '</h2>' : ''  !!}
                                </div>
                                <div class="desc pad_b22">
                                    {!!  config2('moonshine.product.desc') !!}
                                </div>


                            </div>

                        </div>
                    </div>
                    <div class="elementor-element elementor-element-e1fc4a4 elementor-widget elementor-widget-witr_event_section" >
                        <div class="elementor-widget-container">
                            <div class="event_active event_style_adn_3 witr_3e event_all_color text-">
                                <div class="event_wrap">

                                    <!-- single event -->
                                    <div class="col-lg-12 col-md-12 col-sm-12  witr_all_mb_30">
                                        <div class="row techite-single-event_adn witr_event_style_5 align_item_center">
                                            <div class="col-lg-3 col-md-6">
                                                <!-- BLOG THUMB -->
                                                <div class="techite-event-thumb_adn">
                                                    <a href="https://demo.themexbd.com/wpi/techite/em_event/xmas-day-parade/"> <img fetchpriority="high" decoding="async" width="420" height="315" src="https://demo.themexbd.com/wpi/techite/wp-content/uploads/2020/12/robotil-s4.jpg" class="attachment-techite-event-default size-techite-event-default wp-post-image" alt="" srcset="https://demo.themexbd.com/wpi/techite/wp-content/uploads/2020/12/robotil-s4.jpg 800w, https://demo.themexbd.com/wpi/techite/wp-content/uploads/2020/12/robotil-s4-300x225.jpg 300w, https://demo.themexbd.com/wpi/techite/wp-content/uploads/2020/12/robotil-s4-768x576.jpg 768w" sizes="(max-width: 420px) 100vw, 420px"></a>
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <!-- BLOG TITLE -->
                                                <div class="event-page-title_adn ">
                                                    <h2><a href="https://demo.themexbd.com/wpi/techite/em_event/xmas-day-parade/">Xmas Day Parade</a></h2>
                                                </div>
                                                <!-- content -->
                                                <div class="witr_content_event">
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by</p>											</div>

                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="witr_event_d">



                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-6">
                                                <!-- Goal -->
                                                <div class="witr_event_btn btn_all_color">
                                                    <a href="https://demo.themexbd.com/wpi/techite/em_event/xmas-day-parade/">Read More </a>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <!-- single event -->
                                    <div class="col-lg-12 col-md-12 col-sm-12  witr_all_mb_30">
                                        <div class="row techite-single-event_adn witr_event_style_5 align_item_center">
                                            <div class="col-lg-3 col-md-6">
                                                <!-- BLOG THUMB -->
                                                <div class="techite-event-thumb_adn">
                                                    <a href="https://demo.themexbd.com/wpi/techite/em_event/real-entrepreneurship/"> <img decoding="async" width="420" height="315" src="https://demo.themexbd.com/wpi/techite/wp-content/uploads/2020/12/robotil-s3.jpg" class="attachment-techite-event-default size-techite-event-default wp-post-image" alt="" srcset="https://demo.themexbd.com/wpi/techite/wp-content/uploads/2020/12/robotil-s3.jpg 800w, https://demo.themexbd.com/wpi/techite/wp-content/uploads/2020/12/robotil-s3-300x225.jpg 300w, https://demo.themexbd.com/wpi/techite/wp-content/uploads/2020/12/robotil-s3-768x576.jpg 768w" sizes="(max-width: 420px) 100vw, 420px"></a>
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <!-- BLOG TITLE -->
                                                <div class="event-page-title_adn ">
                                                    <h2><a href="https://demo.themexbd.com/wpi/techite/em_event/real-entrepreneurship/">Real Entrepreneurship</a></h2>
                                                </div>
                                                <!-- content -->
                                                <div class="witr_content_event">
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by</p>											</div>

                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="witr_event_d">



                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-6">
                                                <!-- Goal -->
                                                <div class="witr_event_btn btn_all_color">
                                                    <a href="https://demo.themexbd.com/wpi/techite/em_event/real-entrepreneurship/">Read More </a>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <!-- single event -->
                                    <div class="col-lg-12 col-md-12 col-sm-12  witr_all_mb_30">
                                        <div class="row techite-single-event_adn witr_event_style_5 align_item_center">
                                            <div class="col-lg-3 col-md-6">
                                                <!-- BLOG THUMB -->
                                                <div class="techite-event-thumb_adn">
                                                    <a href="https://demo.themexbd.com/wpi/techite/em_event/technology-meeting/"> <img decoding="async" width="420" height="315" src="https://demo.themexbd.com/wpi/techite/wp-content/uploads/2020/12/robotil-s2.jpg" class="attachment-techite-event-default size-techite-event-default wp-post-image" alt="" srcset="https://demo.themexbd.com/wpi/techite/wp-content/uploads/2020/12/robotil-s2.jpg 800w, https://demo.themexbd.com/wpi/techite/wp-content/uploads/2020/12/robotil-s2-300x225.jpg 300w, https://demo.themexbd.com/wpi/techite/wp-content/uploads/2020/12/robotil-s2-768x576.jpg 768w" sizes="(max-width: 420px) 100vw, 420px"></a>
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <!-- BLOG TITLE -->
                                                <div class="event-page-title_adn ">
                                                    <h2><a href="https://demo.themexbd.com/wpi/techite/em_event/technology-meeting/">Technology Meeting</a></h2>
                                                </div>
                                                <!-- content -->
                                                <div class="witr_content_event">
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by</p>											</div>

                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="witr_event_d">



                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-6">
                                                <!-- Goal -->
                                                <div class="witr_event_btn btn_all_color">
                                                    <a href="https://demo.themexbd.com/wpi/techite/em_event/technology-meeting/">Read More </a>
                                                </div>

                                            </div>
                                        </div>

                                    </div>



                                </div>
                            </div>
                            <!-- START PAGINATION -->

                        </div>
                    </div>

                    <div class="desc pad_b10 pad_t10">
                        {!!  config2('moonshine.product.desc') !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

