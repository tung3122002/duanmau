
<?php
function insert_binhluan($ma_bl,$iduser,$idpro,$noi_dung,$ngay_bl){
    $sql="INSERT INTO binh_luan(ma_bl,iduser,idpro,noi_dung,ngay_bl) values('$ma_bl','$iduser','$idpro','$noi_dung','$ngay_bl')";
    pdo_execute($sql);
}
function load_all_binhluan($idpro){
   $sql = "SELECT * FROM binh_luan taikhoan where  1";
    if($idpro > 0)$sql.=" AND idpro='".$idpro."' ";
    $sql.=" order by ma_bl desc";
    $listbinhluan=pdo_query($sql);
    return $listbinhluan;
}
function load_bl($ma_bl){
    $sql = "SELECT hang_hoa.ma_hh,hang_hoa.ten_hh, COUNT(binh_luan.noi_dung) as 'soluong', MIN(binh_luan.ngay_bl) as 'cuNhat', MAX(binh_luan.ngay_bl) as 'moiNhat' FROM binh_luan JOIN hang_hoa ON binh_luan.ma_bl = hang_hoa.ma_hh GROUP BY hang_hoa.ma_hh,hang_hoa.ten_hh HAVING soluong > 0 ORDER BY soluong desc";
    $listbinhluan=pdo_query($sql);
    return $listbinhluan;
}
function delete_bl($ma_bl){
    $sql="DELETE FROM binh_luan where ma_bl=".$ma_bl;
    pdo_execute($sql);
}
function loaall_bl_home(){
    $sql = "SELECT * FROM binh_luan,taikhoan WHERE binh_luan.iduser=taikhoan.id";
     $listsp=pdo_query($sql);
     return $listsp;
   }

    function loadall_tk(){
      $sql="SELECT danhmuc.id as madm , danhmuc.name as tendm,count(sanpham.ma_sp) as countsp, min(sanpham.gia) as mingia ,max(sanpham.gia) as maxsp,avg(sanpham.gia) as agvgia";
      $sql.=" FROM sanpham left join danhmuc on danhmuc.id=sanpham.ma_dm";
      $sql.=" group by danhmuc.id ORDER BY danhmuc.id desc";
      $list_sp=pdo_query($sql);
      return $list_sp;
    } 
?>
