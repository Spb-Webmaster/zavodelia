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
                        <h1>{{ $item->title }}</h1>
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
    @include('page._partial._item')
@endsection

