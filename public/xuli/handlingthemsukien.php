<?php
    $con = mysqli_connect("localhost","root","","datadau") or die("Fail Connect");
    $img = $_POST['img'];
    $tieude = $_POST['tieude'];
    $date = $_POST['date'];
    $noidung = $_POST['noidung'];

    $sql = "INSERT INTO  sukien values ('','$img','$tieude','$date','$noidung')";
    if($con->query($sql)) echo 1;
    else echo 0;
?>