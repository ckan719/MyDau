<?php
    session_start();
    $con = mysqli_connect("localhost","root","","datadau");
    $username  = $_SESSION['user'];
    $sql = "SELECT * from thongtin where username = '$username'";
    $rs = $con->query($sql);
    $row = mysqli_fetch_array($rs);

    echo "
    <table>
        <tr>
            <td rowspan = 7 class = 'anh'><img src='../image/$row[1]' alt=''></td>
            <td>MSSV:</td>
            <td>$row[3]</td>
        </tr>
        <tr>
            <td>Tên:</td>
            <td>$row[2]</td>
        </tr>
        <tr>
            <td>Ngày sinh:</td>
            <td>$row[4]</td>
        </tr> 
        <tr>
            <td>CMND:</td>
            <td>$row[5]</td>
        </tr>
        <tr>
            <td>Giới tính:</td>
            <td>$row[6]</td>
        </tr>
       
        <tr>
            <td>Địa chỉ:</td>
            <td>$row[7]</td>
        </tr>
    </table>
    ";
?>