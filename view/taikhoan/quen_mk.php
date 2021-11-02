<div class="row1 mb ">
    <div class="boxtrai mr ">

        <div class="row1 mb">
            <div class="boxtieude ">Giới thiệu</div>
            <div class="row1 boxconten ">
                <form action="index.php?act=quen_mk" method="post">
                    email: <input type="email" name="email" class="form-control">
                    <input class="mb" type="submit" name="dangky" id="" value="QUÊN MK"><br>

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