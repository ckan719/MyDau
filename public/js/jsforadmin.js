$(document).ready(function() {
    autoload = setTimeout(function() {
        $('#on-tt').trigger('click');
    }, 1);
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
    $('#on-tc').on('click', function() {
        location.replace('/');
    });

});

function themTinTuc() {
    if ($('#img').val() == "" || $('#tieude').val() == "" || $('#nguon').val() == "" || $('#noidung').val() == "") {
        alert("Nhập đầy đủ thông tin");
        return;
    }
    var str = $('#img').val();
    str = str.split('\\').pop().split('/').pop();

    $.ajax({
        type: "post",
        url: "../xuli/handlingthemtintuc.php",
        data: {
            img: str,
            tieude: $('#tieude').val(),
            nguon: $('#nguon').val(),
            noidung: $('#noidung').val()
        },
        dataType: "text",
        success: function(response) {
            if (response == "1") alert("Thêm thành công");
            else {
                alert("Thêm thất bại");
            }
        }
    });
}

function themSuKien() {
    if ($('#img').val() == "" || $('#tieude').val() == "" || $('#date').val() == "" || $('#noidung').val() == "") {
        alert("Nhập đầy đủ thông tin");
        return;
    }
    var str = $('#img').val();
    str = str.split('\\').pop().split('/').pop();

    $.ajax({
        type: "post",
        url: "../xuli/handlingthemsukien.php",
        data: {
            img: str,
            tieude: $('#tieude').val(),
            date: $('#date').val(),
            noidung: $('#noidung').val()
        },
        dataType: "text",
        success: function(response) {
            if (response == "1") alert("Thêm thành công");
            else {
                alert("Thêm thất bại");
            }
        }
    });
}

function themTaiKhoan() {
    if ($('#username').val() == "" || $('#name').val() == "" || $('#pass').val() == "" || $('#level').val() == "") {
        alert("Nhập đầy đủ thông tin");
        return;
    }

    $.ajax({
        type: "post",
        url: "../xuli/handlingthemtaikhoan.php",
        data: {
            username: $('#username').val(),
            name: $('#name').val(),
            pass: $('#pass').val(),
            level: $('#level').val()
        },
        dataType: "text",
        success: function(response) {
            if (response == "1") alert("Thêm thành công");
            else {
                alert("Thêm thất bại");
            }
        }
    });
}


function themGioiThieu() {
    if ($('#img').val() == "") {
        alert("Nhập đầy đủ thông tin");
        return;
    }
    var str = $('#img').val();
    str = str.split('\\').pop().split('/').pop();

    $.ajax({
        type: "post",
        url: "../xuli/handlingthemgioithieu.php",
        data: {
            img: str,
            link: $('#limg').val()
        },
        dataType: "text",
        success: function(response) {
            if (response == "1") alert("Thêm thành công");
            else {
                alert("Thêm thất bại");
            }
        }
    });
}

function resetform() {
    location.reload();
}