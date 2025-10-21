@extends('layouts.layout')
<x-seo.meta
    title="{{ (config2('moonshine.prosthesis.metatitle'))?: config2('moonshine.prosthesis.title') }}"
    description="{{ config2('moonshine.prosthesis.description')  }}"
    keywords="{{ config2('moonshine.prosthesis.keywords')  }}"
/>
@section('content')
    <div class="robotil-counter-bg breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 txtc  text-center">
                    <div class="brpt brptsize">
                        <h1>{{ config2('moonshine.prosthesis.title') }}</h1>
                    </div>
                    <div class="breadcumb-inner">
                        <ul>Вы здесь!<i class="icofont-thin-right"></i>
                            <li><a href="{{route('home')}}">Главная</a></li>
                            <i class="icofont-thin-right"></i><span
                                class="current">{{ config2('moonshine.prosthesis.title') }}</span></ul>
                        <!-- .breadcrumbs -->
                    </div>
                </div>
            </div>
        </div>

    </div>


    <section
        class="elementor-section background_F9F9F9 elementor-top-section elementor-element  elementor-section-boxed elementor-section-height-default elementor-section-height-default pad_t40 pad_b40">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element techite-star-rating--align-center elementor-widget elementor-widget-witr_section_title">
                        <div class="elementor-widget-container">
                            <!-- title center -->
                            <div class="witr_section_title">

                                <div class="witr_section_title_inner text-center pad_b24">
                                    <h1>{{ config2('moonshine.prosthesis.title') }}</h1>
                                    {!!  (config2('moonshine.prosthesis.subtitle'))?'<h2>' . config2('moonshine.prosthesis.subtitle')  . '</h2>' : ''  !!}

                                </div>
                                <div class="desc pad_b22">
                                    {!!  config2('moonshine.prosthesis.desc') !!}
                                </div>

                            </div>

                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-e1fc4a4 elementor-widget elementor-widget-witr_event_section">
                        <div class="elementor-widget-container">
                            <div class="event_active event_style_adn_3 witr_3e event_all_color text-">
                                <div class="event_wrap">

                                    @if(count($items))
                                        @foreach($items as $item)
                                            <!-- single event -->
                                            <div class="col-lg-12 col-md-12 col-sm-12  witr_all_mb_30">
                                                <div class="row techite-single-event_adn witr_event_style_5 align_item_center">
                                                        <!-- BLOG THUMB -->
                                                    <div class="col-lg-3 col-md-6">

                                                        <div class="techite-event-thumb_adn">

                                                         <a href="{{ route('product', ['slug' => $item->slug]) }}">
                                                             @if($item->img)
                                                                    <img fetchpriority="high" decoding="async" width="420"
                                                                         height="315"
                                                                         src="{{ Storage::url($item->img) }}"
                                                                         class="attachment-techite-event-default size-techite-event-default wp-post-image"
                                                                    >
                                                             @else
                                                                    <img fetchpriority="high" decoding="async" width="250"
                                                                         height="148"
                                                                         src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABkAAD/4QMpaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgV2luZG93cyIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDowQ0RFODI3REFFNUMxMUYwODNFNUJDODI0ODFCOTU1MyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDowQ0RFODI3RUFFNUMxMUYwODNFNUJDODI0ODFCOTU1MyI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjBDREU4MjdCQUU1QzExRjA4M0U1QkM4MjQ4MUI5NTUzIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjBDREU4MjdDQUU1QzExRjA4M0U1QkM4MjQ4MUI5NTUzIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+/+4ADkFkb2JlAGTAAAAAAf/bAIQAAQEBAQEBAQEBAQEBAQEBAQEBAQEB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"
                                                                         class="attachment-techite-event-default size-techite-event-default wp-post-image"
                                                                    >
                                                             @endif
                                                         </a>


                                                        </div>
                                                    </div>


                                                    <div class="col-lg-7 col-md-9">
                                                        <!-- BLOG TITLE -->
                                                        <div class="event-page-title_adn ">
                                                            <h2>
                                                                <a href="{{ route('product', ['slug' => $item->slug]) }}">{{ $item->title }}</a></h2>
                                                        </div>
                                                        <!-- content -->
                                                        <div class="witr_content_event">
                                                       {!!   $item->short_desc  !!}
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-2 col-md-6">
                                                        <!-- Goal -->
                                                        <div class="witr_event_btn btn_all_color">
                                                            <a href="{{ route('product', ['slug' => $item->slug]) }}">Подробнее</a>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <!-- single event -->
                                        @endforeach
                                    @endif




                                </div>
                            </div>
                            <!-- START PAGINATION -->

                        </div>
                    </div>

                    <div class="desc pad_b10 pad_t10">
                        {!!  config2('moonshine.prosthesis.desc2') !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

