<div class="row1">
    <div class="row1 header">
        <h1>Thêm mới loại hàng hóa</h1>
    </div>
</div>
<div class="row1 formconten">
    <form action="./index.php?index=addsp" method="post" enctype="multipart/form-data">
       
        <div class="row1 mb">
            TÊN SẢN PHẨM <br> <input type="text" name="tensp" id="">
        </div>
        <div class="row1 mb">
            GIÁ <br> <input type="text" name="gia" id="">
        </div>
        <div class="row1 mb">
            HÌNH <br> <input type="file" name="hinh" id="">
        </div>
        <div class="row1 mb">
            MÔ TA<br> <textarea name="mota" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="row1 mb">
         Danh Mục <select name="ma_dm" id="">
             <?php foreach ($listdm as $dm){
                 extract($dm);
                 echo '<option value="'.$id.'">'.$name.'</option>';
             } ?>
             
         </select>
        </div>
      
        <div class="row1 mb">
            <input type="submit" name="submit" value="Thêm mới" id="">
            <input type="reset" value="Nhập lại">
            <a href="./index.php?index=lissp"> <input type="button" value="Danh sách"></a>
        </div>
        <?php
        if(isset($thongbao)&&($thongbao !="")){
            echo $thongbao;
        }
        ?>
    </form>
</div>