<!DOCTYPE html>
<?php 
    session_start();
    if(!isset($_SESSION['name'])){
        header('Location: login.php');
    }
?>
<html>
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Trang chủ</title>
        <link rel="stylesheet" href="..\src\styleforportal.css">
        <style>
        	*{
        		padding: 0;
        		margin:none;
        	}
        	#thongtincanhan{
        		width: 300px;
        		border-right: 8px solid #b5b6b5;
        		font-size: 13px;
        	}
        	#thongtincanhan tr td{
        		padding:2px;


        	}
        	#thongtin{
        		font-size: 16px;

        		border-bottom: 8px solid #b5b6b5;
        	}

        	#thongtinlienlac tr td{
        		font-size: 13px;
        	}
        </style>
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
                            <li id="out"><a href=".\out.php">Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
                <div style="clear: both;"></div>
                <div id="content">
                    <div id="ct_func">
                        <ul>
                            <li><a href="#">Trang của bạn</a></li>
                            <li><a href="thongtincanhan.php">Thông tin cá nhân</a></li>
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
                    	 <?php
					        $conn = mysqli_connect("localhost","root","","datadau") or die("Fail connect");
					        $sql = "SELECT * FROM thongtincanhan";
					        $result = mysqli_query($conn,$sql);
					        $row = mysqli_fetch_assoc($result);
					        
					    ?>
					    
						<table id="thongtincanhan" style="float: left;margin: 80px 0px 0px 100px">
							<tr><td id="thongtin" colspan="2" style="background:#189eff ;padding-left: 18px;">Thông tin sinh viên</td></tr>
							<tr>
								<td><b> Mã số sinh viên:<?php echo $row['masv']; ?></b></td>
								<td></td>
							</tr>
							
							<tr>
								<td><b> Họ và tên : <?php echo $_SESSION['name']; ?></b></td>
							</tr>
							<tr>
								<td><b> Ngày sinh : <?php echo $row['ngaysinh']; ?></b></td>
								<td></td>
							</tr>
							<tr>
								<td><b> Nơi sinh : <?php echo $row['noisinh']; ?></b></td>
								<td></td>
							</tr>
							<tr>
								<td><b> Giới tính : <?php echo $row['gioitinh']; ?></b></td>
								<td></td>
							</tr>
							<tr>
								<td><b> Dân tộc : <?php echo $row['dantoc']; ?></b></td>
								<td></td>
							</tr>
							<tr>
								<td><b> Số CMND : <?php echo $row['cmnd']; ?></b></td>
								<td></td>
							</tr>
							<tr>
								<td><b> Tôn giáo : <?php echo $row['tongiao']; ?></b></td>
								<td></td>
							</tr>
							<tr>
								<td><b> Đối tượng : <?php echo $row['doituong']; ?></b></td>
								<td></td>
							</tr>
							<tr>
								<td><b> Khu vực : <?php echo $row['khuvuc']; ?></b></td>
								<td></td>
							</tr>
							<tr>
								<td><b> Diện ưu tiên : <?php echo $row['dienuutien']; ?></b></td>
								<td></td>
							</tr>
							<tr>
								<td><b> Đoàn/Đảng : <?php echo $row['dang']; ?></b></td>
								<td></td>
							</tr>
							<tr>
								<td><b> Loại sinh viên : <?php echo $row['loaisv']; ?></b></td>
								<td></td>
							</tr>
							<tr>
								<td><b> Tình trạng học : <?php echo $row['tinhtrang']; ?></b></td>
								<td></td>
							</tr>
							<tr>
								<td><b> Tỉnh/Thành phố : <?php echo $row['thanhpho']; ?></b></td>
								<td></td>
							</tr>
							<tr>
								<td><b> Quận/Huyện : <?php echo $row['quan']; ?></b></td>
								<td></td>
							</tr>
							<tr>
								<td><b> Quốc gia : <?php echo $row['quocgia']; ?></b></td>
								<td></td>
							</tr>
							<tr>
								<td><b> Địa chỉ thường trú : <?php echo $row['diachithuongtru']; ?></b></td>
								<td></td>
							</tr>

						</table>
						<img src="image5.jpg" width="150" height="200" style="float: left;margin: 80px 0px 20px 100px">
						<table id="thongtinlienlac" width="350px" style="position: absolute;left: 47%;top: 77%">
							<tr><td id="thongtin" colspan="2" style="background:#ff3300;color: white; padding: 5px 5px 5px 22px"><b>Thông tin liên lạc</b></td></tr>
							<tr>
								<td style="color: #ff0000"><b> * Thông tin liên lạc của sinh viên	</b></td>
								<td></td>
							</tr>
							<tr>
								<td><b> - Điện thoại : <?php echo $row['dienthoai']; ?></b></td>
								<td></td>
							</tr>
							<tr>
								<td><b> - Di động : <?php echo $row['didong']; ?></b></td>
								<td></td>
							</tr>
							<tr>
								<td><b> - Email : <?php echo $row['email']; ?></b></td>
								<td></td>
							</tr>
							<tr>
								<td><b> - Địa chỉ : <?php echo $row['diachithuongtru']; ?></b></td>
								<td></td>
							</tr>
							<tr>
								<td style="color: #ff0000"><b> * Thông tin liên lạc người thân của sinh viên	</b></td>
								<td></td>
							</tr>
							<tr>
								<td><b> - Họ tên : Nguyễn Văn ba</b></td>
								<td></td>
							</tr>
							<tr>
								<td><b> - Điện thoại :<?php echo $row['dienthoai']; ?></b></td>
								<td></td>
							</tr>
							<tr>
								<td><b> - Địa chỉ :<?php echo $row['diachithuongtru']; ?></b></td>
								<td></td>
							</tr>
						</table>
                    </div>
                    <div id="ct_sidebar">

                    </div>
                </div>

                <div id="footer"></div>
        </div>
    </body>

</html>