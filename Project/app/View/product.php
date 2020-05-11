<?php
@session_start();
$mas=$_REQUEST['PRO_LIST'];
?>
<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>	<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="app/View/css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<?php  require_once('nav.php');?>

  
<!-- info -->
<br>
<span class="korzina">
	  <a href="index.php?act=cart" type="button"><i class="fas fa-shopping-cart  fa"></i><?php
  $jj=0; 
foreach ($_SESSION['cart'] as $key => $value) {
 if($value > 0){
  $jj++;   
  }
}if($jj > 0){
	echo '         '.$jj;
}
?>
</a>
</span>


 
<div class="container d-flex flex-wrap justify-content-end mt-5">
 <?php
foreach ($mas as $key => $value) {
?>
<div class="card">
	<h2><?php echo $value['name'];?></h2>
	<h4><?php echo $mas[$key]['price']?>/тенге</h4>
	<p class="card-text"><?php echo $value['opisan'];?></p>
	<form action="index.php?act=id" method="post">
        	<input type="hidden" name="id" value="<?php echo $key;?>">
			 <button  class="btn btn-primary" >В Корзину</button>
        </form>
        <a href="#<?php echo $value['name'];?>">Подробнее</a>
</div>
<!-- <div class="row mt-1 ml-1">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title"><?php echo $value['name'];?></h2>
        <h4><?php echo $mas[$key]['price']?>/тенге</h4>
        <p class="card-text"><?php echo $value['opisan'];?></p>
        <form action="index.php?act=id" method="post">
        	<input type="hidden" name="id" value="<?php echo $key;?>">
			 <button  class="btn btn-primary" >В Корзину</button>
        </form>
        <a href="#<?php echo $value['name'];?>">Подробнее</a>
      </div>
    </div>
  </div>
</div> -->
<?php
}
?>
</div>





<?php require_once('modal.php');?>
<script type="text/javascript">
	$(document).ready(
	$.post("../../index.php?act=selectproduct",{},
		function(res){
		console.log(res);
		})
	);
	</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>