<div class="row justify-content-center">
    @foreach ($menus as $menu)
        <div class="col-sm-6 col-md-4">
            <div class="banner banner-cat">
                <a href="/danh-muc/{{ $menu->id }}-{{ Str::slug($menu->name, '-') }}.html">
                    <img src="{{ $menu->thumb }}" alt="Banner">
                </a>

                <div class="banner-content banner-content-overlay text-center">
                    <h3 class="banner-title font-weight-normal">{{ $menu->name }}</h3><!-- End .banner-title -->
                    <h4 class="banner-subtitle">125 Products</h4><!-- End .banner-subtitle -->
                    <a href="/danh-muc/{{ $menu->id }}-{{ Str::slug($menu->name, '-') }}.html" class="banner-link">SHOP
                        NOW</a>
                </div><!-- End .banner-content -->
            </div><!-- End .banner -->
        </div><!-- End .col-md-4 -->
    @endforeach
</div><!-- End .row -->
