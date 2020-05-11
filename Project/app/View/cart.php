<?php 
@session_start();
 $mas=$_REQUEST['PRO_LIST'];
 require_once('modal.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="app/View/css/style.css">
</head>
<body>
<?php require_once('nav.php');?>
	<br><br><br>


	<div class="container">
		<a href="index.php?act=selectproduct">НАЗАД</a>


<table class="w-75 mb-3 ">
	<tr class=" cart_table">
	<th></th>
	<th class="text-center">Наименование товара</th>
	<th  class="text-center">Количество</th>
	<th  class="text-center">Сумма</th>
	<th></th>
	<th></th>
	</tr>
	<?php
	if(isset($_SESSION['cart'])){
			$ss=0;
			$cart = $_SESSION['cart'];
			$uu=true;
				foreach($cart as $productId => $quantity) {
					if($quantity > 0){
						$uu=false;
			 ?>
			 <tr class="cart_table text-center">
			 	<td class="text-center cart_table">
			 		<form action="index.php?act=del" method="post">
				<input type="hidden" name="del"  value="<?php echo  $productId;?>">
				<button class="bt_cart">X</button>
				</form>
			 	</td>
			 	<td class="text-center cart_table">
			 		<h5><?php echo $mas[$productId]['name'];?></h5>
				 </td>
				 <td class="text-center cart_table">
				 	<h6><?php echo $quantity;?></h6>
				 </td>
				 <td class=" cart_table">
				 	<h6><?php echo  $sum=$mas[$productId]['price']*$quantity;?></h6>
				 </td>
				 <td class="cart_table text-center">
				 <form action="index.php?act=id2" method="post" >
					<input type="hidden" name="id2" value="<?php echo $productId;?>">
					<button class="bt_cart">+</button>
				</form>
				 </td>
				 <td class="cart_table text-center">
				<form action="index.php?act=id3" method="post">
					<input type="hidden" name="id3"  value="<?php echo  $productId;?>">
					<button class="bt_cart">-</button>
				</form>
				 </td>
			</tr>
			<?php $ss+=$sum;}}
			?>
			<tr><td class="tt"></td><td class="tt"></td><td class="tt"></td><td class="ml-5 text-center"><h6><?php echo 'Итого: '.$ss.' тенге';?></h6></td></tr>
</table>
<?php
if($uu===true){
?>
	<h3><?php echo "КОРЗИНА ПУСТАЯ";?></h3>
 <?php
}
}
?>
	<button><?php if(isset($_SESSION['login'])){echo "YES LOGIN";}else{echo "NO login";}?></button>
	</div>

</body>
</html>