<div class="row1 mb ">
            <div class="boxtrai mr ">
                <div class="row1">
                    <div class="banner">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="./view/img/banner1.png" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="./view/img/banner2.png" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="./view/img/banner3.png" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                    </div>
                </div>
                <div class="row1 sp1 ">
                    <?php
                
                      foreach ($spnew as $key ) {
                        extract($key);
                        $linksp="index.php?act=sanphamct&idsp=".$ma_sp;
                        $hinh=$imgpat.$img;
                        echo'<div class="boxsp">
                        <div class="img-sp">  
                        <a href="'.$linksp.'"><img  width="250px" src="'.$hinh.'" alt=""></div></a>
                          <p>'.$gia.' VND</p>
                          <a style="text-decoration: none ;color: #000" href="'.$linksp.'">'.$name_sp.'</a>
                          <form action="index.php?act=addcard" method="post">
                          <input type="hidden" name="ma_sp" value="'.$ma_sp.'">
                          <input type="hidden" name="ten_sp" value="'.$name_sp.'">
                          <input type="hidden" name="hinh" value="'.$hinh.'">
                          <input type="hidden" name="gia" value="'.$gia.'">
                      
                          <input type="submit" value=" Thêm giỏ hàng"name="addcart" >
                         </form>
                      </div>';
                      }
                    ?>
              
                </div>
            </div>
            <div class="boxphai">
               <?php include 'boxright.php'?>
            </div>
        </div>