$(document).ready(function () {
    $(document).on('click', '.addCat_btn', function (e) {
        e.preventDefault();

        // var qty = $(this).closest('.product_data').find('.input-qty').val();
        var cat_id = $(this).val();

        // alert(cat_id);
        $.ajax({
            method: "POST",
            url: "u_book.php",
            data: {
                "cat_id": cat_id,
                "scope": "add"
            },
            success: function(response) {
                if(response == 201){
                    alertify.success("Place booked");

                }
                else if(response == "existing"){
                    alertify.success("Place already booked");

                }
                
                else if(response == 401){
                    alertify.success("Login to continue");

                }
                else if(response == 500){
                    alertify.success("Something went wrong");

                }
            }
        });
        
    });

    
    $(document).on('click','.deleteCat_btn',function() {
        var s_id = $(this).val();
        // alert(s_id);
        $.ajax({
            method: "POST",
            url: "u_book.php",
            data: {
                "s_id": s_id,
                "scope": "delete"
            },
            success: function(response) {
                if(response == 200){
                    alertify.success("Place removed successfully");
                    $('#mycat').load(location.href + " #mycat");
                }
                else{
                    alertify.success(response);

                }
            }
        });
    });
    

});