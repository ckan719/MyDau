<!DOCTYPE html>
<?php 
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location: ./login.php');
    }
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Trang chủ</title>
        <link rel="stylesheet" href="..\src\styleforportal.css">
    </head>
    <body>
        <div id="container">
        <div class="header">
            <div class="hd-l">
                <div class="hdl-l"><img src="../image/logo.png" alt="#"></div>
                <div class="hdl-r">
                    <h2>TRƯỜNG ĐẠI HỌC KIẾN TRÚC ĐÀ NẴNG</h2>
                    <p>DANANG ARCHITECTURE UNIVERSITY</p>
                </div>

            </div>
        </div>
            <div style="clear: both;"></div>

                <div id="menu">
                    <div id="menuleft" class="clmenu">
                        <ul>
                            <li><a href="#">Trang chủ</a></li>
                            <li><a href="#">Chương trình đào tạo</a></li>
                            <li><a href="#">Môn học/học phần</a></li>
                            <li><a href="#">Quy chế, quy định</a></li>
                            <li><a href="#">Tra cứu văn bằng</a></li>
                            <li><a href="#">Hướng dẫn</a></li>
                        </ul>
                    </div>
                    <div id="login">
                        <ul>
                            <li id="in"><a href="#"><?php echo $_SESSION['name']?></a></li>
                            <li id="out"><a href="./out.php">Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
                <div style="clear: both;"></div>
                <div id="content">
                    <div id="ct_func">
                        <ul>
                            <li><a href="#">Trang của bạn</a></li>
                            <li><a href="#">Thông tin cá nhân</a></li>
                            <li><a href="#">Chương trình đào tạo</a></li>
                            <li><a href="#">Đăng ký học phần</a></li>
                            <li><a href="#">Thời khóa biểu - Lịch thi</a></li>
                            <li><a href="#">Xem điểm</a></li>
                            <li><a href="#">Lịch toàn trường</a></li>
                            <li><a href="#">Ý kiến - thảo luận</a></li>
                            <li><a href="#">Nhận xét cố vấn</a></li>
                            <li><a href="#">Xin giấy xác nhận</a></li>
                            <li><a href="#">Tài khoản sinh viên</a></li>
                            <li><a href="#">Ghi danh môn tự chọn</a></li>
                            <li><a href="#">Hướng dẫn sử dụng</a></li>
                        </ul>
                    </div>
                    <div id="ct_cont">

                    </div>
                    <div id="ct_sidebar">

                    </div>
                </div>

                <div id="footer"></div>
        </div>
    </body>

</html>