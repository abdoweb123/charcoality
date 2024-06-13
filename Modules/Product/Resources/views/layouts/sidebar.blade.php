<li class="nav-item @if(str_contains(Route::currentRouteName(), 'products')) active @endif">
    <a class="collapsed" href="#0" class="" data-bs-toggle="collapse" data-bs-target="#products" aria-controls="products" aria-expanded="true" aria-label="Toggle navigation">
        <span class="icon text-center">
            <i style="width: 20px;" class="fa-regular fa-images mx-2"></i>
        </span>
        <span class="text">{{ __('trans.products') }}</span>
    </a>
    <ul id="products" class="dropdown-nav mx-4 collapse" style="">
        <li><a href="{{ route('admin.products.index') }}">{{ __('trans.viewAll') }}</a></li>
        <li><a href="{{ route('admin.products.create') }}">{{ __('trans.add') }}</a></li>
    </ul>
</li>