<?php require_once('modal.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="app/View/css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
</head>
<body>
	<?php require_once('nav.php');?>
	<div class="container d-flex justify-content-center">
	
	<div class="w-50 mt-1 ">
		<h1 class="ml-5">Зарегистрироваться</h1>
		<div id="bb"></div>

  <div class="form-group row ">
    <label for="staticEmail" class="col-sm-2 col-form-label">Логин</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="login" >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Пароль</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="pas1">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label ">Повторите пароль</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="pas2">
    </div>
  </div>
   <div class="form-group row ">
    <label for="staticEmail" class="col-sm-2 col-form-label">Полное имя</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="name">
    </div>
  </div>
  <button class="btn btn-warning ml-2 mt-2 mb-2" id="but">Зарегистрироваться</button>
	</div>

	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$("#but").click(function(){
				let log=$("#login").val();
				let pas1=$("#pas1").val();
				let pas2=$("#pas2").val();
				let name=$("#name").val();
				// проверка паролья
				$.post("index.php?act=registr",{
					log:log,
					pas1:pas1,
					pas2:pas2,
					name:name
				},function(rer){
					$("#bb").html(rer);
				});
			});
		});
	</script>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
</body>
</html>