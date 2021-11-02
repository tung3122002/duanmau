<?php
session_start();
include './model/pdo.php';
 include './model/danhmuc.php';
 include './model/sanpham.php';
 include './model/taikhoan.php';
 include './model/card.php';
include './view/header.php';
include 'global.php';
if(!isset($_SESSION['mycard'])) $_SESSION['mycard']=[];
$spnew=loaall_sp_home();
$listdm= loaall_dm();
$top10=loaall_sp_top10();


if (isset($_GET['act'])&& ($_GET['act']!="")){
 $act=$_GET['act'];
 switch($act){
     case 'goithieu':
        include './view/gioithieu.php';
    break;
    case 'thoat':
       session_unset();
       header('Location:index.php');
    case 'quen_mk':
       
            if (isset($_POST['dangky'])&& ($_POST['dangky']!="")){
            
                $email=$_POST['email'];
               
              
               $check_email=check_email($email);
               if(is_array($check_email)){
                   $thongbao="mật khẩu của bạn là".$check_email['pass'];
               }
              else{
                $thongbao="email không tồn tại";
              }
             
             
             }
          
        include './view/taikhoan/quen_mk.php';
    break;
    case 'edit_tk':
        if (isset($_POST['capnhat'])&& ($_POST['capnhat']!="")){
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            $email=$_POST['email'];
            $address=$_POST['dia_chi'];
            $dien_thoai=$_POST['dien_thoai'];
            $id=$_POST['id'];
            $vai_tro=$_POST['vai_tro'];
            update_tk($id,$user,$pass,$email,$address,$dien_thoai,$vai_tro);
         
            $_SESSION['user']=check_user($user,$pass);
            header('Location:index.php?act=edit_tk');
            $thongbao="đang nhập thành công";
           
         }
        include 'view/taikhoan/edit_tk.php';
    break;
    case 'dangky':
        if (isset($_POST['dangky'])&& ($_POST['dangky']!="")){
           $user=$_POST['user'];
           $pass=$_POST['pass'];
           $email=$_POST['email'];
           $vai_tro=$_POST['vai_tro'];
           insert_taikhoan($user,$pass,$email,$vai_tro);
           $thongbao="đang kí thành công";
        }
        include 'view/taikhoan/dangki.php';
    break;
    case 'dangnhap':
        if (isset($_POST['dangnhap'])&& ($_POST['dangnhap']!="")){
           $user=$_POST['user'];
           $pass=$_POST['pass'];
          
           $check_user=check_user($user,$pass);
           if(is_array($check_user)){
               $_SESSION['user']=$check_user;
               header('Location:index.php');
               $thongbao="đang nhập thành công";
           }
           else{
            $thongbao="đang nhập không công";
           }
        }
        include 'view/taikhoan/dangki.php';
    break;
    case 'sanpham':
        if (isset($_POST['kyw'])&& ($_POST['kyw']!="")){
            $kyw=$_POST['kyw'];
           
        }
        else{
          $kyw='';
        }
        if (isset($_GET['iddm'])&& ($_GET['iddm']>0)){
            $iddm=$_GET['iddm'];
        
        }
        else{
            $iddm="";
        }
            $dssp=loaone_sp_name($kyw,$iddm);
           
            include './view/sanpham.php';
       
    break;
    case 'sanphamct':
        if ($_GET['idsp']&& ($_GET['idsp']>0)){
            $loasp=loaone_sp($_GET['idsp']);

            include './view/sanphamct.php';
        }
      else{
        include './view/home.php';
      }
      break;
     case 'addcard':
        if (isset($_POST['addcart'])&& ($_POST['addcart'])){
            $ma_sp=$_POST['ma_sp'];
            $hinh=$_POST['hinh'];
            $gia=$_POST['gia'];
            $ten_sp=$_POST['ten_sp'];
            $so_luong=1;
         
            settype($gia, "integer");
            settype($so_luong, "integer");
            $tinh_tien=$so_luong*$gia;
            $spadd=[$ma_sp,$hinh,$gia,$ten_sp,$so_luong,$tinh_tien];
            array_push($_SESSION['mycard'],$spadd);
        
        }
            header('Location:index.php?act=viewcard');
        // include 'view/card/viewcard.php';
     break;
     case 'delcard':
        if (isset($_GET['idcard'])){

             array_splice($_SESSION['mycard'],$_GET['idcard'],1);
        }
        else{
            $_SESSION['mycard']=[];
        }
        header('Location:index.php?act=viewcard');
    break;
    case 'viewcard':
        include 'view/card/viewcard.php';
    break;
    case 'billcard':

        include 'view/card/bill.php';
    break;
    case 'billcomfirm':
        //tạo bill
        // if (isset($_POST['dongydathang'])&& ($_POST['dongydathang'])){

        //     $name = $_POST['name'];
        //     $email = $_POST['email'];
        //     $dien_thoai = $_POST['dien_thoai'];
        //     $address = $_POST['address'];
        //     $ngay_dh=date("h:i:sa d/m/Y");
        //     $pttt=$_POST['pttt'];
        //     $tongdh=tongdh();
        //     $idbill=insert_bill($name,$email,$address,$pttt,$dien_thoai,$tongdh,$ngay_dh);


        //     foreach($_SESSION['mycard'] as $card){
        //         insert_card($_SESSION['user']['id'],$card[0],$card[1],$card[2],$card[3],$card[4],$card[5],$idbill);
        //     }
            
        // }
        $listbill=loadone_bill();
        include 'view/card/billcomfirm.php';
    break;
      default:
      include './view/home.php';
      break;
     }
   
}
else{
    include './view/home.php';
}


include './view/footer.php';

?>