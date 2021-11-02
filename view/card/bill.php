<div class="row1">
    <div class="row1 header">
        <h1>Thông tin giỏ hàng</h1>
    </div>
</div>
<div class="row1 formconten">
    <div class="row1 mb formdsloai">
        <table>

            <form action="index.php?act=billcomfirm" method="post">

                <?php
           if(isset($_SESSION['user'])){
               $name = $_SESSION['user']['user'];
               $email = $_SESSION['user']['email'];
               $address = $_SESSION['user']['address'];
               $dien_thoai = $_SESSION['user']['dien_thoai'];
               $pass = $_SESSION['user']['pass'];
           }else{
            $name = "";
            $email = "";
            $address ="";
            $dien_thoai ="";
           }
        ?>
                <tr>
                    <td>Người đặt hàng</td>
                    <td><input type="text" name="name" id="" value="<?=$name?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" id="" value="<?=$email?>"></td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><input type="text" name="address" id="" value="<?php echo $address?>"></td>
                </tr>
                <tr>
                    <td>Số Điện Thoại</td>
                    <td><input type="text" name="dien_thoai" id="" value="<?php echo $dien_thoai?>"></td>
                </tr>

        </table>
    </div>

</div>
<div class="row1">
    <div class="row1 header" style="margin-bottom:20px">
        <h1>Phương thức thanh toán</h1>
        <div>


        </div>

    </div>
    <table style="margin-bottom:20px">
        <tr>
            <td style="padding:20px"><input type="radio" name="pttt" value="1" id="" checked>Trả tiền khi nhận hàng             </td>
            <td style="padding:20px"><input type="radio" name="pttt" value="2" id="">Chuyển khoản ngân hàng             </td>
            <td style="padding:20px"><input type="radio" name="pttt" value="3" id="">Thanh toán online             </td>
        </tr>
    </table>
</div>
<div class="row1">
    <div class="row1 header">
        <h1>Giỏ Hàng</h1>
    </div>
</div>
<div class="row1 formconten">
    <div class="row1 mb formdsloai">
        <table>

            <?php
               viewcard(0);
             ?>
            <tr>

                <!-- <td> <a href="index.php?act=delcard"><input type="button" value="Xóa giỏ hàng"></a>    </td> -->
                <td>
                <input type="submit" name="dongydathang" value="ĐỒNG Ý ĐẶT HÀNG">
                </td>
            </tr>

            </form>

        </table>
    </div>

</div>