<?php 
 include '../../model/pdo.php';
 include '../../model/binhluan.php';
   session_start();
   $idpro=$_REQUEST['idpro'];
//    var_dump($idpro);
// $dssbl=load_all_binhluan($idpro);
$dsbl=load_all_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>


    <div class="row mb  ">
        <div class="boxtitle">BÌNH LUẬN</div>
        <div class="boxconten2 menudoc binhluan">
            <table>

                <?php 
               echo "Nội dung ở đây : ".$idpro;
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                    foreach ($dsbl as $bl){
                        extract($bl);
                      echo'<tr><td>"'.$noi_dung.'"</td>';
                      echo'<td>"'.$iduser.'"</td>';
                      echo'<td>"'.$ngay_bl.'"</td><tr>';
                    }
                    ?>

            </table>
        </div>
        <div class="boxfooter searchbox">
         <?php if(isset($_SESSION['user'])){ extract($_SESSION['user'])?>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                 <!-- <input type="hidden" name="ma_bl" > -->
                <input type="hidden" name="idpro" value="<?=$idpro?>">
                <input type="text" name="noidung">
                <input type="submit" name="guibinhluan" value="Gửi">
            </form>
            <?php }else{?>
                   <p style="text-align: center;color: red;">!!! Đăng nhập để bình luận !!!</p> 
             <?php }?>
        </div>
        <?php
       
        if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
           $ma_bl=$_POST['ma_bl'];
           $noi_dung = $_POST['noidung'];
           $idpro = $_POST['idpro'];
           $iduser = $_SESSION['user']['id'];
           $ngay_bl=date("h:i:sa d/m/Y");
           insert_binhluan($ma_bl,$iduser,$idpro,$noi_dung,$ngay_bl);
           header("location: ".$_SERVER['HTTP_REFERER']);
         };
        ?>

    </div>
</body>

</html>