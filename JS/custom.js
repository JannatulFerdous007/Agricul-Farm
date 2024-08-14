
$(document).ready(function () {

    $(document).on('click', '.delcategory_btn', function (e) {
        e.preventDefault();

        var id = $(this).val();
        alert(id);
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover it!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        method: "POST",
                        url: "../Admin/a_btnCode.php",
                        data: {
                            'category_id': id,
                            'delcategory_btn': true
                        },
                        success: function (response) {
                            if (response == 200) {
                                swal("Done!", "Category deleted successfully!", "success");
                                $("#category_table").load(location.href + " #category_table")
                            }
                            else if (response == 500) {
                                swal("Error!", "Something went wrong!", "error");
                            }
                        }

                    });
                }
            });
    });


    $(document).on('click', '.delService_btn', function (e) {

        e.preventDefault();

        var id = $(this).val();
        //alert(id);
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover it!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        method: "POST",
                        url: "a_btnCode.php",
                        data: {
                            'service_id': id,
                            'delService_btn': true
                        },
                        success: function (response) {
                            if (response == 200) {
                                swal("Done!", "Survice deleted successfully!", "success");
                                $("#service_table").load(location.href + " #service_table")
                            }
                            else if (response == 500) {
                                swal("Error!", "Something went wrong!", "error");
                            }
                        }

                    });
                }
            });
    });


    

});