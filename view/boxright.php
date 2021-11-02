<div class="row1 mb ">
                    <div class="boxtieude">TÀI KHOẢN</div>
                    <div class="boxconten formtaikhoan">
                        <?php
                            if(isset($_SESSION['user'])){
                                extract($_SESSION['user']);
                            ?>
                            
                            <div class="row1 mb">
                            <label for="">Xin chào  <span style="font-size:24px"> <?=$user?> </span> </label>
                            <li><a href="index.php?act=edit_tk">Cập nhật tài khoản</a></li>
                            <li><a href="index.php?act=quen_mk">Quên mật khẩu</a></li>
                            <?php if($vai_tro==1){
                                ?>
                           
                            <li><a href="admin/index.php">Đang nhập admin</a></li>
                            <?php } ?>
                            <li><a href="index.php?act=thoat">Đăng xuất</a></li>
                            <td> <a href="index.php?act=viewcard">Quản lý giỏ hang</td>
                           </div>
                          <?php 
                          
                        }else{

                           
                        ?>
                        <form action="index.php?act=dangnhap" method="post">
                           <div class="row1 mb">
                            <label for="">Tên đăng nhập</label>
                            <input type="text" name="user" id="">
                           </div>
                           <div class="row1 mb">
                            <label for="">Mật Khẩu</label>
                            <input type="password" name="pass" id=""><br>
                           </div>
                           <div class="row1 mb">
                            <input type="checkbox" name="" id="">GHI NHỚ TAI KHOẢN <br>
                            <input type="submit" name="dangnhap" value="Đăng nhập">
                           </div>
                            
                        </form>
                        
                            <li><a href="index.php?act=dangky">Đăng kí thành vien</a></li>
                            <li><a href="index.php?act=quen_mk">Quên mật khẩu</a></li>
                        <?php
                        } ?>
                    </div>
                </div>
                <div class="row1 mb">
                    <div class="boxtieude">DANH MỤC</div>
                    <div class="boxconten2 menudoc">
                        <ul>
                            <?php foreach ($listdm as $dm){
                                extract($dm);
                                
                                $linkdm="index.php?act=sanpham&iddm=".$id;
                                echo '
                                <li><a href="'.$linkdm.'">'.$name.'</a></li>
                                ';
                            }
                            ?>
                          
                        
                        </ul>
                    </div>
                    <div class="boxfooter seach_box">
                     <form action="index.php?act=sanpham" method="post">
                         <input type="text" name="kyw" id="" placeholder="a" >
                         <br>
                         <input type="submit" name="timkiem" value="Tìm kiếm">
                     </form>
                    </div>
                </div>
                <div class="row1 mb">
                    <div class="boxtieude ">TOP 10 YÊU THÍCH</div>
                    <div class="row1 boxconten ">
                    <?php
                         foreach ($top10 as $top10){
                            extract($top10);
                            $hinh=$imgpat.$img;
                            $linksp="index.php?act=sanphamct&idsp=".$ma_sp;
                            echo ' <div class="row1 top10 mb">
                            <img src="'.$hinh.'" alt="">   
                            <a href="'.$linksp.'"> '.$name_sp.'</a> 
                        </div>';
                         }
                         ?>
                       
                    </div>
                </div>