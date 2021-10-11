$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

<<<<<<< HEAD
/**
 * Upload Image
 */
$('#upload').change(function() {
    const form = new FormData();
    form.append('file', $(this)[0].files[0]);

    $.ajax({
        processData: false,
        contentType: false,
        type: 'POST',
        dataType: 'JSON',
        data: form,
        url: '/admin/upload/services',
        success: function(results) {
            if (results.error == false) {
                $('#image_show').html('<a href="' + results.url + '" target="_blank">' +
                    '<img src="' + results.url + '" width="100px"></a>');

                $('#thumb').val(results.url);
            } else {
                alert('Upload File Lỗi');
            }
        }
    });
});


/**
 * 
 * @param {*} id : id cần xoá
 * @param {*} url : route đường link sửa phần nào
 */

function removeRow(id, url) {
    if (confirm('Bạn có muốn xóa thật không ?')) {
        $.ajax({
            type: 'DELETE',
            datatype: 'JSON',
            data: { id },
            url: url,
            success: function(result) {
                if (result.error == false) {
                    alert(result.message);
                    location.reload();

                } else {
=======
function removeRow(id,url)
{
    if(confirm('Bạn có muốn xóa thật không ?')){
        $.ajax({
            type:'DELETE',
            datatype:'JSON',
            data: { id },
            url:url,
            success:function(result){
                if (result.error == false){
                    alert(result.message);
                    location.reload();

                }
                else{
>>>>>>> 5d00466800bcb12153d78cc97c7f97cc0ed94aa1
                    alert('Xóa không thành công');
                }
            }
        })
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 5d00466800bcb12153d78cc97c7f97cc0ed94aa1
