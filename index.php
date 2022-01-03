<?php 
include('header.php');
?>
<div id = "main">
<div id = "sidebar1">
<table>
    <tr>
        <th>CATEGORY</th>
        <th>SHOW</th>

    </tr>
<?php

include('model.php');

$all = $model->get_categories();

foreach($all as $val){
    $id = $val['id'];
    $name = $val['name'];

    echo"<tr id='$id'>";
    echo "<td class='name'>$name</td>
            <td><button ><a href='products.php?cat_id=$id'>SHOW</a></button></td>

        </tr>";
}
?>
</table>
</div>
<div id = "re_blok">
   <img src="product_ image/reclama.jpg" width = "500px">
</div>
<div id = "re_blok1">
   <img src="product_ image/reclama1.jpg" width = "500px">
</div>
</div>
<section class = "sec"><h1>NEW COLLECTION</h1></section>
<div class="content">
    <div class = "product">
        <img src = "product_ image/hood1.jpg" width = "250px">
    </div>   
    <div class = "product">
        <img src = "product_ image/hood2.jpg" width = "250px">
    </div>   
    <div class = "product">
        <img src = "product_ image/hood3.jpg" width = "250px">
    </div>   
    <div class = "product">
        <img src = "product_ image/hood4.jpg" width = "250px">
    </div> 
</div>
<div class = "content">
<div class = "product">
        <img src = "product_ image/hood5.jpg" width = "250px">
    </div> 
    <div class = "product">
        <img src = "product_ image/hood6.jpg" width = "250px">
    </div>   
    <div class = "product">
        <img src = "product_ image/hood7.jpg" width = "250px">
    </div>   
    <div class = "product">
        <img src = "product_ image/hood8.jpg" width = "250px">
    </div>     
</div>
<section class = "sec"><h1>Happy Holidays</h1></section>
<div id="re_blok2">
     <img src="product_ image/collection.jpg" height = "200px">
     <img src="product_ image/reclama3.png" height = "200px" width = "350px">
     <img src="product_ image/reclama4.png" height = "200px" width = "350px">
</div>
<section class = "sec"><h1>Coca-Cola Mode</h1></section>
<div class = "content">
    <div class = "product">
        <img src = "product_ image/hood9.jpg" width = "250px">
    </div> 
    <div class = "product">
        <img src = "product_ image/hood10.jpg" width = "250px">
    </div>   
    <div class = "product">
        <img src = "product_ image/hood11.jpg" width = "250px">
    </div>   
    <div class = "product">
        <img src = "product_ image/hood12.jpg" width = "250px">
    </div>
</div>
<div class = "content">
    <div class = "product">
        <img src = "product_ image/hood13.jpg" width = "250px">
    </div> 
    <div class = "product">
        <img src = "product_ image/hood14.jpg" width = "250px">
    </div>   
    <div class = "product">
        <img src = "product_ image/hood15.jpg" width = "250px">
    </div>   
    <div class = "product">
        <img src = "product_ image/hood16.jpg" width = "250px">
    </div>
</div>
<div class = "content">
    <div class = "product">
        <img src = "product_ image/hood17.jpg" width = "250px">
    </div> 
    <div class = "product">
        <img src = "product_ image/hood18.jpg" width = "250px">
    </div>   
    <div class = "product">
        <img src = "product_ image/hood19.jpg" width = "250px">
    </div>   
    <div class = "product">
        <img src = "product_ image/hood20.jpg" width = "250px">
    </div>
</div>
<section class = "sec">For More Sign In</section>
<footer id="end">
    <div id = "end1">
        <h2>Contact Us</h2>
        <p>Email.` freshhoods@gmail.com</p>
        <p>inst.` @freshhods</p>
        <p>facebook.` freshhoods</p>
    </div>
</footer>
<style>
  body{
      background:url(fh_footer.jpg);
  }
  .name{
      font-family:cursive;
      color:#fff;
  }
  th{
      color:#731CED;
  }
  #sidebar1{
      box-shadow: 10px 10px 10px 2px rgba(34, 60, 80, 0.2) inset,
                10px 10px 10px 2px rgba(34, 60, 80, 0.2);
      width:200px;
      margin:4px;
      padding:2px;
  }
  #main{
      display:flex;
      flex-direction:row;
      justify-content:center;
      align-items:center;
  }
  #re_blok{
    box-shadow: 10px 10px 10px 2px rgba(34, 60, 80, 0.2) inset,
                10px 10px 10px 2px rgba(34, 60, 80, 0.2);
      width:500px;
      margin:4px;
      padding:2px;
  }
  #re_blok1{
    box-shadow: 10px 10px 10px 2px rgba(34, 60, 80, 0.2) inset,
                10px 10px 10px 2px rgba(34, 60, 80, 0.2);
      width:500px;
      margin:4px;
      padding:2px;
  }
  .content{
    display:flex;
    flex-direction:row;
    justify-content:center;
    align-items:center;
  }
  .product{
      box-shadow: 10px 10px 10px 2px rgba(34, 60, 80, 0.2) inset,
                10px 10px 10px 2px rgba(34, 60, 80, 0.2);
      width:250px;
      margin:4px;
      padding:2px;
  }
  .sec{
      text-align:center;
      font-family:cursive;
      font-size:25px;
      background:#7423FF;
  }
  #re_blok2{
    box-shadow: 10px 10px 10px 2px rgba(34, 60, 80, 0.2) inset,
                10px 10px 10px 2px rgba(34, 60, 80, 0.2);
      height:200px;
      margin:4px;
      padding:2px;
      display:flex;
      flex-direction:row;
      justify-content:center;
      align-items:center;
  }
  #end{
      background:transparent;
  }
  #end1{
      color:#fff;
      font-family:cursive;
      margin-right:20px;
      text-align:center;
  }
</style>
