<div class="row1 mb ">
    <div class="boxtrai mr ">
        
        <div class="row1 mb">
            <div class="boxtieude ">Giới thiệu</div>
            <div style="text-align: center" class="row1 boxconten ">
            
                <form action="index.php?act=dangky" method="post">
                  <input class="mb" type="text" name="user" id=""placeholder="Tên người dùng"><br>
                  <input class="mb" type="email" name="email" id=""placeholder="email người dùng"><br>
                  <input class="mb" type="pass" name="pass" id=""placeholder="Pass người dùng"><br>
                  
                  Khách hàng  
                 <input type="radio" name="vai_tro" value="0" id="">
                 Nhân viên
                  <input type="radio" name="vai_tro" value="1" id=""><br>
                  <input  class="mb" type="submit" name="dangky" id=""value="Đang Ký"><br>
                  <input class="mb" type="reset" value="Nhập Lai"><br>
                </form>
                <?php
            if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao;

            }
            

?>  
            </div>
          
        </div>

    </div>

    <div class="boxphai">
        <?php include 'view/boxright.php' ?>
    </div>
</div>