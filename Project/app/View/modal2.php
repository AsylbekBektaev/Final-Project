<div class="modal fade bd-example-modal-lg " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
           <div class="m-3">
     	<div class="form-group">
    <label>Ф.И.О</label>
    <input type="text" class="form-control"  placeholder="Иванов,Иван,Иванович">
  </div>
  <div class="form-group">
    <label>Контактный Телефон</label>
    <input type="number" class="form-control"  placeholder="+7 777 777 77 77,+7 727 333 33 33">
  </div>
  <div class="form-group">
    <label >Ваша Электронная почта</label>
    <input type="email" class="form-control"  placeholder="Email@mail.ru">
  </div>
  <div class="form-group">
  	<label >Страна</label>
  	<select class="form-control" id="count">
	</select>
  </div>
  <div class="form-group">
  	<label >Город</label>
  	<select class="form-control mt-2" disabled id="city">
	</select>
  </div>
	
  <button type="submit" class="btn btn-primary">Заказать</button>


     </div>
  
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script type="text/javascript">
	  $(document).ready(function(){
	  	//вывод страна
	  	$.post("index.php?act=count",{},
	  		function(res){
	  	let jj=JSON.parse(res);
	  	let ll="";
          for(let i=0;i<jj.length;i++){
          ll+="<option value="+jj[i].id+">"+jj[i].namecount+"</option>";
        }
        $('#count').html(ll);
	  });
	  
	  	//город
	  	$("#count").change(function(){
      let id=$("#count option:selected").val();
      $.post("index.php?act=city",{
        cou:id
      },
      function(res){
      $("#city").prop('disabled',false);
      let mas2=JSON.parse(res);
      let jj="";
      for(let i=0;i<mas2.length;i++){
        jj+="<option value="+mas2[i].id+">"+mas2[i].namecity+"</option>"
      }
      $("#city").html(jj);
      });
	  });
	  });
</script>
     
    
