<?php
	require 'cart.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!--<script type="text/javascript" src="vue.js"></script>
	<script type="text/javascript" src="script.js"></script>-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CoffeTea</title>
</head>
<body>
	<header>
		<img class="logo" src="logo.png">
		<nav>
			<ul class="nomarker font-calibri">
				<li><a href=".">Заказать чашечку кофэ</a></li>
				<li><a href=".">О нас</a></li>
				<li><a href=".">Исходный код</a></li>
			</ul>
		</nav>
	</header>
	<main id="app">
		<div class="sales">
				<button>fjwefw</button>
				<img id="img1" src="slider-imgs/img1.png" class="">
				<img id="img2" src="slider-imgs/img2.png" class="disabled">
				<img id="img3" src="slider-imgs/img3.png" class="disabled">
				<img id="img4" src="slider-imgs/img4.png" class="disabled">
				<button>fjwefw</button>
			<!--<form>
				<input v-on:click="setSliderImg(1)" name="slider" type="radio" name="img1">
				<input v-on:click="setSliderImg(2)" name="slider" type="radio" name="img2">
				<input v-on:click="setSliderImg(3)" name="slider" type="radio" name="img3">
				<input v-on:click="setSliderImg(4)" name="slider" type="radio" name="img4">
			</form>
			<button v-on:click="sliderNext()">sliderNext()</button>-->
		</div>
	</main>
	<footer>
		<div>
			<p class="font-calibri">made by kristaller</p>
		</div>
	</footer>
</body>
<script type="text/javascript" src="vue.js"></script>
<script type="text/javascript" src="script.js"></script>
</html>