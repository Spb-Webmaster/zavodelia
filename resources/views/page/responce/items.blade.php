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
                        <h1>{{ config2('moonshine.setting.title_responce') }}</h1>
                    </div>
                    <div class="breadcumb-inner">
                        <ul>Вы здесь!<i class="icofont-thin-right"></i>
                            <li><a href="{{route('home')}}">Главная</a></li>
                            <i class="icofont-thin-right"></i><span
                                class="current">{{ config2('moonshine.setting.title_responce') }}</span></ul>
                        <!-- .breadcrumbs -->
                    </div>


                </div>
            </div>
        </div>

    </div>

    <section class="w_100">

        <div class="block pad_t40 pad_b40">

            <div class="populated">
                <div class="witr_section_title">
                    <div class="witr_section_title_inner text-center pad_b24">
                        <h1>{{ config2('moonshine.setting.contact_name_company') }}</h1>
                        <h2>{{ config2('moonshine.setting.titlemini_responce') }}</h2>
                    </div>
                    <div class="desc pad_b22 text-center">
                        {{ config2('moonshine.setting.text_responce') }}
                    </div>

                    <div class="witr_btn_style witr_btn_style_right">
                        <div class="witr_btn_sinner">
                            @auth()
                                <a href="#responce_send" data-fancybox class="witr_bbtn">Добавить отзыв</a>
                            @else
                                <div class="witr_btn_sinner">
                                    <a href="{{ route('login') }}" class="witr_bbtn">Авторизоваться для отзыва</a>
                                </div>
                            @endauth
                        </div>
                    </div>
                </div>
                @if(count($items))

                    <div class="container">
                        <div class="d-flex flex-wrap">
                            @foreach($items as $item)
                                <div class="em_single_testimonial witr_testi_s_9">

                                    <div class="em_testi_content">
                                        <div class="em_testi_text">
                                            <!-- content -->
                                           {!! $item->desc !!}</div>
                                    </div>


                                    <div class="em_test_thumb">


                                    @if(isset($item->author->avatar))
                                            <img loading="lazy" decoding="async" width="73" height="73"
                                                 src="{{Storage::url($item->author->avatar)}}"
                                                 class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="">
                                    @endif


                                    </div>

                                    <div class="em_testi_title">
                                        <h2>{{ $item->author->user }} <span>{{ $item->author->email }}</span></h2>
                                    </div>
                                    <div class="em_testi_logo">
                                        <div class="em_testilogo_inner">

                                        </div>
                                    </div>


                                </div>
                            @endforeach


                        </div>
                    </div>

                @endif
            </div>
        </div>

    </section>

@endsection


