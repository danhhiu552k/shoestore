<div class="row justify-content-center">
    @foreach ($banners as $banner)
        <div class="col-sm-6 col-md-4">
            <div class="banner banner-cat">
                <a href="/danh-muc/{{ $banner->id }}-{{ Str::slug($banner->name, '-') }}.html">
                    <img src="{{ $banner->thumb }}" alt="Banner">
                </a>

                <div class="banner-content banner-content-overlay text-center">
                    <h3 class="banner-title font-weight-normal">{{ $banner->name }}</h3><!-- End .banner-title -->
                    <h4 class="banner-subtitle">125 Products</h4><!-- End .banner-subtitle -->
                    <a href="/danh-muc/{{ $banner->id }}-{{ Str::slug($banner->name, '-') }}.html"
                        class="banner-link">SHOP
                        NOW</a>
                </div><!-- End .banner-content -->
            </div><!-- End .banner -->
        </div><!-- End .col-md-4 -->
    @endforeach
</div><!-- End .row -->
