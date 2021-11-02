<div class="row1 mb ">
    <div class="boxtrai mr ">
        
        <div class="row1 mb">
            <div class="boxtieude ">Giới thiệu</div>
            <div style="text-align: center" class="row1 boxconten ">
            <?php
                 if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                     extract($_SESSION['user']);
                 }
            ?>

                <form action="index.php?act=edit_tk" method="post">
                  <input class="mb" type="text" name="user" id=""placeholder="Tên người dùng" value="<?php echo $user?>"><br>

                  <input class="mb" type="email" name="email" id=""placeholder="email người dùng" value="<?php echo $email?>"><br>

                  <input class="mb" type="pass" name="pass" id=""placeholder="Pass người dùng" value="<?php echo $pass?>"><br>

                  <input class="mb" type="text" name="dia_chi" id=""placeholder="Địa chỉ người dùng" value="<?php echo $address?>"><br>

                  <input class="mb" type="text" name="dien_thoai" id=""placeholder="SDT người dùng" value="<?php echo $dien_thoai?>"><br>
                  <input type="hidden" name="id" value="<?php echo $id?>">
                  <input  class="mb" type="submit" name="capnhat" id=""value="Câp nhât"><br>
                  <input class="mb" type="reset" value="Nhập Lai"><br>
                </form>
            </div>
          
        </div>

    </div>

    <div class="boxphai">
        <?php include 'view/boxright.php' ?>
    </div>
</div>