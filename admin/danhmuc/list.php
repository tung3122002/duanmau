<div class="row1">
    <div class="row1 header">
        <h1>Danh sach loai hang</h1>
    </div>
</div>
<div class="row1 formconten">
    <div class="row1 mb formdsloai">
        <table>
            <tr>

                <th> </th>
                <th>Mã loại</th>
                <th>Tên loại loại</th>
                <th> </th>

            </tr>
            <?php  foreach ($listdm as $danhmuc) {
extract($danhmuc);
 $suadm="index.php?index=suadm&id=".$id;
 $xoadm="index.php?index=xoadm&id=".$id;
echo '<tr>
<td><input type="checkbox" name="name[]" value="<?php echo $danhmuc["id"] ?>"></td>
 <td>'.$id.'</td>
  <td>' . $name.'</td>
<td><a href="'.$suadm.'"><input type="button" value="Sửa"></a> <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
 </tr>';
            }
?>



          
        </table>
    </div>
    <div class="row1 mb">
    <button id="checkall" class="button">Chọn tất cả</button>
        <input type="button" value="Bỏ chọn tất cả">
        <input type="button" value="Xóa các mục đẫ chọn">
        <a href="index.php?index=adddm"> <input type="button" value="Nhậm thêm"></a>
    </div>
</div>
<script>
        document.getElementById("checkall").onclick = function() {
            // Lấy danh sách checkbox
            var checkboxes = document.getElementsByName('name[]');

            // Lặp và thiết lập checked
            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = true;
            }
        };
        document.getElementById("uncheck").onclick = function() {
            // Lấy danh sách checkbox
            var checkboxes = document.getElementsByName('name[]');

            // Lặp và thiết lập Uncheck
            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = false;
            }
        };
    </script>