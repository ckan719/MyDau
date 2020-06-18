<?php
    session_start();
    $con = mysqli_connect("localhost","root","","datadau");
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $sql = "Select * from account where user = '$username' and pass = '$pass'";
    $rs = $con->query($sql);
    if(mysqli_num_rows($rs) != 0){
        
        $row = mysqli_fetch_array($rs);
        $_SESSION['name'] = $row[1];
        $_SESSION['user'] = $row[0];
        if($row[3] === "1"){
            header('Location: /public/admin');
        }else if($row[3] === "0"){
            header('Location: /public/dauportal');
        }
    }else{
        header('Location: /public/login');
    }

?>