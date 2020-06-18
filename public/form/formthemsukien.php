<?php
    echo "
    <h2>Thêm sự kiện</h2>
    <table>
        <tr>
            <td >Link IMG</td>
            <td ><input type='file' name='' id='img' placeholder='Nhập name...'></td>
        </tr>
        <tr>
            <td>Tiêu đề</td>
            <td class='tdsk'><input type='text' id = 'tieude' placeholder='Nhập tiêu đề...'></td>
        </tr>
        <tr>
            <td>Thời gian</td>
            <td><input type='date' id = 'date'></td>
        </tr>
        <tr>
            <td>Nội dung</td>
            <td><textarea name='' id='noidung' cols='50' rows='4' placeholder='Nhập nội dung...'></textarea></td>
        </tr>
        <tr class = 'action'>
            <td colspan = 2><button onclick = 'themSuKien()'>Thêm</button><button onclick = 'resetform()'>Reset</button></td>
            
        </tr>
    </table>
    ";
?>