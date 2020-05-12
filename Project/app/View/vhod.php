<?php require_once('modal.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="app/View/css/style.css">
	<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

</head>
<body>
	<?php require_once('nav.php');?>
	<div class="container d-flex">
		<br>
		<br>
		<br>
		<br>
		<div class="col-md-4 mt-5 ml-5 w-50" id="vhod_block">
			<!-- <form action="index.php?act=auto" method="post"> -->
				 <div class="form-group " >
				 	<div id="bb"></div>
		    <label for="exampleInputEmail1" class="text-light">Логин:</label>
		    <input type="text"  class="form-control"  id="login">
		  </div>
		  <div class="form-group">
		    <label class="text-light" for="exampleInputPassword1">Пароль:</label>
		    <input type="password" id="pas" class="form-control" >
		  </div>
		  <div class="form-group form-check">
		    <input type="checkbox" class="form-check-input" id="Check" name="chek">
		    <label  class="form-check-label text-light" for="exampleCheck1">Запомнить меня</label>
		  </div>
		  <a class=" text-light" href="index.php?act=reg" >Зарегистрироваться</a><br>
		  <button id="but" class="btn btn-warning mt-2">Войти</button>
			<!-- </form> -->
		</div>
	</div>
	<script type="text/javascript">
			$("#but").click(function(){
				let log=$("#login").val();
				let pas=$("#pas").val();
				let chek=$("#Check").val();
				$.post("index.php?act=auto",{
					log:log,
					pas:pas
				},function(res){
					let tt=JSON.parse(res);
					let div="<div  class='w-100 mb-3 mt-3  alert alert-dark ' role='alert'>"+tt+"!</div>";
					$("#bb").html(div);
				});
			});
			</script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>