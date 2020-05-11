<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="app/View/css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<?php require_once('nav.php');?>
	<div class="container d-flex justify-content-center">
	
	<div class="w-50 mt-5">
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
  <button id="but">Зарегистрироваться</button>
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

</body>
</html>