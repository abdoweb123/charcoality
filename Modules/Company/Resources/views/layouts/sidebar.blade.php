<li class="nav-item @if(str_contains(Route::currentRouteName(), 'companies')) active @endif">
    <a class="collapsed" href="#0" class="" data-bs-toggle="collapse" data-bs-target="#companies" aria-controls="companies" aria-expanded="true" aria-label="Toggle navigation">
        <span class="icon text-center">
            <i style="width: 20px;" class="fa-regular fa-images mx-2"></i>
        </span>
        <span class="text">{{ __('trans.companies') }}</span>
    </a>
    <ul id="companies" class="dropdown-nav mx-4 collapse" style="">
        <li><a href="{{ route('admin.companies.index') }}">{{ __('trans.viewAll') }}</a></li>
        <li><a href="{{ route('admin.companies.create') }}">{{ __('trans.add') }}</a></li>
    </ul>
</li>