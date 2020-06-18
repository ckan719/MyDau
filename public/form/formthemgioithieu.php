<?php
    echo "
    <table>
        <h2>Thêm giới thiệu</h2>
        <tr>
            <td>IMG</td>
            <td><input type='file' name='' id='img'></td>
        </tr>
        <tr>
            <td>Link IMG</td>
            <td><input type='text' placeholder = 'Nhập link' name='' id='limg'></td>
        </tr>
        <tr class = 'action'>
            <td colspan = 2><button onclick = 'themGioiThieu()'>Thêm</button><button onclick = 'resetform()'>Reset</button></td>
            
        </tr>
    </table>
    ";
?>