<div class="row1">
        <div class="row1 header"><h1>Thêm mới loại hàng hóa</h1></div>
    </div>
    <div class="row1 formconten">
        <form action="./index.php?index=adddm" method="post">
           <div class="row1 mb">
               Mã Loai <br> <input type="text" name="ma_loai" id="" disabled placeholder="auto">
           </div>
           <div class="row1 mb">
            Tên loại <br> <input type="text" name="ten_loai" id="">
        </div>
        <div class="row1 mb">
             <input type="submit" name="submit"  value="Thêm mới" id="">
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