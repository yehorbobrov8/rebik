<!-- Authentication Links -->
@if (Auth::guest())
    <li><a href="{{ url('/login') }}">Личный аккаунт</a></li>
@else
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color: rgba(0,0,0,0.95); font-weight: bold; font-size: 16px">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">
            <li><a href="{{ url('/logout') }}" style="color: rgba(0,0,0,0.95); font-weight: bold; font-size: 16px"><i class="fa fa-btn fa-sign-out"></i>Выйти</a></li>
        </ul>
    </li>
@endif
