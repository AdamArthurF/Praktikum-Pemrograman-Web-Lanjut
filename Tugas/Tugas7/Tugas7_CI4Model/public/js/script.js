$(document).ready(function () {

    if (document.getElementById('flash-message')) {
        Swal.fire(
            'Data Mahasiswa',
            $('#flash-message').data('message'),
            'success'
          )
    }


    $('.tombol-hapus').click(function (event) {
        event.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $(this).parent().submit();
            }
        })
    });
});