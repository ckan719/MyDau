<?php
    echo "
    <table>
    <h2>Thêm tin tức</h2>
        <tr>
            <td>Link IMG</td>
            <td><input type='file' name='' id='img' ></td>
        </tr>
        <tr>
            <td>Tiêu đề</td>
            <td><input type='' id = 'tieude' placeholder='Nhập tiêu đề...'></td>
        </tr>
        <tr>
            <td>Nguồn</td>
            <td><input type='' id = 'nguon' placeholder='Nhập nguồn...'></td>
        </tr>
        <tr>
            <td>Nội dung</td>
            <td><textarea name='' id='noidung' cols='50' rows='4' placeholder='Nhập nội dung...'></textarea></td>
        </tr>
        <tr class = 'action'>
            <td colspan = 2><button onclick = 'themTinTuc()'>Thêm</button><button onclick = 'resetform()'>Reset</button></td>
            
        </tr>
    </table>
    ";
?>