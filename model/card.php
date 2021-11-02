<?php  
 
 function viewcard($del){
   global $imgpat;
    $tong=0;
    $card[1]=$imgpat;
    $i=0;
    if($del==1){
        $xoasp_th='<th>THOA TÁC</th> ';
      $xoasp_td=' <td><a href="index.php?act=delcard&idcard='.$i.'"><input type="button" value="Xóa"></a> </td>  ';

    }
    else{
      $xoasp_th="";
      $xoasp_td="";
    }
  
    echo '
    <tr>

               
    <th>MÃ SẢN PHẨM</th>
    <th>HÌNH</th>
    <th>GIÁ</th>
    <th>TÊN SẢN PHẨM</th>
    <th>SỐ LƯỢNG</th>
   
    <th>THÀNH TIỀN</th>
    '.$xoasp_th.'
    
</tr>';

  foreach ($_SESSION['mycard'] as $card) {
     
  
      $thanh_tien=$card[2]*$card[4];
      $tong+=$thanh_tien;
     
     
  //   echo $card[1];
     
    echo '
   
    <tr>
  
    <td>'.$card[0].'</td>
   <td> <img src="'.$card[1].' "  width="90px" alt=""></td> 
   
    <td>'.$card[2].'</td>
    <td>'.$card[3].'</td>
    <td>'.$card[4].'</td>
    <td>'.$card[5].'</td>
    '.$xoasp_td.'
   
      </tr>';
      $i+=1;
  }
 echo'
 <tr>
 <td colspan="5">Thành tiền  </td>
 <td colspan="1">        '.$tong.' VND</td>
 

 </tr>
 ';

 }
      function tongdh(){
        $tong=0;
        foreach ($_SESSION['mycard'] as $card) {
     
  
          $thanh_tien=$card[2]*$card[4];
          $tong+=$thanh_tien;
        }    
        return $tong;
      }
  //     function insert_bill($name,$email,$address,$pttt,$dien_thoai,$tongdh,$ngay_dh){
  //       $sql = "insert into bill(bill_name,bill_email,bill_address,bill_pttt,biil_tel,ngay_dh,total) values('$name','$email','$address','$pttt','$dien_thoai','$tongdh','$ngay_dh')";
  //       pdo_execute_lastinsert($sql);
  //    }
  //    function insert_card($iduser,$idpro,$img,$name,$price,$soluong,$thanhtien,$idbill){
  //     $sql = "insert into card(iduser,idpro,img,name,price,soluong,thanhtien,idbill) values('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
  //     pdo_execute($sql);
  //  }
   function loadone_bill(){
     $i=34;
    $sql="select * from bill where id=".$i;
    $bill=pdo_query($sql);
    return $bill;
}
    // function loadall_tk(){
    //   $sql="select danhmuc.id as madm , danhmuc.name as tendm,count(sanpham.ma_sp) as countsp, min(sanpham.gia) as mingia ,max(sanpham.gia) as maxsp, agv(sanpham.gia) as agvgia";
    //   $sql.=" from sanpham left join danhmuc on danhmuc.id=sanpham.ma_dm";
    //   $sql.=" group by danhmuc.id order by danhmuc.id desc";
    //   $list=pdo_query($sql);
    //   return $list;
    // } 
?>