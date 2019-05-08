<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>pro Shoe store</title>
    <?php wp_head() ?>
</head>
<body>
	<section class="menu">
		<div class="logo">
			<a href="#" class="logo-item">pro.Shoe</a>
		</div>
		<div class="menu-list">
			<a href="#" class="menu-item">Мужские</a>
			<a href="#" class="menu-item">Женские</a>
			<a href="#" class="menu-item">Детские</a>
			<a href="#" class="menu-item">Спортивные</a>
			<a href="#" class="menu-item">Бренды</a>
		</div>
		<div class="set-of-social-buttons">
			<a href="#" class="social-button-item"><img src="<?php echo get_template_directory_uri() . '/' ?>img/front-page/header/fb.png" alt=""></a>
			<a href="#" class="social-button-item"><img src="<?php echo get_template_directory_uri() . '/' ?>img/front-page/header/tw.png" alt=""></a>
			<a href="#" class="social-button-item"><img src="<?php echo get_template_directory_uri() . '/' ?>img/front-page/header/g+.png" alt=""></a>
			<a href="#" class="social-button-item"><img src="<?php echo get_template_directory_uri() . '/' ?>img/front-page/header/insta.png" alt=""></a>
		</div>
		<div class="shop-button">
			<a href="#" class="shop-button-item"><img src="<?php echo get_template_directory_uri() . '/' ?>img/front-page/header/cart.png" alt=""></a>
		</div>
		<div class="search">
			<input class="search-field" type="text" name="search-request">
			<div class="search-button search-button-disabled"><img src="<?php echo get_template_directory_uri() . '/' ?>img/front-page/header/search.png" alt=""></div>
			<a href="#" class="search-button search-button-enabled"><img src="<?php echo get_template_directory_uri() . '/' ?>img/front-page/header/search.png" alt=""></a>
		</div>
	</section>
	<header id="header">
		<section class="actual-offer">
			<h1>Nike shoes</h1>
			<p>Купи сейчас и получите скидку 10%</p>
			<a href="#" class="shop-now">Покупать!</a>
		</section>

	</header>



