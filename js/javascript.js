$(document).ready(function() {
	var form = $('#contact_form');
	var response = $('.response');
	form.on('submit', function(e) {
		e.preventDefault();
		// reload the image
		var id = Math.random();
		$('#captcha').attr('src', '/contact/captcha.php?id=' + id);
		$.ajax({
			url: 'ajax/contact.php',
			type: 'POST',
			dataType: 'html',
			data: form.serialize(),
			beforeSend: function(){
				response.fadeOut();
				response.fadeIn();
				response.html('Loading...');
			},
			success: function(data){
				response.html(data).fadeIn();
				form.trigger('reset');
			},
			error: function(e){
				console.log(e)
			}
		});
	});
});