<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Trang chủ</title>
        <link rel="stylesheet" href="..\src\styleforportal.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
                            <li><a href="../public/trangchu.php">Trang chủ</a></li>
                            <li><a href="#">Chương trình đào tạo</a></li>
                            <li><a href="#">Môn học/học phần</a></li>
                            <li><a href="#">Quy chế, quy định</a></li>
                            <li><a href="#">Tra cứu văn bằng</a></li>
                            <li><a href="#">Hướng dẫn</a></li>
                        </ul>
                    </div>
                    <div id="login">
                        <ul>
                            <li id="in"><a href="#">
                            @if(session()->exists('username'))
                                {{session()->get('username')}}
                            @endif
                            </a></li>
                            <li id="out"><a href="/public/out">Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
                <div style="clear: both;"></div>
                <div id="content">
                    <div id="ct_func">
                        <ul>
                            <li><a href="#">Trang của bạn</a></li>
                            <li id = 'thongtin'><span>Thông tin cá nhân</span></li>
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
                    <div class = "ct-content">
                        
                    </div>
                </div>

                <div id="footer"></div>
        </div>
    </body>
    <script src="../js/jsfordauportal.js"></script>
</html>