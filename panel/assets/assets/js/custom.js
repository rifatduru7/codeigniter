$(document).ready(function () {
    $(".remove-btn").click(function (e) {
      var  $data_url = $(this).data("url");

        swal({
            title: 'Emin misiniz?',
            text: "Silinen veriler geri getirilemeyebilir!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText : 'İptal',
            confirmButtonText: 'Evet, sil!'
        }).then(function(result) {
            if (result.value) {
                window.location.href =$data_url;
            }
        });
    })

})