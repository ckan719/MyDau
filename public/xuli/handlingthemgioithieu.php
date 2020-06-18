<?php
    $con = mysqli_connect("localhost","root","","datadau") or die("Fail Connect");
    $img = $_POST['img'];
    $link = $_POST['link'];

    $sql = "INSERT INTO  gioithieu values ('','$img','$link')";
    if($con->query($sql)) echo 1;
    else echo 0;
?>