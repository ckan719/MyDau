<?php
    $username ="root";
    $pass = "";
    $host = "localhost";
    $database = "datadau";
    $con = mysqli_connect($host,$username,$pass,$database) or die("Fail connect");
    $img = $_POST['img'];
    $tieude = $_POST['tieude'];
    $thoigian = $_POST['thoigian'];
    $noidung = $_POST['noidung'];
    $query = "INSERT INTO sukien(img,tieude,thoigian,noidung) values ( '".$img."','".$tieude."','".$thoigian."','".$noidung."' )";
    if($con->query($query) === true){
        echo "Insert successfully!";
    }else echo "Fail!";
    $con -> close();
?>