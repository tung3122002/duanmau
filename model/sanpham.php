
<?php

 function   insert_sp($tensp,$gia,$filename,$mota,$ma_dm){
    $sql = "insert into sanpham(name_sp,gia,img,mo_ta,ma_dm) values('$tensp','$gia','$filename','$mota','$ma_dm')";
    pdo_execute($sql);
 }
 function delete_sp($id){
   $sql="delete from sanpham where ma_sp=".$id;
   pdo_execute($sql);
 }
 function loaall_sp_home(){
  $sql = "SELECT * FROM sanpham,danhmuc WHERE sanpham.ma_dm=danhmuc.id";
   $listsp=pdo_query($sql);
   return $listsp;
 }
 function loaall_sp_top10(){
  $sql = "SELECT * FROM sanpham WHERE luot_xem > 0 ORDER BY luot_xem DESC LIMIT 0, 10";
   $listsp=pdo_query($sql);
   return $listsp;
 }
 function loaall_sp(){
  $sql = "SELECT * FROM sanpham,danhmuc WHERE sanpham.ma_dm=danhmuc.id";
   $listsp=pdo_query($sql);
   return $listsp;
 }
 function loaone_sp($id){
   $sql="select * from sanpham where ma_sp =".$id;
   $sp=pdo_query_one($sql);
   return $sp;
 }
  function update_sp($id,$tensp,$gia,$mota,$filename,$ma_dm){
    if($filename!=""){
      $sql = "update sanpham set name_sp='".$tensp."',gia='".$gia."',mo_ta='".$mota."',img='".$filename."',ma_dm='".$ma_dm."' where ma_sp='".$id."'";
    }
    else{
      $sql = "update sanpham set name_sp='".$tensp."',gia='".$gia."',mo_ta='".$mota."',ma_dm='".$ma_dm."' where ma_sp='".$id."'";

    }
  
   pdo_execute($sql);
  }
  function loaone_sp_name($kyw="",$iddm=0){
    $sql ="select * from sanpham where 1";
    if($kyw!=""){
         $sql .= " and name_sp like '%".$kyw."%'";
    }
    if($iddm >0){
      $sql.=" and ma_dm ='".$iddm."'";
    }
    $sql.=" order by ma_sp desc";
    $listsp_name=pdo_query($sql);
    return $listsp_name;
  }
?>