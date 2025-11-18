<div class="col-md-8 col-sm-9 col-xs-8">
    <div class="tx_mmenu_together">
        <nav class="techite_menu nologo_menu13">
            <ul id="menu-main-menu" class="sub-menu">

                @include('include.templates.menu._partial.menu')


            </ul>
        </nav>

        <!-- menu button -->
        <div class="donate-btn-header">
            @auth()
                <a class="dtbtn" href="{{ route('cabinet') }}">Кабинет</a>

            @else
                <a class="dtbtn" href="{{ route('login') }}">Войти</a>
            @endauth
        </div>

    </div>
</div>
