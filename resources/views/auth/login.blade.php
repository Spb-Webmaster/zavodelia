@extends('layouts.layout')
<x-seo.meta
    title="Войти в личный кабинет  - Акционерное общество «Завод Элия»"
    description="Войти в личный кабинет |  АО «Завод Элия» основан в 1967 году с наименованием завод «Микрокомпонент»"
    keywords="Войти в личный кабинет"
/>
@section('content')
    <div class="auth">
        <div class="block">
            <div class="formLogin__padd">
                <div class="formLogin">
                    <div class="formLogin__wrapp">
                        <div class="formLogin__enter">

                            @include('auth.forms.f-login')

                        </div>
                    </div>
                </div><!--.formLogin-->
            </div>

        </div>
    </div>
@endsection
