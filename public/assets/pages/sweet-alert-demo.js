//Warning Message
$('#sa-warning').click(function () {
    Swal.fire({
        title: "Bạn chắc chắn muốn xóa?",
        text: "Bạn sẽ không thể khôi phục dữ liệu nếu đống ý xóa!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Có, hãy xóa nó!",
        cancelButtonText: "Không"
      }).then(function (result) {
        if (result.value) {
            Swal.fire({
                title: "Xóa thành công!",
                text: "Dữ liệu của bạn đã được xóa.",
                type: "success"
            }).then(function () {
                $('#delete-form').submit();
            });
        }
    });
});




