<?php @session_start();?><div class="nav">
	<a href="tel:+77023533674" class="mr-3 ml-3"><i class="fas fa-mobile-alt"></i> +7 (702) 353 36 74</a>
	<a href="mailto:ask@htmlbook.ru"><i class="far fa-envelope"></i> ask@htmlbook.ru</a>
	<ul class="nav_item">
		<li><a href="index.php">Главная</a></li>
		<li><a href="index.php?act=selectproduct">Услуги</a></li>
		<li><a href="#compain">О Нас</a></li>
		<li><a href="#">FOUR</a></li>
		<li><a href="#">FIVE</a></li>
	</ul>
	<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">ОБРАТНАЯ СВЯЗЬ</button>
		
		<?php if(isset($_SESSION['login'])){?>
			<button type="button" class="btn btn-primary ml-2"><a href="index.php?act=exit">Выйти</a></button>
		<?php
		}else{?>
			<button type="button" class="btn btn-primary ml-2"><a href="index.php?act=vhod">Войти</a></button>
		<?php
		}?>
		
		
</div>