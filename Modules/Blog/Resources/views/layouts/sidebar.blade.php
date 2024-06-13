<li class="nav-item @if(str_contains(Route::currentRouteName(), 'blogs')) active @endif">
    <a class="collapsed" href="#0" class="" data-bs-toggle="collapse" data-bs-target="#blogs" aria-controls="blogs" aria-expanded="true" aria-label="Toggle navigation">
        <span class="icon text-center">
            <i style="width: 20px;" class="fa-regular fa-images mx-2"></i>
        </span>
        <span class="text">{{ __('trans.blogs') }}</span>
    </a>
    <ul id="blogs" class="dropdown-nav mx-4 collapse" style="">
        <li><a href="{{ route('admin.blogs.index') }}">{{ __('trans.viewAll') }}</a></li>
        <li><a href="{{ route('admin.blogs.create') }}">{{ __('trans.add') }}</a></li>
    </ul>
</li>