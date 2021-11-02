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
                <th>MÃ SẢN PHẨM</th>
                <th>TÊN SẢN PHẨM</th>
                <th>HÌNH</th>
                <th>GIÁ</th>
                <th>LƯỢT XEM</th>
                <th>Mô tả</th>
                <th>Danh Mục</th>
                <th> Sửa Xóa </th>

            </tr>
            <?php  foreach ($listsp as $sp) {
extract($sp);
 $suasp="index.php?index=suasp&ma_sp=".$ma_sp;
 $xoasp="index.php?index=xoasp&ma_sp=".$ma_sp;
 $hinhpat="../uploast/".$img;
if(is_file($hinhpat)){
    $hinh1=  "<img src='".$hinhpat."'height='80'>";
}
    else{
        $hinh1=  "no img";
    }
   
 
echo '<tr>
           <td><input type="checkbox" name="" id=""></td>
           <td>'.$ma_sp.'</td>
           <td>' . $name_sp.'</td>
           <td>'.$hinh1.'</td>
           <td>' . $gia.'</td>
           <td>'.$luot_xem.'</td>
           <td>' . $mo_ta.'</td>
           <td>' . $name.'</td>
        
           <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a> <a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
 </tr>';
            }
?>




        </table>
    </div>
    <div class="row1 mb">
        <input type="button" value="Chọn tất cả" id="">
        <input type="button" value="Bỏ chọn tất cả">
        <input type="button" value="Xóa các mục đẫ chọn">
        <a href="index.php?index=addsp"> <input type="button" value="Nhậm thêm"></a>
    </div>
</div>