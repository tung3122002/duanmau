<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xshop</title>
    <link rel="stylesheet" href="view/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .timkiem{
            float: right;
        }
        a{
            text-decoration: none;
        }
  
     .button{
       position: relative;
       display: inline-block;
       padding: 15px 30px;
       background-color:transparent;
       color:#6a5af9;
       border:0px;
     }
     .button span{
       position: absolute;
       background-color: blue;
       display: block;
       transition: all 0.2s ease;

     }
     .button span:first-child{
       top: 0;
       left: 0;
       width: 0;
       height: 2px;

     }
     .button span:nth-child(2){
       right: -1px;
       top: 0;
       width: 2px;
       height: 0;

     }
    .button span:nth-child(3){
     bottom: 0;
     right: -1px;
     width: 0;
     height: 2px;


     }
    .button span:last-child{
      left: 0;
      bottom: 0;
      height: 0;
      width: 2px;
    }
    .button:hover span:nth-child(odd){
      width: 100%;
    }
    .button:hover span:nth-child(even){
      width: 100%;
    }
</style>
</head>
<body>
    <div class="container1">
        <div class="row1 mb header">
        <h1>  Siêu Thị Trực Tuyến</h1>

        </div>
        <div class="row1 mb menu">
         <ul class="menu">
             <li class="li1"><a href="index.php">TRANG CHỦ</a></li>
             <li class="li1"><a href="index.php?act=goithieu">GIỚI THIỆU</a></li>
             <li class="li1"><a href="">LIÊN HỆ</a></li>
             <li class="li1"><a href="">GÓP Ý</a></li>
             <li class="li1"><a href="">HỎI ĐÁP</a></li>
             <li style="margin-left:400px ; margin-top:15px">
         <div class="timkiem" >
                     <form action="index.php?act=sanpham" method="post">
                         <input type="text" name="kyw" id="" placeholder="" >
                         
                         <input type="submit" name="timkiem" value="Tìm kiếm">
                     </form>
                    </div>
        </div>
         </li>
         </ul>
        
         