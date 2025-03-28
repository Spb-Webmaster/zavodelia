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

<li
    class="menu-item  menu-item-has-children">
    <a href="#">Page</a>
    <ul class="sub-menu">
        <li
            class="menu-item menu-item-has-children">
            <a href="#">Portfolio</a>
            <ul class="sub-menu">
                <li
                    class="menu-item">
                    <a href="#">Portfolio Grid</a></li>
                <li id="menu-item-6355"
                    class="menu-item">
                    <a href="#">Portfolio Modern</a>
                </li>
            </ul>
        </li>
        <li
            class="menu-item menu-item-has-children">
            <a href="#">Service</a>
            <ul class="sub-menu">
                <li
                    class="menu-item">
                    <a href="#">Single Service</a></li>
            </ul>
        </li>

        <li id="menu-item-6360"
            class="menu-item">
            <a href="#">Team</a>
        </li>

    </ul>
</li>

<li
    class="menu-item">
    <a href="{{ route('contacts') }}">Контакты</a>
</li>
