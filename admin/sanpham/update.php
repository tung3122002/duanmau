<?php
 if(is_array($sp)){
     extract($sp);
 }
 $hinhpat="../uploast/".$img;

 if(is_file($hinhpat)){
    $hinh1=  "<img src='".$hinhpat."'height='80'>";
}
    else{
        $hinh1=  "no img";
    }
?>

<div class="row1">
    <div class="row1 header">
        <h1>Thêm mới loại hàng hóa</h1>
    </div>
</div>
<div class="row1 formconten">
    <form action="./index.php?index=updatesp" method="post" enctype="multipart/form-data">
        <div class="row1 mb">
            MÃ SẢN PHẨM <br> <input type="text" name="masp" id="" disabled placeholder="auto">
        </div>
        <div class="row1 mb">
            TÊN SẢN PHẨM <br> <input type="text" name="tensp" value="<?php echo $name_sp ?>" placeholder=""id="">
        </div>
        <div class="row1 mb">
            GIÁ <br> <input type="text" name="gia"value="<?php echo $gia ?>" id="">
        </div>
        <div class="row1 mb">
            HÌNH <br> <input type="file" name="hinh" id="">
            <?php echo $hinh1; ?>
        </div>
        <div class="row1 mb">
         Danh Mục <select name="ma_dm" id="">
             <?php foreach ($listdm as $dm){
                 extract($dm);
               
                 if($ma_dm==$id){
                    echo '<option value="'.$id.'"selected>'.$name.'</option>';
                 }
                 else{
                    echo '<option value="'.$id.'">'.$name.'</option>';
                 }
             } ?>
             
         </select>
        </div>
        <div class="row1 mb">
            MÔ TA<br> <textarea name="mota" id="" cols="30"  rows="10">
            <?=$mo_ta ?>
            </textarea>
        </div>
        <input type="hidden" name="ma_sp" id="" value="<?php echo $ma_sp; ?>" >
        <div class="row1 mb">
            <input type="submit" name="capnhat" value="Cập nhật" id="">
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