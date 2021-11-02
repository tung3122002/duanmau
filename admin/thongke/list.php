<?php
 foreach ($listtk as $a){
     extract($a);
     echo $madm;
 }
?>â
<div class="row1">
    <div class="row1 header">
        <h1>Danh sach loai hang</h1>
    </div>
</div>
<div class="row1 formconten">
    <div class="row1 mb formdsloai">
        <table>
            <tr>

                <th> MÃ DANH MỤC </th>
                <th>TÊN DANH MỤC</th>
                <th>TỔNG SỐ SẢN PHẨM</th>
                <th>GIÁ NHỎ NHẤT</th>
                <th>GIÁ LỚN NHẤT</th>
                <th>GIÁ TRUNG BÌNH</th>
               
               
            </tr>
            <?php
 foreach ($listtk as $a){
     extract($a);
  

   
 
echo '<tr>
         
           <td>'.$madm.'</td>
           <td>' . $tendm.'</td>
           <td>'.$countsp.'</td>
           <td>' . $mingia.'</td>
           <td>'.$maxsp.'</td>
           <td>'.$agvgia.'</td>
        
        
          
 </tr>';
            }
?>




        </table>
    </div>
    <div class="row1 mb">
       
        <a href="index.php?index=bieudo"> <input type="button" value="Xem biểu đồ "></a>
    </div>
</div>