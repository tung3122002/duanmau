<?php
 if(is_array($dm)){
     extract($dm);
 }
?>

<div class="row1">
        <div class="row1 header"><h1>Cập nhật loại hàng hóa</h1></div>
    </div>
    <div class="row1 formconten">
        <form action="./index.php?index=updatedm" method="post">
           <div class="row1 mb">
               Mã Loai <br> <input type="hidden" name="id" id="" value="<?php echo $id; ?>" >
           </div>
           <div class="row1 mb">
            Tên loại <br> <input type="text" name="ten_loai" value="<?php echo $name; ?>"id="">
        </div>
        <div class="row1 mb">
             <input type="submit" name="capnhat"  value="Cập nhật" id="">
             <input type="reset" value="Nhập lại">
            <a href="./index.php?index=lisdm"> <input type="button" value="Danh sách"></a>
        </div>
        <?php
        if(isset($thongbao)&&($thongbao !="")){
            echo $thongbao;
        }
        ?>
        </form>
    </div>