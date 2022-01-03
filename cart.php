<?php
	include('header.php');
	include('model.php');
	
    $all=$model->get_selected_products($_SESSION['user_id']);


	echo"<table>";
	echo "<th class = 'inp'>Name</th>";
	echo "<th class = 'inp'>Price</th>";
	echo "<th class = 'inp'>Description</th>";
	echo "<th class = 'inp'>Img</th>";
	echo "<th class = 'inp'>Count</th>";
    echo "<th class = 'inp'>Sum</th>";
    echo "<th class = 'inp'>Delete</th>";

$total = 0;
foreach($all as $val){
    $sum = $val['price']*$val['quantity'];
    $total+=$sum;
    $src='admin/images/'.$val['image'];
    $count =$val['quantity'];
    $id=$val['id'];
    echo"<tr>";
    echo"<td class = 'inp'>".$val['name']."</td>";
    echo"<td class = 'inp'>".$val['price']."</td>";
    echo"<td class = 'inp'>".$val['description']."</td>";
    echo"<td><img src='$src' width='150px;'> </td>";
    echo"<td class = 'inp'><input type='number' class='count' value='$count' id=$id></td>";
    echo"<td class = 'inp'>".$sum."</td>";
    echo"<td><button class='delete' id='$id'>Delete</button></td>";
    echo"</tr>";
    
}

echo "<tr>
    
        <td colspan='5'>Total</td>
        <td >$total</td>
    </tr>";
$_SESSION['total'] = $total;
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    
$(document).ready(function(){
    $('.delete').click(function(){
        let id=$(this).attr('id');
        $.ajax({
            url:'add_to_cart.php',
            type:'post',
            data:{id,action:'delete'},
            success:function(a){
               location.reload(); 
            }
        });
    });
});
$('.count').change(function () {
    
})
</script>
<style>
    body{
        background:url(fh_footer.jpg);
    }
    .inp{
        font-family:cursive;
        color:#fff;
        padding:5px;
        margin:5px;
    }
</style>
