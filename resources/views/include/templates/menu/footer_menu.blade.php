<ul id="menu-service-request" class="menu">
    @foreach($companies as $company)
        <li class="menu-item menu-item-type-custom menu-item-object-custom {{ active_linkMenu(asset(route('company', ['slug' => $company->slug ])), 'find')  }} ">
            <a href="{{ route('company', ['slug' => $company->slug ]) }}">{{ $company->title }}</a>
        </li>
    @endforeach
</ul>
