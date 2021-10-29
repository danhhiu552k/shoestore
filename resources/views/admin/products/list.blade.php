@extends('admin.main')
@section('header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')

    <div class="card">
        <div class="card-header bg-primary">
            <h3 class=" text-center">{{ $title }}</h3>
        </div>
        @include('admin.alert')
        <div class="card-body">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 45px;">#</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Giá gốc</th>
                                <th>Ảnh</th>
                                <th class="text-center" style="width: 100px;">Active</th>
                                <th class="text-center">Ngày cập nhật</th>
                                <th style="width: 150px;">&ensp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            {!! \App\Helpers\Product::list($products) !!}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="text-center">Danh sách ảnh của 1 sản phẩm</h4>
            </div>

            <div class="panel-body">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="text-center" style="width: 45px;">#</th>
                                    <th>Ảnh</th>
                                    <th>Tên ảnh</th>
                                    <th class="text-center">Ngày cập nhật</th>
                                    <th style="width: 150px;">&ensp;</th>
                                </tr>
                                </thead>
                                <tbody id="multiple">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection


@section('footer')
    <script>
        $("div.table-responsive > table > tbody > tr > td").click(function () {
            // var customerId = $(this).attr('#id').html();
            var currentRow = $(this).closest("tr");
            var id = currentRow.find("td:eq(0)").text();
            $.ajax({
                type: 'GET',
                dataType: "JSON",
                url: '/admin/product/list-image/' + id + '',
                success: function (result) {
                    if (result.error === false) {
                        let n = result.product_images.length;
                        var html = '';
                        for (let i = 0; i < n; i++) {
                            html += '<tr>' +
                                '<td>' + result.product_images[i].id + '</td>' +
                                '<td><a href="' + result.product_images[i].image + '"  target="_blank"><img src="' + result.product_images[i].image + '" width="100px"></a></td>' +
                                '<td>' + result.product_images[i].image_name + '</td>' +
                                '<td>' + result.product_images[i].updated_at + '</td>' +
                                '<td class="text-center" >  ' +
                                '<a class="btn btn-primary btn-sm" style="margin-right: 1rem;" href=\"/admin/products-image/edit/' + result.product_images[i].id + '\">' +
                                '<i class="fas fa-edit"></i>' +
                                '</a>' +
                                '<a href="#" class="btn btn-danger btn-sm" onclick="removeRow(' + result.product_images[i].id + ' ,\'/admin/products-image/destroy\')">' +
                                '<i class="fas fa-trash"></i>' +
                                '</a>' +
                                '</td>'
                            '</tr>';


                        }
                        document.getElementById("multiple").innerHTML = html;
                    } else {
                        alert('Xóa lỗi vui lòng thử lại');
                    }
                }
            });
        });
    </script>

    <script src="/template/admin/js/main.js"></script>
@endsection
