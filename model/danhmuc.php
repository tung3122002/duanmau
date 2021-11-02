
<?php

 function insert_dm($tenloai){
    $sql = "insert into danhmuc(name) values('$tenloai')";
    pdo_execute($sql);
 }
 function delete_danhmuc($id){
   $sql="delete from danhmuc where id=".$id;
   pdo_execute($sql);
 }
 function loaall_dm(){
   $sql="select * from danhmuc order by name";
   $listdm=pdo_query($sql);
   return $listdm;
 }
 function loaone_dm($id){
   $sql="select * from danhmuc where id =".$id;
   $dm=pdo_query_one($sql);
   return $dm;
 }
  function update_dm($id,$tenloai){
   $sql = "update danhmuc set name='".$tenloai."' where id='".$id."'";
   pdo_execute($sql);
  }
?>