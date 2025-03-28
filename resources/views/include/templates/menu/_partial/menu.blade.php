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

<li class="menu-item">
    <a href="#">Производство</a>
</li>

<li class="menu-item">
    <a href="#">Сообщества</a>
</li>

<li class="menu-item">
    <a href="#">Отзывы</a>
</li>

<li class="menu-item">
    <a href="#">Обучение</a>
</li>

<li
    class="menu-item  {{ active_linkMenu(asset(route('contacts')))  }}">
    <a href="{{ route('contacts') }}">Контакты</a>
</li>
