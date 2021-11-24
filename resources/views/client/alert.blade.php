@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{{--@if (Session::has('error'))--}}
{{--    <div class="alert alert-danger">--}}
{{--        {{ Session::get('error') }}--}}
{{--    </div>--}}
{{--@endif--}}

{{--@if (Session::has('success'))--}}
{{--    <div class="alert alert-success">--}}
{{--        {{ Session::get('success') }}--}}
{{--    </div>--}}
{{--@endif--}}


@if(Session::has('cart_add_success'))
    <script>
        swal({
            title: "{{Session::get('cart_add_success')}}",
            icon: "success",
            button: true,
        });
        $('.swal-button').addClass('form-control btn-product test23');
        $('.test23').removeClass('swal-button');
    </script>

@endif

@if(Session::has('cart_add_error'))
    <script>
        swal({
            title: "{{Session::get('cart_add_error')}}",
            icon: "error",
            button: true,
        });
        $('.swal-button').addClass('form-control btn-product test23');
        $('.test23').removeClass('swal-button');
    </script>

@endif


@if(Session::has('order_success'))
    <script>
        swal({
            title: "{{Session::get('order_success')}}",
            icon: "success",
            button: true,
        });
        $('.swal-button').addClass('form-control btn-product test23');
        $('.test23').removeClass('swal-button');
    </script>

@endif


@if(Session::has('order_error'))
    <script>
        swal({
            title: "{{Session::get('order_error')}}",
            icon: "error",
            button: true,
        });
        $('.swal-button').addClass('form-control btn-product test23');
        $('.test23').removeClass('swal-button');
    </script>

@endif
