@extends('layouts.layout')
<x-seo.meta
    title="Контакты  - Акционерное общество «Завод Элия»"
    description="Контакты для связи АО «Завод Элия» основан в 1967 году с наименованием завод «Микрокомпонент»"
    keywords="Контакты Микрокомпонент"
/>
@section('content')
    <div class="robotil-counter-bg breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 txtc  text-center">
                    <div class="brpt brptsize">
                        <h1>{!! config2('moonshine.contacts.title') !!}</h1>
                    </div>
                    <div class="breadcumb-inner">
                        <ul>Вы здесь!<i class="icofont-thin-right"></i>
                            <li><a href="{{route('home')}}">Главная</a></li>
                            <i class="icofont-thin-right"></i><span
                                class="current">{{ config2('moonshine.contacts.title') }}</span></ul>
                        <!-- .breadcrumbs -->
                    </div>
                </div>
            </div>
        </div>

    </div>



    <section
        class="elementor-section elementor-top-section elementor-element elementor-section-boxed elementor-section-height-default elementor-section-height-default pad_t40_important pad_b40_important">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element  elementor-widget elementor-widget-witr_section_s_image">
                        <div class="elementor-widget-container">

                            <div class="single_image_area">
                                <div class="single_image single_line_option  ">
                                    <!-- image -->
                                    <img loading="lazy" decoding="async" width="513" height="598" src="{{ Storage::url('images/about2.jpg') }}"
                                         class="attachment-large size-large wp-image-6888"
                                         alt="{{ config2('moonshine.setting.contact_mimi_name_company') }}"
                                         sizes="(max-width: 513px) 100vw, 513px">
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div
                class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-290d57c">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element  techite-star-rating--align-center elementor-widget elementor-widget-witr_section_title">
                        <div class="elementor-widget-container">
                            <!-- title left -->
                            <div class="witr_section_title">
                                <div class="witr_section_title_inner text-left">

                                    <h2>Контакты</h2>

                                    <h1>{{ config2('moonshine.setting.contact_mimi_name_company') }}</h1>
                                    <div class="desc">
                                        <p>{{ config2('moonshine.setting.contact_address') }}</p>
                                        {!!  config2('moonshine.contacts.desc') !!}
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <section
        class="background_F8F8F8 elementor-section elementor-top-section elementor-element elementor-section-boxed elementor-section-height-default elementor-section-height-default pad_t40 pad_b40 block">
        <div class="elementor-container elementor-column-gap-default">

            <div class="desc">
                {!!  config2('moonshine.contacts.desc2') !!}
            </div>
        </div>
    </section>


    <div class="__yandex_map_block">
        <div class="JFormFieldMap_wrapper" style="position: relative">
            <div style="" id="loader_wrapper" class="loader_wrapper loader_wrapper_form active ">
                <div style="color:#ffffff" class="loader_map">Loading...</div>
            </div>
            <div id="JFormFieldMap" class="JFormFieldMap" style="width: 100%; height: 450px"></div>
        </div>

        <script>
            var myMap;

            function getYaMap() {
                var myMap = new ymaps.Map("JFormFieldMap", {
                    center: [{{(config2('moonshine.contacts.yandex_map'))?config2('moonshine.contacts.yandex_map'):'43.939755, 42.506024'}}],
                    zoom: 10,
                    controls: ['zoomControl', 'typeSelector', 'fullscreenControl']
                }, {searchControlProvider: 'yandex#search'});
                myPlacemark = new ymaps.Placemark([{{ config2('moonshine.contacts.yandex_map') }}], {balloonContent: '{!!   (config2('moonshine.contacts.yandex_map_title'))?'<h5>'. config2('moonshine.contacts.yandex_map_title') .'</h5>': '<h5>'  . config2('moonshine.setting.contact_name_company') . '</h5>' !!}{!!  (config2('moonshine.contacts.yandex_map_desc'))?'<p>'. config2('moonshine.contacts.yandex_map_desc') .'</p>': '<p>'. config2('moonshine.setting.contact_address') .'</p>' !!}'}, {
                    iconLayout: 'default#image',
                    iconImageHref: '{{ asset('/storage/contacts/myIcon.svg') }}',
                    iconImageSize: [58, 55],
                    iconImageOffset: [-28, -48]
                });
                myMap.geoObjects.add(myPlacemark);
            }

        </script>
    </div><!--.__yandex_map_block-->

@endsection
