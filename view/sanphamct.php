
<div class="row1 mb ">
    <div class="boxtrai mr ">
        <div class="row1 mb">
            <div class="boxtieude ">Giới thiệu SP</div>
            <div style="text-align: center;" class="row1 boxconten ">
                <?php
                 extract($loasp);
                 $hinh=$imgpat.$img;
                 echo '<img src="'.$hinh.'" alt=""> <br>';
                 echo $name_sp;
                ?>
            </div>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
       
              $("#binhluan").load("view/binhluan/binhluan_form.php", {idpro: <?=$ma_sp?>});
            });
           
               </script>
        <div class="row1" id="binhluan">

        </div>
         
       

       
       
        <div class="row1 mb">
            <div class="boxtieude ">Giới thiệu</div>
            <div class="row1 boxconten ">
            </div>

        </div>

    </div>

    <div class="boxphai">
        <?php include 'boxright.php' ?>
    </div>
</div>