<nav class="breadcrumb" style="background: url('{{ asset('assets/img/breadcrumb.png') }}')">
    <ul class="breadcrumb__list">
        <li class="breadcrumb__item"><a class="breadcrumb__link" href="{{ route('client.home') }}">@lang('trans.Home')</a></li>
        @if(isset($Page) && !isset($Name))
            <li class="breadcrumb__item breadcrumb__item_active">{{ $Page }}</li>
        @endif
        @if(isset($Name) && isset($Page) && isset($route))
            <li class="breadcrumb__item"><a class="breadcrumb__link" href="{{ $route }}">{{ $Page }}</a></li>
            <li class="breadcrumb__item breadcrumb__item_active">{{ $Name }}</li>
        @endif
    </ul>
</nav>
