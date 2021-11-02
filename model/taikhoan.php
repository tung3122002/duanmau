<?php
function   insert_taikhoan($user,$pass,$email,$vai_tro){
    $sql = "insert into taikhoan(user,pass,email,vai_tro) values('$user','$pass','$email','$vai_tro')";
    pdo_execute($sql);
 }
 function loaall_kh(){
  $sql="select * from taikhoan order by id";
  $listdm=pdo_query($sql);
  return $listdm;
}
 function check_user($user,$pass){
    $sql="select * from taikhoan where user ='".$user."' and pass ='".$pass."'";
    $sp=pdo_query_one($sql);
    return $sp;
  }
  function check_email($email){
    $sql="select * from taikhoan where email ='".$email."'";
    $sp=pdo_query_one($sql);
    return $sp;
  }
  function update_tk($id,$user,$pass,$email,$address,$dien_thoai,$vai_tro){
    
      $sql = "update taikhoan set id='".$id."',user='".$user."',pass='".$pass."',address='".$address."',dien_thoai='".$dien_thoai."',vai_tro='".$vai_tro."' where id='".$id."'";

    
  
   pdo_execute($sql);
  }
  function delete_kh($id){
    $sql="delete from taikhoan where id=".$id;
    pdo_execute($sql);
  }
  function loaone_tk($id){
    $sql="select * from taikhoan where id =".$id;
    $sp=pdo_query_one($sql);
    return $sp;
  }
?>