@extends('layouts.layout')
<x-seo.meta
    title="{{ (isset($item->metatitle))? $item->metatitle : $item->title }}"
    description="{{ (isset($item->description))? $item->description : '' }}"
    keywords="{{ (isset($item->keywords))? $item->keywords : '' }}"
/>
@section('content')
    @include('page._partial._item')
@endsection

