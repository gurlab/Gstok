<script>
    $('.delete-confirmation').click(function(event) {
        var form =  $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
            title: `${name}`,
            text: "malzemesini silmek istediğinize emin misiniz?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
            form.submit();
            }
        });
    });
</script>
