<li class="menu-item  {{ active_linkMenu(asset(route('home')))  }}">
    <a href="{{ route('home') }}">Главная</a>

</li>

<li class="menu-item {{ active_linkMenu(asset(route('companies')), 'find')  }}  menu-item-has-children">
    <a href="#">О нас</a>
    <ul class="sub-menu">

        @foreach($companies as $company)
            <li class="menu-item {{ active_linkMenu(asset(route('company', ['slug' => $company->slug ])), 'find')  }} ">
                <a href="{{ route('company', ['slug' => $company->slug ]) }}">{{ $company->title }}</a>
            </li>
        @endforeach

    </ul>
</li>

<li class="menu-item {{ active_linkMenu(asset(route('products')), 'find')  }}  menu-item-has-children">
    <a href="#">Производство</a>
    <ul class="sub-menu">


            <li class="menu-item {{ active_linkMenu(asset(route('products')), 'find')  }} ">
                <a href="{{route('products')}}">{{ config2('moonshine.product.title') }}</a>
            </li>
            <li class="menu-item {{ active_linkMenu(asset(route('prosthetics')), 'find')  }} ">
                <a href="{{route('prosthetics')}}">{{ config2('moonshine.prosthesis.title') }}</a>
            </li>

    </ul>
</li>

<li class="menu-item">
    <a href="#">Сообщества</a>
</li>

<li class="menu-item {{ active_linkMenu(asset(route('responces')), 'find')  }}">
    <a href="{{route('responces')}}">Отзывы</a>
</li>

<li class="menu-item {{ active_linkMenu(asset(route('trainings')), 'find')  }}  menu-item-has-children">
    <a href="#">Обучение</a>
    <ul class="sub-menu">

        @foreach($trainings as $training)
            <li class="menu-item {{ active_linkMenu(asset(route('training', ['slug' => $training->slug ])), 'find')  }} ">
                <a href="{{ ($training->url)? trim($training->url) : route('training', ['slug' => $training->slug ]) }}">{{ $training->title }}</a>
            </li>
        @endforeach

    </ul>
</li>

<li
    class="menu-item  {{ active_linkMenu(asset(route('contacts')))  }}">
    <a href="{{ route('contacts') }}">Контакты</a>
</li>
