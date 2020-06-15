<?php 
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Trường Đại học Kiến trúc Đà Nẵng</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="..\src\stylefortrangchu.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


    <div class="container">
        <div class="menu-top">

            <i class="fad fa-home-alt"></i>
            <a class="mnt-l" href="">ĐẠI HỌC KIẾN TRÚC ĐÀ NẴNG</a>
            <ul>
                <li><a href="#">Giới thiệu</a></li>
                <li><a href="#">Giáo dục</a></li>
                <li><a href="#">Khoa học-Công nghệ</a></li>
                <li><a href="#">Quốc tế hóa</a></li>
                <li><a href="#">Tuyển sinh</a></li>
                <li id="search1"><span><i class="far fa-search"></i></span></li>
                <li>
                    <div id="search-form1">
                        <form action="post">
                            <input placeholder="Input ST" class="input" type="text" name="seach">
                            <input class="btsub" type="submit" style="color: white; letter-spacing: 1px;">
                        </form>
                    </div>
                </li>

            </ul>


        </div>
        <div class="ontop">
            <i class="fad fa-arrow-to-top"></i>
        </div>
        <div class="login">
            <div>
                <i class="far fa-home"></i>
                <span id="portal">My Dau</span>
            </div>
        </div>
        <div class="header">
            <div class="hd-l">
                <div class="hdl-l"><img src="../image/logo.png" alt="#"></div>
                <div class="hdl-r">
                    <h2>TRƯỜNG ĐẠI HỌC KIẾN TRÚC ĐÀ NẴNG</h2>
                    <p>DANANG ARCHITECTURE UNIVERSITY</p>
                </div>

            </div>
        </div>
        <div class="mhr"></div>
        <div class="menu">
            <ul>
                <li id="search-form">
                    <form action="post">
                        <input placeholder="Input ST" class="input" type="text" name="seach">
                        <input class="btsub" type="submit" style="color: white; letter-spacing: 1px;">
                    </form>
                </li>
                <li id="search"><span><i class="far fa-search"></i></span>

                </li>
                <li class="mnli"><a href="#">Tuyển sinh</a></li>
                <li class="mnli"><a href="#">Quốc tế hóa</a></li>
                <li class="mnli"><a href="#">Khoa học-Công nghệ</a></li>
                <li class="mnli"><a href="#">Giáo dục</a></li>
                <li class="mnli"><a href="#">Giới thiệu</a></li>
            </ul>
        </div>
        <div style="clear: both;"></div>
        <div class="banner">
            <div class="slides">
            <?php
                 $con = mysqli_connect("localhost","root","","datadau") or die("Fail Connect");
                 $sql1 = "SELECT * from gioithieu order by id desc";
                 $rs = $con->query($sql1);
                 $row = mysqli_fetch_array($rs);
            ?>
                <div class="slide active"><img src="..\image\<?php echo $row[1]; ?>" alt=""></div>
                <?php
                    for($i = 0; $i < 4; ++$i){
                       if( $row = mysqli_fetch_array($rs)){

                ?>
                <div class="slide"><img src="..\image\<?php echo $row[1] ?>" alt=""></div>
                <?php
                        }else break;
                 }
                ?>
            </div>

            <span id="bt-prev"><i class="fas fa-chevron-left"></i></span>
            <span id="bt-next"><i class="fas fa-chevron-right"></i></span>
            <ul>
                <li class="active_li"></li>
                <?php
                    $sql1 = "Select * from gioithieu limit 0,5";
                    $rs = $con->query($sql1);
                    $row = mysqli_fetch_array($rs);
                    while($row = mysqli_fetch_array($rs)){
                ?>
                <li></li>
                <?php
                    }
                ?>
            </ul>
            <div id="viewmore" data-aos="zoom-in-up">
                <a href="#">Xem chi tiết</a>
            </div>
        </div>
        <div style="clear: both;"></div>
        <div class="content">

            <div class="tintuc">
                <div data-aos="fade-right">
                    <h4 class="tieude">TIN TỨC</h4>
                </div>
                <div class="tt_infor">
                    <?php
                        $con = mysqli_connect("localhost","root","","datadau") or die("Fail Connect");
                        $query = "SELECT * from tintuc order by id desc";
                        $rs = $con->query($query);
                        if($row = mysqli_fetch_array($rs)){

                    ?>
                    <div class="tt_left" data-aos="zoom-in">
                        <div class="tt_image"><img src="..\image\<?php echo $row[1]; ?>" alt=""></div>
                        <div class="tt_content">
                            <h4><?php echo $row[2]; ?></h4>
                            <p><?php echo $row[3]; ?></p>
                            <p><?php echo $row[4]; ?></p>
                        </div>
                        <?php }
                        ?>
                    </div>
                    <div class="tt_mid" data-aos="zoom-in">
                        <?php  if($row = mysqli_fetch_array($rs)){ ?>
                        <div class="tt_image"><img src="..\image\<?php echo $row[1]; ?>" alt=""></div>
                        <div class="tt_content">
                            <h4><?php echo $row[2]; ?></h4>
                            <p><?php echo $row[3]; ?></p>
                            <p><?php echo $row[4]; ?></p>
                        </div>
                        <?php  } ?>
                    </div>
                    <div class="tt_right" data-aos="zoom-in">
                        <?php  if($row = mysqli_fetch_array($rs)){ ?>
                        <div class="tt_image"><img src="..\image\<?php echo $row[1]; ?>" alt=""></div>
                        <div class="tt_content">
                            <h4><?php echo $row[2]; ?></h4>
                            <p><?php echo $row[3]; ?></p>
                            <p><?php echo $row[4]; ?></p>
                        </div>
                        <?php  } ?>
                    </div>
                </div>
                <div style="clear: both;"></div>
                <div class="tt_viewmore" data-aos="zoom-in">
                    <a href="#">TIN KHÁC >></a>
                </div>
            </div>
            <div style="clear: both;"></div>
            <div class="sukien">
                <div data-aos="fade-right">
                    <h4 class="tieude">SỰ KIỆN</h4>
                </div>
                <div class="sk_content">
                <?php
                        $con = mysqli_connect("localhost","root","","datadau") or die("Fail Connect");
                        $query = "SELECT * from sukien order by id desc";
                        $rs = $con->query($query);
                        if($row = mysqli_fetch_array($rs)){

                ?>
                    <div class="sk_left" data-aos="zoom-in">
                        <div class="sk_img">
                            <img src="..\image\<?php echo $row[1]; ?>" alt="">
                            <span class="sk_time" ><i class="fal fa-history"></i><?php echo $row[3]; ?></span>
                        </div>
                        <div class="sk_contentt">
                           <h3><a href=""><?php echo $row[2]; ?></a></h3>
                            <p><?php echo $row[4] ?></p>
                        </div>

                        <?php }?>
                    </div>
                    <div class="sk_mid" data-aos="zoom-in">
                    <?php  if($row = mysqli_fetch_array($rs)){ ?>
                        <div class="sk_img">
                            <img src="..\image\<?php echo $row[1]; ?>" alt="">
                            <span class="sk_time"><i class="fal fa-history"></i><?php echo $row[3]; ?></span>
                        </div>
                        <div class="sk_contentt">
                            <h3><a href=""><?php echo $row[2]; ?></a></h3>
                            <p><?php echo $row[4] ?></p>
                        </div>
                    <?php } ?>
                    </div>
                    
                    <div class="sk_right" data-aos="zoom-in">
                        <?php
                            for($i = 0; $i< 4; ++$i){
                                if($row = mysqli_fetch_assoc($rs)){
                                    $querydate = "SELECT DAY('".$row['thoigian']."')";
                                    $querymonth = "SELECT MONTH('".$row['thoigian']."')";
                                    $rsdate = $con->query($querydate);
                                    $rsmonth = $con->query($querymonth);
                                    $row1 = mysqli_fetch_array($rsdate);
                                    $row2 = mysqli_fetch_array($rsmonth);              
                            
                        ?>
                        <div class="sk_sidebar">
                            <div class="timesk">
                                <span class="spandate"><?php echo $row1[0] ; ?></span>
                                <hr>
                                <span class="spanmonth">Tháng <?php echo $row2[0] ; ?></span>
                            </div>
                            <p><?php echo $row['tieude'] ?></p>   
                        </div>
                        <?php
                                }
                            } 
                        ?> 
                    </div>
                </div>
                <div style="clear: both;"></div>
                <div class="tt_viewmore" data-aos="zoom-in">
                    <a href="#">SỰ KIỆN KHÁC >></a>
                </div>
            </div>
            <div class="totnghiep">
                <div class="tn_left" data-aos="zoom-in-right">
                    <img src="..\image\image5.jpg" alt="#">
                </div>
                <div class="tn_right" data-aos="fade-up">
                    <h3>SINH VIÊN TỐT NGHIỆP DAU</h3>
                    <ul>
                        <li><i class="fad fa-award"></i>
                            <p><strong>Chuyên môn giỏi</strong></p> <br>
                            <p class = "p-noidung">Lý thuyết vững vàng, thực hành thành thạo,
                                <span style="color:#0067ac;">
                                    <strong>100%</strong>
                                </span> sinh viên tốt nghiệp DAU có việc làm <br>
                                trong năm đầu tiên.
                            </p>
                        </li>
                        <li><i class="fad fa-award"></i>
                            <p><strong>Kỹ năng đa dạng</strong></p> <br>
                            <p class = "p-noidung">Phát triển tối đa năng lực bản thân với các kỹ năng mềm cần thiết: tiếng Anh (
                                <span style="color:#0067ac;">
                                    <strong>IELTS 5.0</strong>
                                </span> ), <br>
                                 Tin học (
                                <span style="color:#0067ac;">
                                    <strong>MOS 750</strong>
                                </span> ),
                                 Sinh tồn (
                                <span style="color:#0067ac;">
                                    <strong>bơi 50m</strong>
                                </span> ),...
                            </p>
                        </li>
                        <li><i class="fad fa-award"></i>
                            <p><strong>Đạo đức chuẩn mực</strong></p> <br>
                            <p class = "p-noidung">Rèn luyện trong môi trường nghiêm túc: 
                                <span style="color:#0067ac;">
                                    <strong>Hiếu thảo</strong>
                                </span> với cha mẹ,
                                <span style="color:#0067ac;">
                                    <strong>Thượng tôn</strong>
                                </span> pháp luật, <br>
                                <span style="color:#0067ac;">
                                    <strong>Tinh thần phụng sự </strong>
                                </span> cộng đồng.
                            </p>
                        </li>
                        <!-- <li><i class="fad fa-award"></i>
                            <p>ST here</p>
                        </li> -->
                    </ul>
                </div>
            </div>
            <div class="khoa">
                <div>
                    <h3>7 Khoa</h3>
                </div>
                <div style="margin-top: 50px;">
                    <div class="khoas" data-aos="flip-down">
                        <img src="../image/logokientruc.PNG" alt="">
                        <p>Khoa Kiến Trúc</p>
                    </div>
                    <div class="khoas" data-aos="flip-down">
                        <img src="../image/logoxaydung.PNG" alt="">
                        <p>Khoa Xây Dựng</p>
                    </div>
                    <div class="khoas" data-aos="flip-down">
                        <img src="../image/logocauduong.PNG" alt="">
                        <p>Khoa Cầu-Đường</p>
                    </div>
                    <div class="khoas" data-aos="flip-down">
                        <img src="../image/logokinhte.PNG" alt="">
                        <p>Khoa Kinh Tế</p>
                    </div>
                    <div class="khoas" data-aos="flip-down">
                        <img src="../image/logongoaingu.PNG" alt="">
                        <p>Khoa Ngoại Ngữ</p>
                    </div>
                    <div class="khoas" data-aos="flip-down">
                        <img src="../image/logocntt.png" alt="">
                        <p>Khoa Công Nghệ</p>
                    </div>
                    <div class="khoas" data-aos="flip-down">
                        <img src="../image/logodulich.png" alt="">
                        <p>Khoa Du Lịch</p>
                    </div>
                </div>


            </div>
        </div>
        <hr  width="70%" size = "1" align="center" color = "" />
        <div class="conten4">
        <div class="divchuaanh" data-aos="zoom-in">
            <a href="http://www.dau.edu.vn/"><img src="../image/logo.png" alt=""></a>
        </div>
        <div class="divnoidunganh" data-aos="zoom-in">
            <p>ĐẠI HỌC KIẾN TRÚC ĐÀ NẴNG - DANANG ARCHITECTURE UNIVERSITY<p>
        </div>
        <div class="lienlacdau"  data-aos="zoom-out">
            <div class="phone">
                <i class="fa fa-mobile" aria-hidden="true"></i>
                <p>Điện thoại: 0236.2210030 - 2210031 – 2210032</p>
            </div>
            <div class="address">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <p>Địa chỉ: 566 Núi Thành, Quận Hải Châu,TP. Đà Nẵng</p>
            </div>
            <div class="email">
                <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                <p>Email: infor@dau.edu.vn</p>
             </div>
        </div>             
    </div>
        <div class="footer" data-aos="fade-up">
            <p>Cre : TDTU</p>
            <p>Pr : Nhóm 5</p>
        </div>

    </div>

</body>
<script src="..\js\jsfortrangchu.js"></script>

</html>