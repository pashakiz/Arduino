$(document).ready(function() {

	//higlight pictures
	$(".proof-photos__item").on("mouseover", function() {
		$(".proof-photos__item").removeClass("active");
		$(this).addClass("active");
	});
	$(".proof-photos__item").on("mouseout", function() {
		$(".proof-photos__item").removeClass("active");
		$(".proof-photos__item.last").addClass("active");
	});

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
	$("form#f1").submit(function() {

		var form = $(this),
			name = form.find("input[name='wpname']").val(),
			email = form.find("input[name='wpemail']").val();

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
			url: "wp-admin/admin-ajax.php?action=send_form",
			data: $("form#f1").serialize(),
			success: function(response) {
				$(".order_status").show();
				$("form#f1").hide();
				$("form#f2").hide();
				console.log('response: ' + response);
			},
			error:  function(xhr, str){
				alert('Возникла ошибка: ' + xhr.responseCode);
			}
		}).done(function() {
			//alert("Спасибо за заявку!");
			setTimeout(function() {
				$.fancybox.close();
			}, 2000);
		});
		return false;
	});

	$("form#f2").submit(function() {

		var form = $(this),
			name = form.find("input[name='wpname']").val(),
			email = form.find("input[name='wpemail']").val(),
			phone = form.find("input[name='wpphone']").val(),
			org = form.find("input[name='wporg']").val();

		if (!name || !email || !phone || !org) {
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
			url: "wp-admin/admin-ajax.php?action=send_form",
			data: $("form#f2").serialize(),
			success: function(response) {
				$(".order_status").show();
				$("form#f1").hide();
				$("form#f2").hide();
				console.log('response: ' + response);
			},
			error:  function(xhr, str){
				alert('Возникла ошибка: ' + xhr.responseCode);
			}
		}).done(function() {
			//alert("Спасибо за заявку!");
			setTimeout(function() {
				$.fancybox.close();
			}, 2000);
		});
		return false;
	});

});