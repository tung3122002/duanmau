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
                <th>Mã BÌNH LUẬN</th>
                <th>MA_KH</th>
                <th>MA_BÀI VIẾT</th>
                <th>NỘI DUNG</th>
                <th>NGÀY BÌNH LUẬN</th>
               
                <th> Sửa Xóa </th>

            </tr>
            <?php  foreach ($listbl as $bl) {
extract($bl);
 $suabl="index.php?index=suabl&ma_bl=".$ma_bl;
 $xoabl="index.php?index=xoabl&ma_bl=".$ma_bl;
 

   
 
echo '<tr>
           <td><input type="checkbox" name="" id=""></td>
           <td>'.$ma_bl.'</td>
           <td>' . $user.'</td>
           <td>'.$idpro.'</td>
           <td>' . $noi_dung.'</td>
           <td>'.$ngay_bl.'</td>
        
        
           <td> <a href="'.$xoabl.'"><input type="button" value="Xóa"></a></td>
 </tr>';
            }
?>




        </table>
    </div>
    <div class="row1 mb">
        <input type="button" value="Chọn tất cả" id="">
        <input type="button" value="Bỏ chọn tất cả">
        <input type="button" value="Xóa các mục đẫ chọn">
     
    </div>
</div>