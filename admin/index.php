<!--  -->
<?php
 require '../model/pdo.php';
 require '../model/danhmuc.php';
 require '../model/sanpham.php';
 require '../model/taikhoan.php';
 require '../model/binhluan.php';
 require '../model/card.php';
?>
<?php  

 include 'header.php';

 if(isset($_GET['index'])){
     $index = $_GET['index'];
     switch($index) {
         //danh mục
          case 'adddm':
            if(isset($_POST['submit']) && ($_POST['submit'])!=""){
                $tenloai=$_POST['ten_loai'];
            
                insert_dm($tenloai);
          
              
                $thongbao="Thêm mới thành công";
            }
          
            include 'danhmuc/add.php';
            break;
            case 'lisdm':
               $listdm= loaall_dm();
                include 'danhmuc/list.php';
                break;
            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
              
               
                $listdm= loaall_dm();
                include 'danhmuc/list.php';
                break;
            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id'])){
                   
                   $dm=loaone_dm($_GET['id']);
                }
                include 'danhmuc/update.php';
                break;
            case 'adddm':
            include 'danhmuc/add.php';
            break;
            case 'updatedm' :
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $tenloai=$_POST['ten_loai'];
                    $id=$_POST['id'];
                   
                    update_dm($id,$tenloai);
                                
                    } 
                $listdm= loaall_dm();
                include 'danhmuc/list.php';
                break;
   
                     // kết thúc danh mục
                          // kết thúc danh mục
                               // kết thúc danh mục
                                    // kết thúc danh mục
    case 'addsp':
        if(isset($_POST['submit']) && ($_POST['submit'])!=""){
            $tensp=$_POST['tensp'];
            $ma_dm =$_POST['ma_dm'];
            $gia=$_POST['gia'];
            $mota=$_POST['mota'];
            $filename=$_FILES['hinh']['name'];
            $target_dir = "../uploast/";
            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
              } else {
                // echo "Sorry, there was an error uploading your file.";
              }
        
            insert_sp($tensp,$gia,$filename,$mota,$ma_dm);
      
          
      
          
            $thongbao="Thêm mới thành công";
        }
        $listdm= loaall_dm();
        include 'sanpham/add.php';
        break;
        case 'lissp':
            
           $listsp= loaall_sp();
            include 'sanpham/list.php';
            break;
        case 'xoasp':
            if(isset($_GET['ma_sp'])&&($_GET['ma_sp']>0)){
                delete_sp($_GET['ma_sp']);
            }
          
           
            $listsp= loaall_sp();
            include 'sanpham/list.php';
            break;
        case 'suasp':
            if(isset($_GET['ma_sp'])&&($_GET['ma_sp'])){
               
               $sp=loaone_sp($_GET['ma_sp']);
            }
            $listdm= loaall_dm();
            include 'sanpham/update.php';
            break;
        case 'addsp':
        include 'sanpham/add.php';
        break;
        case 'updatesp' :
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                $ma_sp=$_POST['ma_sp'];
                $ma_dm=$_POST['ma_dm'];
            
                $tensp=$_POST['tensp'];
               
                
              
                $gia=$_POST['gia'];
                $mota=$_POST['mota'];
                $filename=$_FILES['hinh']['name'];
                $target_dir = "../uploast/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                  } else {
                    // echo "Sorry, there was an error uploading your file.";
                  }
                update_sp( $ma_sp,$tensp,$gia,$mota,$filename,$ma_dm);
                            
                } 
                $listdm= loaall_dm();
            $listsp= loaall_sp();
            include 'sanpham/list.php';
            break;
            ///////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////
            case 'dskh':
                $listkh= loaall_kh();
                include 'taikhoan/list.php';
                break;
                case 'suakh':
                    if(isset($_GET['id'])&&($_GET['id'])){
                       
                       $sp=loaone_tk($_GET['id']);
                    }
                    $listtk= loaall_kh();
                    include 'taikhoan/update.php';
                    break;
                case 'updatetk':
                    if (isset($_POST['capnhat'])&& ($_POST['capnhat']!="")){
                        $user=$_POST['user'];
                        $pass=$_POST['pass'];
                        $email=$_POST['email'];
                        $address=$_POST['dia_chi'];
                        $dien_thoai=$_POST['dien_thoai'];
                        $id=$_POST['id'];
                        $vai_tro=$_POST['vai_tro'];
                        update_tk($id,$user,$pass,$email,$address,$dien_thoai,$vai_tro);}
                        $listkh= loaall_kh();
                        include 'taikhoan/list.php';
                    break;
                case 'xoakh':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_kh($_GET['id']);
                    }
                  
                   
                    $listkh= loaall_kh();
                    include 'taikhoan/list.php';
                    break;
                  
        default:
        include 'home.php';
        break;
        ////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////
        // binhluan

                         case 'dsbl':
                            $listbl=loaall_bl_home();
                            include 'binhluan/list.php';
                            break;
                            case 'xoabl':
                                if(isset($_GET['ma_bl'])&&($_GET['ma_bl']>0)){
                                    delete_bl($_GET['ma_bl']);
                                }
                              
                               
                                $listbl= loaall_bl_home();
                                include 'binhluan/list.php';
                                break;
                                case 'thongke':
                                    $listtk=  loadall_tk();
                                    include 'thongke/list.php';
                                    break;
                                    case 'bieudo':
                                        $listtk=  loadall_tk();
                                        include 'thongke/bieudo.php';
                                        break;
                                    
                                }
                              
     
 }
 else{
    include 'home.php';
 }


 
 include 'footer.php';
?>