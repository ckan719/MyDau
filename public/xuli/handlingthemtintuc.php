<?php
    $con = mysqli_connect("localhost","root","","datadau") or die("Fail Connect");
    $img = $_POST['img'];
    $tieude = $_POST['tieude'];
    $nguon = $_POST['nguon'];
    $noidung = $_POST['noidung'];

    $sql = "INSERT INTO  tintuc values ('','$img','$tieude','$nguon','$noidung')";
    if($con->query($sql)) echo 1;
    else echo 0;
?>