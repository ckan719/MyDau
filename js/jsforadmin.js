$(document).ready(function() {
    $('#on-tt').on('click', function() {
        $.ajax({
            type: "post",
            url: "../form/formthemtintuc.php",
            dataType: "text",
            data: {
                id: 1
            },
            success: function(response) {
                $('.showhere').html(response);
            }
        });
    });
    $('#on-sk').on('click', function() {
        $.ajax({
            type: "post",
            url: "../form/formthemsukien.php",
            dataType: "text",
            success: function(response) {
                $('.showhere').html(response);
            }
        });
    });
    $('#on-gt').on('click', function() {
        $.ajax({
            type: "post",
            url: "../form/formthemgioithieu.php",
            dataType: "text",
            data: {
                id: 1
            },
            success: function(response) {
                $('.showhere').html(response);
            }
        });
    });
    $('#on-tk').on('click', function() {
        $.ajax({
            type: "post",
            url: "../form/formthemtaikhoan.php",
            dataType: "text",
            data: {
                id: 1
            },
            success: function(response) {
                $('.showhere').html(response);
            }
        });
    });
    $('#on-ttcn').on('click', function() {
        $.ajax({
            type: "post",
            url: "../form/formthemthongtincanhan.php",
            dataType: "text",
            data: {
                id: 1
            },
            success: function(response) {
                $('.showhere').html(response);
            }
        });
    });


});