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
                <th>Mã Tài Khoản</th>
                <th>TÊN TK</th>
                <th>PASS</th>
                <th>email</th>
                <th>Địa chỉ</th>
                <th>Điện thoại</th>
                <th>Vai tro</th>
                <th> Sửa Xóa </th>

            </tr>
            <?php  foreach ($listkh as $kh) {
extract($kh);
 $suakh="index.php?index=suakh&id=".$id;
 $xoakh="index.php?index=xoakh&id=".$id;
 

   
 
echo '<tr>
           <td><input type="checkbox" name="" id=""></td>
           <td>'.$id.'</td>
           <td>' . $user.'</td>
           <td>'.$pass.'</td>
           <td>' . $email.'</td>
           <td>'.$address.'</td>
           <td>' . $dien_thoai.'</td>
        
        
      ';
 if($vai_tro==1){
    echo '
    <td>ADMIN</td>
    
    ';
}
else{
    echo '
    <td>Khách Hàng</td>
    
    ';
}
echo'
<td><a href="'.$suakh.'"><input type="button" value="Sửa"></a> <a href="'.$xoakh.'"><input type="button" value="Xóa"></a></td>
</tr>

';
  
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