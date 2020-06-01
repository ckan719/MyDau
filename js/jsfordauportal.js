$(document).ready(function() {
    $('#thongtin').on('click', function() {
        $.ajax({
            type: "post",
            url: "../form/formthongtincanhan.php",
            dataType: "text",
            success: function(response) {
                $('.ct-content').html(response);
            }
        });
    });
});