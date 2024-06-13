<li class="nav-item @if(str_contains(Route::currentRouteName(), 'lines')) active @endif">
    <a class="collapsed" href="#0" class="" data-bs-toggle="collapse" data-bs-target="#lines" aria-controls="lines" aria-expanded="true" aria-label="Toggle navigation">
        <span class="icon text-center">
            <i style="width: 20px;" class="fa-regular fa-images mx-2"></i>
        </span>
        <span class="text">{{ __('trans.lines') }}</span>
    </a>
    <ul id="lines" class="dropdown-nav mx-4 collapse" style="">
        <li><a href="{{ route('admin.lines.index') }}">{{ __('trans.viewAll') }}</a></li>
        <li><a href="{{ route('admin.lines.create') }}">{{ __('trans.add') }}</a></li>
    </ul>
</li>