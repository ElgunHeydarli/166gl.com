

<!-- sweet.js *******************************************-->
$(function(){
    $(document).on('click','#sil',function(e){
        e.preventDefault();
        var link = $(this).attr("href");


        Swal.fire({
            title: 'Əminsiniz?',
            text: "Məlumatlar silinəcək",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: 'İmtina et',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Bəli, Sil'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link
                Swal.fire(
                    'Silindi!',
                    'Məlumatlar silindi.',
                    'success'
                )
            }
        })


    });

});
<!-- sweet.js *******************************************-->
