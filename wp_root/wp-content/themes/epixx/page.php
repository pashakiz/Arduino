<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title><?php bloginfo("name"); ?></title>
	<meta name="description" content="<?php bloginfo("description"); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="<?php bloginfo("template_directory"); ?>/favicon.png" />
	<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/fonts.css" />
	<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/style.css" />
	<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/media.css" />
</head>
<body>
	<header data-stellar-background-ratio="0">
		<div class="overlay">
			<div class="container clearfix">
				<div class="title"><?php the_field('header_title'); ?></div>
				<div class="about">
					<p><?php the_field('header_about1'); ?></p>
					<p><?php the_field('header_about2'); ?></p>
					<a href="#form1" class="btn btn1form fancybox"><?php the_field('btn1form_text'); ?></a>
				</div>
			</div>
		</div>
	</header>
	<section class="bulets">
		<div class="container clearfix">
			<div class="block">
				<ul class="list-chip">
					<?php the_field('list_chip'); ?>
				</ul>
				<div class="price"><?php the_field('price_title'); ?> <br><span>9 990 руб.</span></div>
			</div>
			<div class="block">
				<div class="image-container">
					<img src="<?php bloginfo("template_directory"); ?>/img/arduino.png" alt="">
				</div>
				<a href="#form2" class="btn btn2form fancybox"><?php the_field('btn2form_text'); ?></a>
			</div>
		</div>
	</section>
	<section class="proof-text">
		<div class="container">
			<div class="text-row1 clearfix">
				<div class="text-row1__item text-row1__item1"><?php the_field('text-row1'); ?></div>
				<div class="text-row1__item text-row1__item2">
					<div class="text-row1__item2__value">202</div>
					<div class="text-row1__item2__info">кружка</div>
				</div>
				<div class="text-row1__item text-row1__item3"></div>
			</div>
			<div class="text-row2"><?php the_field('text-row2'); ?></div>
		</div>
	</section>
	<section class="proof-photos">
		<div class="container">
			<a class="proof-photos__container fancybox" href="#form2">
				<div class="proof-photos__item">
					<img src="<?php bloginfo("template_directory"); ?>/img/item01.jpg" alt="">
					<div class="proof-photos__hover">
						<div class="proof-photos__hover__text">
							<div class="proof-photos__hover__t1">+ваш</div>
							<div class="proof-photos__hover__t2">кружок</div>
						</div>
					</div>
				</div>
				<div class="proof-photos__item">
					<img src="<?php bloginfo("template_directory"); ?>/img/item02.jpg" alt="">
					<div class="proof-photos__hover">
						<div class="proof-photos__hover__text">
							<div class="proof-photos__hover__t1">+ваш</div>
							<div class="proof-photos__hover__t2">кружок</div>
						</div>
					</div>
				</div>
				<div class="proof-photos__item">
					<img src="<?php bloginfo("template_directory"); ?>/img/item03.jpg" alt="">
					<div class="proof-photos__hover">
						<div class="proof-photos__hover__text">
							<div class="proof-photos__hover__t1">+ваш</div>
							<div class="proof-photos__hover__t2">кружок</div>
						</div>
					</div>
				</div>
				<div class="proof-photos__item">
					<img src="<?php bloginfo("template_directory"); ?>/img/item04.jpg" alt="">
					<div class="proof-photos__hover">
						<div class="proof-photos__hover__text">
							<div class="proof-photos__hover__t1">+ваш</div>
							<div class="proof-photos__hover__t2">кружок</div>
						</div>
					</div>
				</div>
				<div class="proof-photos__item">
					<img src="<?php bloginfo("template_directory"); ?>/img/item05.jpg" alt="">
					<div class="proof-photos__hover">
						<div class="proof-photos__hover__text">
							<div class="proof-photos__hover__t1">+ваш</div>
							<div class="proof-photos__hover__t2">кружок</div>
						</div>
					</div>
				</div>
				<div class="proof-photos__item">
					<img src="<?php bloginfo("template_directory"); ?>/img/item03.jpg" alt="">
					<div class="proof-photos__hover">
						<div class="proof-photos__hover__text">
							<div class="proof-photos__hover__t1">+ваш</div>
							<div class="proof-photos__hover__t2">кружок</div>
						</div>
					</div>
				</div>
				<div class="proof-photos__item">
					<img src="<?php bloginfo("template_directory"); ?>/img/item07.jpg" alt="">
					<div class="proof-photos__hover">
						<div class="proof-photos__hover__text">
							<div class="proof-photos__hover__t1">+ваш</div>
							<div class="proof-photos__hover__t2">кружок</div>
						</div>
					</div>
				</div>
				<div class="proof-photos__item">
					<img src="<?php bloginfo("template_directory"); ?>/img/item08.jpg" alt="">
					<div class="proof-photos__hover">
						<div class="proof-photos__hover__text">
							<div class="proof-photos__hover__t1">+ваш</div>
							<div class="proof-photos__hover__t2">кружок</div>
						</div>
					</div>
				</div>
				<div class="proof-photos__item">
					<img src="<?php bloginfo("template_directory"); ?>/img/item09.jpg" alt="">
					<div class="proof-photos__hover">
						<div class="proof-photos__hover__text">
							<div class="proof-photos__hover__t1">+ваш</div>
							<div class="proof-photos__hover__t2">кружок</div>
						</div>
					</div>
				</div>
				<div class="proof-photos__item last active">
					<img src="<?php bloginfo("template_directory"); ?>/img/item01.jpg" alt="">
					<div class="proof-photos__hover">
						<div class="proof-photos__hover__text">
							<div class="proof-photos__hover__t1">+ваш</div>
							<div class="proof-photos__hover__t2">кружок</div>
						</div>
					</div>
				</div>
			</a>
		</div>
	</section>
	<footer>
		<div class="container clearfix">
			<div class="copy"><?php the_field('footer_copy'); ?></div>
			<div class="contact"><?php the_field('footer_contact'); ?></div>
		</div>
	</footer>
	<div id="form1" class="form" style="display: none">
		<form id="f1" action="" method="post">
			<input type="hidden" name="form_title" value="Form1"/>
			<input type="text" name="wpname" placeholder="ФИО" maxlength="50" required>
			<input type="text" name="wpemail" placeholder="Email" maxlength="50" required>
			<button class="btn btn-submit" type="submit">Отправить</button>
		</form>
		<div class="order_status">Спасибо!<br>Ваша заявка отправлена!</div>
	</div>
	<div id="form2" class="form" style="display: none">
		<form id="f2" action="" method="post">
			<input type="hidden" name="form_title" value="Form2"/>
			<input type="text" name="wpname" placeholder="ФИО" maxlength="50" required>
			<input type="text" name="wpemail" placeholder="Email" maxlength="50" required>
			<input type="text" name="wpphone" placeholder="Телефон" maxlength="50" required>
			<input type="text" name="wporg" placeholder="Учебное заведение" maxlength="50" required>
			<button class="btn btn-submit" type="submit">Отправить</button>
		</form>
		<div class="order_status">Спасибо!<br>Ваша заявка отправлена!</div>
	</div>
	<!--[if lt IE 9]>
	<script src="js/html5shiv/es5-shim.min.js"></script>
	<script src="js/html5shiv/html5shiv.min.js"></script>
	<script src="js/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="js/html5shiv/respond.min.js"></script>
	<![endif]-->
	<script src="<?php bloginfo("template_directory"); ?>/js/jquery-2.1.4.min.js"></script>
	<script src="<?php bloginfo("template_directory"); ?>/js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="<?php bloginfo("template_directory"); ?>/js/jquery.smoothscroll.js"></script>
	<script src="<?php bloginfo("template_directory"); ?>/js/jquery.stellar.min.js"></script>
	<script src="<?php bloginfo("template_directory"); ?>/js/jquery.textPlaceholder.js"></script>
	<script src="<?php bloginfo("template_directory"); ?>/js/common.js"></script>
	<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
	<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>