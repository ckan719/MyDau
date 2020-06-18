<?php
    $con = mysqli_connect("localhost","root","","datadau") or die("Fail Connect");
    $username = $_POST['username'];
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $level = $_POST['level'];

    $sql = "INSERT INTO  account values ('$username','$name','$pass',$level)";
    if($con->query($sql)) echo 1;
    else echo 0;
?>