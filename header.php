<!DOCTYPE html>
<html>
<head>
	<title><?php echo wp_title(); ?></title>
	<meta charset="windows-1252">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>
<body onload="setInterval(changeBackground, 25000); ">
	<audio id="pop" src="<?php echo get_template_directory_uri(); ?>/pop.mp3"></audio>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<img class="img-responsive" id="title" src="<?php echo get_template_directory_uri(); ?>/texture/new_bubbles/background.png" alt="BeXcellent">
				<img id="b1" class="bubble" src="<?php echo get_template_directory_uri(); ?>/texture/new_bubbles/single_bubble.png" alt="TEST">
				<img id="b2" class="bubble" src="<?php echo get_template_directory_uri(); ?>/texture/new_bubbles/single_bubble.png" alt="TEST">
				<img id="b3" class="bubble" src="<?php echo get_template_directory_uri(); ?>/texture/new_bubbles/single_bubble.png" alt="TEST">
				<img id="b4" class="bubble" src="<?php echo get_template_directory_uri(); ?>/texture/new_bubbles/single_bubble.png" alt="TEST">
				<img id="b5" class="bubble" src="<?php echo get_template_directory_uri(); ?>/texture/new_bubbles/single_bubble.png" alt="TEST">
				<img id="b6" class="bubble" src="<?php echo get_template_directory_uri(); ?>/texture/new_bubbles/single_bubble.png" alt="TEST">
				<img id="b7" class="bubble" src="<?php echo get_template_directory_uri(); ?>/texture/new_bubbles/single_bubble.png" alt="TEST">
				<img id="b8" class="bubble" src="<?php echo get_template_directory_uri(); ?>/texture/new_bubbles/single_bubble.png" alt="TEST">
				<img id="b9" class="bubble" src="<?php echo get_template_directory_uri(); ?>/texture/new_bubbles/single_bubble.png" alt="TEST">
			</div>
			<div class="col-mid-1 textresizers" id="bubblesleftmarker">
				<a href="#" style="font-size: 8pt;" onclick="resizeText(8);"> T </a>
				<a href="#" style="font-size: 9pt;" onclick="resizeText(9);"> T </a>
				<a href="#" style="font-size: 10pt;" onclick="resizeText(10);"> T </a>
				<a href="#" style="font-size: 11pt;" onclick="resizeText(11);"> T </a>
				<a href="#" style="font-size: 12pt;" onclick="resizeText(12);"> T </a>
			</div>
		</div>
		<div class="row" id="menurow">
			<div class="col-md-11 col-md-offset-1">
				<ul class="nav nav-pills" id="navbar">
					<li><a href="#">TODO</a></li>
					<li><a href="#">Do the</a></li>
					<li><a href="#">Proper</a></li>
					<li><a href="#">PHP</a></li>
					<li><a href="#">Things</a></li>
					<li>
						<form role="form" class="form-inline" id="searchform">
							<div class="form-group">
								<input placeholder="Search" class="form-control" type="search">
								<button class="btn btn-primary">Go</button>
							</div>
						</form>
					</li>
					<li>
						<button id="bubblebutton" type="button" class="btn btn-success btn-lg" onclick="setInterval(bubblefunc, 900);">Set the Bubbles Free!!</button>
						<p id="clickbubbletext">Try clicking on a bubble...</p>
					</li>
				</ul>
			</div>
		</div>