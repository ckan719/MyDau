<?php
    echo "
    <h2>Thêm tài khoản</h2>
    <table>
        <tr>
            <td>Name user</td>
            <td><input type='text' name='' id='username' placeholder='Nhập tên user...'></td>
        </tr>
        <tr>
            <td>Tên người dùng</td>
            <td><input type='text' id = 'name' placeholder='Nhập tên người dùng...'></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type='password' id = 'pass' placeholder='Nhập password...'></td>
        </tr>
        <tr>
            <td>Quyền</td>
            <td><input type = 'text' id = 'level' placeholder='0 or 1'></td>
        </tr>
        <tr class = 'action'>
            <td colspan = 2><button onclick = 'themTaiKhoan()'>Thêm</button><button onclick = 'resetform()'>Reset</button></td>
            
        </tr>
    </table>
    ";
?>