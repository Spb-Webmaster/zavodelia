@extends('layouts.layout')
<x-seo.meta
    title="{{ (isset($item->metatitle))? $item->metatitle : $item->title }}"
    description="{{ (isset($item->description))? $item->description : '' }}"
    keywords="{{ (isset($item->keywords))? $item->keywords : '' }}"
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
                                class="current">{{ $item->title }}</span></ul>
                        <!-- .breadcrumbs -->
                    </div>
                </div>
            </div>
        </div>

    </div>

    <section
        class="background_F8F8F8 elementor-section elementor-top-section elementor-element elementor-section-boxed elementor-section-height-default elementor-section-height-default pad_t40 pad_b40">

        <div class="elementor-container elementor-column-gap-default">
        <div class="witr_section_title">
            <div class="witr_section_title_inner text-center pad_b24">
                <h1>{{ $item->title }}</h1>
                {!!  (isset($item->subtitle))?'<h2>' .  $item->subtitle . '</h2>' : ''  !!}
            </div>


        </div>
        </div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="desc">
                {!!  $item->desc!!}
            </div>
        </div>
    </section>
@endsection

