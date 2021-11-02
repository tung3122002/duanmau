<div class="row1 mb ">
    <div class="boxtrai mr ">
        <div class="row1 mb">
            <div class="boxtieude ">Sản Phẩm</div>
            <div class="row1 sp1 ">
                    <?php
                
                      foreach ($dssp as $key ) {
                        extract($key);
                        $linksp="index.php?act=sanphamct&idsp=".$ma_sp;
                        $hinh=$imgpat.$img;
                        echo'<div class="boxsp">
                        <div class="img-sp">  
                        <a href="'.$linksp.'"><img  width="250px" src="'.$hinh.'" alt=""></div></a>
                          <p>'.$gia.'</p>
                          <a href="'.$linksp.'">'.$name_sp.'</a>
                      </div>';
                      }
                    ?>
              
                </div>
        </div>
        

    </div>

    <div class="boxphai">
        <?php include 'boxright.php' ?>
    </div>
</div>