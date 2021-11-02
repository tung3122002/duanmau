<?php
 if(is_array($sp)){
     extract($sp);
 }
 ?>
<div class="row1">
    <div class="row1 header">
        <h1>Thêm mới loại hàng hóa</h1>
    </div>
</div>
<div class="row1 formconten">
    <form action="./index.php?index=updatetk" method="post" enctype="multipart/form-data">
    
    Tên Đăng nhập: <input class="mb" type="text" name="user" id=""placeholder="Tên người dùng" value="<?php echo $user; ?>"><br>
    <div class="row1 mb">
               <input type="hidden" name="id" id="" value="<?php echo $id; ?>" >
            
</div>
<div class="row1 mb">
    Email: <input type="text" name="email" value="<?php echo $email; ?>" id="">
</div>
<div class="row1 mb">
Pass: <input  type="text" name="pass" id=""placeholder="Pass người dùng" value="<?php echo $pass?>"><br>

</div>
<div class="row1 mb">
    Đia chỉ:   <input class="mb" type="text" name="dia_chi" id=""placeholder="Địa chỉ người dùng" value="<?php echo $address?>"><br>
</div>
<div class="row1 mb">
    Đia chỉ:     <input class="mb" type="text" name="dien_thoai" id=""placeholder="SDT người dùng" value="<?php echo $dien_thoai?>"><br>
</div>
<div class="row1 mb">
Khách hàng
<input type="radio" name="vai_tro" value="0" id="">
Nhân viên
<input type="radio" name="vai_tro" value="1" id=""><br>
</div>

<div class="row1 mb">
    <input type="submit" name="capnhat" value="Cập nhật" id="">
    <input type="reset" value="Nhập lại">
    <a href="./index.php?index=dskh"> <input type="button" value="Danh sách"></a>
</div>
<?php
        if(isset($thongbao)&&($thongbao !="")){
            echo $thongbao;
        }
        ?>
</form>
</div>
