<footer class="forth_bg">
    <section class="pt-4">
        <div class="container  mt-5">
            <div class="row mt-3">
                <div class="col-md-2">
                    <a class="navbar-brand me-0" href="{{ route('client.home') }}">
                        <img src="{{ asset(setting('logo')) }}" alt="logo" style="max-width: 82px" width="82px" height="42px" class="img-fluid animate__animated animate__rotateIn">
                        <img src="{{ asset('assets/img/logo-text-'.lang().'.png') }}" alt="logo" style="max-width: 129px" width="129px" height="42px" class="animate__animated animate__rollIn">
                        
                    </a>
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 mx-auto mb-4">
                            <h6 class="nav-link mb-4 point" onclick="window.location.href='{{ route('client.home') }}'">
                                @lang('trans.home')
                            </h6>

                            <h6 class="nav-link mb-4 point" onclick="window.location.href='{{ route('client.gallery') }}'">
                                @lang('trans.gallery')
                            </h6>
                            <h6 class="nav-link mb-4 point" onclick="window.location.href='{{ route('client.contact') }}'">
                                @lang('trans.contact_us')
                            </h6>
                        </div>
                        <div class="col-lg-3 col-md-3 mx-auto mb-4">

                            <h6 class="nav-link mb-4 point" onclick="window.location.href='{{ route('client.blog') }}'">
                                @lang('trans.blog')
                            </h6>

                            <h6 class="nav-link mb-4 point" onclick="window.location.href='{{ route('client.privacy') }}'">
                                @lang('trans.privacy')
                            </h6>

                            <h6 class="nav-link mb-4 point" onclick="window.location.href='{{ route('client.terms') }}'">
                                @lang('trans.terms')
                            </h6>
                        </div>

                        <div class="col-lg-3 col-md-3 mx-auto mb-4">

                            <h6 class="fw-bold mb-4">@lang('trans.contact_us')</h6>
                            <p>
                                <h6 onclick="window.open('mailto:{{ setting('email') }}')" class="point"><i class="fas mx-2 fa-envelope me-3"></i>{{ setting('email') }}</h6>
                            </p>
                            <p>
                                <h6 onclick="window.open('tel:{{ setting('phone') }}')" class="point"><i class="fas mx-2 fa-phone me-3"></i>{{ setting('phone') }}</h6>
                            </p>
                        
                        </div>
                        <div class="col-lg-3 col-md-3 mx-auto mb-4">

                            <h6 class="fw-bold mb-4">@lang('trans.followUs')</h6>
                            <div class="d-flex">
                                <a target="_blank" href="{{ setting('facebook') }}" class="me-4 nav-link">
                                    <i class="fab fa-facebook-f h4"></i>
                                </a>
                                <a target="_blank" href="{{ setting('twitter') }}" class="me-4 nav-link">
                                    <i class="fab fa-twitter h4"></i>
                                </a>
                                <a target="_blank" href="{{ setting('instagram') }}" class="me-4 nav-link">
                                    <i class="fab fa-instagram h4"></i>
                                </a>
                                <a target="_blank" href="{{ setting('snapchat') }}" class="me-4 nav-link">
                                    <i class="fab fa-snapchat h4"></i>
                                </a>
                                <a target="_blank" href="https://wa.me/{{ setting('whatsapp') }}" class="me-4 nav-link">
                                    <i class="fab fa-whatsapp h4"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <div class="text-center p-4" style="border-top: 1px solid var(--main--color);">
        @lang('trans.copyrights')
        <a target="_blank" href="https://emcan-group.com/" class="text-decoration-none  nav-link">
            @lang('trans.emcan')
        </a>

    </div>

</footer>

<script>
    const images = document.querySelectorAll('img');
    
    images.forEach(img => {
      img.addEventListener('error', function handleError() {
        const defaultImage =
          '{{ asset('logo.png') }}';
            img.src = defaultImage;
      });
    });
</script>
