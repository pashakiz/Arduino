$(document).ready(function() {

	//Placeholder
	//Doc: https://github.com/NV/placeholder.js/
	$("[placeholder]").textPlaceholder();

	//Parallax (Stellar)
	//Документация: http://markdalgleish.com/projects/stellar.js/docs/
	//<div class="image" data-stellar-background-ratio="0">...</div>
	$.stellar({
		horizontalScrolling: false,
		verticalOffset: 0
	});
	
	//Попап менеджер FancyBox
	//Документация: http://fancyapps.com/fancybox/
	//<a class="fancybox" rel="group" href="big_image_1.jpg"><img src="small_image_1.jpg" alt="" /></a>
	//<a class="fancybox" rel="group" href="big_image_2.jpg"><img src="small_image_2.jpg" alt="" /></a>
	$(".fancybox").fancybox();

	//Аякс отправка форм
	//Документация: http://api.jquery.com/jquery.ajax/
	$("form").submit(function() {

		var name = $(this).find("input[name='name']").val(),
			email = $(this).find("input[name='email']").val();

		if (!name || !email) {
			alert("Заполните поля формы.");
			return false;
		}

		var email_regexp = /.+@.+\..+/i;
		var email_test = email_regexp.test(email);
		if (!email_test) {
			alert("Введен некоректный Email-адрес.");
			return false;
		}

		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $("form").serialize(),
			success: function(data) {
				//$('#order_status').html(data);
				$('#order_status').html('Спасибо, Ваша заявка отправлена!');
				console.log("jquery-ajax-mail-success");
			},
			error:  function(xhr, str){
				alert('Возникла ошибка: ' + xhr.responseCode);
			}
		}).done(function() {
			alert("Спасибо за заявку!");
			setTimeout(function() {
				$.fancybox.close();
			}, 1000);
		});
		return false;
	});

});