// ПРелоадер


// счетчик

// menu
$(document).ready($(document).scroll(function(){
	$('#nav').removeClass('fixed');
	if($(window).scrollTop() >20){
		$('#nav').removeClass('fixed');
	}
}));



// TEXT NABOR
$(document).ready(function(){
	var typed = new Typed('.hero-typed-text', {
  strings: ['This is a JavaScript library', 'This is an ES6 module'],
  smartBackspace: true // Default value
});
});

// menu svazi
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
// zakaz
$(document).ready(function(){
	$('#link').on('click',function(){
		alert('HELLO');
	});
});