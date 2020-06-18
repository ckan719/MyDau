function myFcsubmit() {
    $.ajax({
        url: "./headling.php",
        type: "post",
        dataType: "text",
        data: {
            dname: $("#username").val(),
            dpass: $("#password").val()
        },
        success: function(res) {
            if (res == "1") {
                location.replace("./dauportal.php");
            } else {
                alert("Sai tài khoản hoặc mật khẩu!");
            }
        }
    });
}