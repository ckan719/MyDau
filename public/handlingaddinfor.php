<?php
    $username ="root";
    $pass = "";
    $host = "localhost";
    $database = "datadau";
    $con = mysqli_connect($host,$username,$pass,$database) or die("Fail connect");
    $img = $_POST['img'];
    $tieude = $_POST['tieude'];
    $nguon = $_POST['nguon'];
    $noidung = $_POST['noidung'];
    $query = "INSERT INTO tintuc(img,tieude,nguon,noidung) values ( '".$img."','".$tieude."','".$nguon."','".$noidung."' )";
    if($con->query($query) === true){
        echo "Insert successfully!";
    }else echo "Fail!";
    $con -> close();
?>