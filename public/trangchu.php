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
                <span id="portal">Dau Portal</span>
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
                 $sql1 = "Select * from gioithieu limit 0,5";
                 $rs = $con->query($sql1);
                 $row = mysqli_fetch_array($rs);
            ?>
                <div class="slide active"><img src="..\image\<?php echo $row[1]; ?>" alt=""></div>
                <?php
                    while($row = mysqli_fetch_array($rs)){
                ?>
                <div class="slide"><img src="..\image\<?php echo $row[1] ?>" alt=""></div>
                <?php
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
                        $query = "SELECT * from tintuc limit 0,3";
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
                        $sql = "SELECT * from sukien";

                    ?>
                    <div class="sk_left" data-aos="zoom-in">
                        <div class="sk_img">
                            <img src="..\image\image4.jpg" alt="">
                            <span class="sk_time">Day time</span>
                        </div>
                        <div class="sk_contentt">
                            ST here
                        </div>
                    </div>
                    <div class="sk_mid" data-aos="zoom-in">
                        <div class="sk_img">
                            <img src="..\image\image4.jpg" alt="">
                            <span class="sk_time">Day time</span>
                        </div>
                        <div class="sk_contentt">
                            ST here
                        </div>

                    </div>
                    <div class="sk_right" data-aos="zoom-in">
                        <div class="sk_sidebar">
                            <div class="timesk">
                                <span>Ngày</span>
                                <hr>
                                <span>Tháng</span>
                            </div>
                            <p>ST here</p>
                        </div>
                        <div class="sk_sidebar">
                            <div class="timesk">
                                <span>Ngày</span>
                                <hr>
                                <span>Tháng</span>
                            </div>
                            <p>ST here</p>
                        </div>
                        <div class="sk_sidebar">
                            <div class="timesk">
                                <span>Ngày</span>
                                <hr>
                                <span>Tháng</span>
                            </div>
                            <p>ST here</p>
                        </div>
                        <div class="sk_sidebar">
                            <div class="timesk">
                                <span>Ngày</span>
                                <hr>
                                <span>Tháng</span>
                            </div>
                            <p>ST here</p>
                        </div>

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
                            <p>ST here</p>
                        </li>
                        <li><i class="fad fa-award"></i>
                            <p>ST here</p>
                        </li>
                        <li><i class="fad fa-award"></i>
                            <p>ST here</p>
                        </li>
                        <li><i class="fad fa-award"></i>
                            <p>ST here</p>
                        </li>
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
        <div class="footer" data-aos="fade-up">
            <p>Cre : TDTU</p>
            <p>Pr : Nguyễn Công Nhật</p>
        </div>

    </div>

</body>
<script src="..\js\jsfortrangchu.js"></script>

</html>