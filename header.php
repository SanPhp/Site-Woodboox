<?php header("Content-type: text/html; charset=utf-8"); ?>
<!doctype html>
<html>
<head>

<meta name="keywords" content="pallets, embalagens, estrutura box, cama box, estrutura para cama box, pré-cortados, construção civil, esportação, importação, wood box, madeiras, madeiras arapongas, arapongas, paraná, eucalipto, pinus, telhas, telhado, serraria, medereira, casa, ripas, forros, vigas, caibros, etc...">
<meta name="description" content="Wood box Madeiras reflorestada, Estrutura de madeiras">
<meta name="service" content="WoodBox Madeiras reflorestadas criação de estrutura de madeiras e estrutura para cama box">
<meta name="generator" content="Agência HRS-WEB Desenvolvimento Web">
<meta name="author" content="Agência HRS-WEB Desenvolvimento Web">


<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="banner/css/global.css">
<link rel="stylesheet" href="lightbox/css/lightbox.css">

<script src="lightbox/js/jquery-1.7.2.min.js"></script>
<script src="lightbox/js/lightbox.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="banner/js/slides.min.jquery.js"></script>

<link rel="icon" href="estru/favicon.png" sizes="32x32">
<link rel="icon" href="estru/favicon.ico" sizes="32x32">


<meta charset="utf-8">
<title><?php echo $title ?></title>

<script type="text/javascript">
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'banner/img/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true,
				animationStart: function(current){
					$('.caption').animate({
						bottom:-35
					},100);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},200);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$('.caption').animate({
						bottom:0
					},200);
				}
			});
		});
	</script>

</head>