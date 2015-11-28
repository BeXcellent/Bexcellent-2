<!DOCTYPE html>
<html>
<head>
	<title><?php echo wp_title(); ?></title>
	<meta charset="windows-1252">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto" async>
	<meta name="google-translate-customization" content="a9ae1f2b766f7d2b-81ef0989257c4ff9-g6bca4490168a957a-11"></meta>
	<meta name="description" content="Education, Educational, A different website, Interesting, Cool, Fun, Bexcellent is exellent, Resource, Engaging, Awesome." />
	<?php echo wp_head(); ?>
</head>
<body onload="setInterval(changeBackground, 25000); ">
	<audio id="pop" src="<?php echo get_template_directory_uri(); ?>/pop.mp3"></audio>
	<div class="container-fluid">
		<div class="row" style="z-index: -5">
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
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 col-md-offset-8 text-right">
				<button id="bubblebutton" type="button" style="width:100%" class="btn btn-primary btn-lg" onclick="onSetBubblesFreeClicked();">Set the Bubbles Free!!</button>
				<p id="clickbubbletext">Try clicking on a bubble...</p>
				<button id="resetbubblesbutton" type="buton" style="width:100%; display: none" class="btn btn-success btn-lg" onclick="onResetBubblesClicked();">Reset Bubbles</button>
			</div>
		</div>
		<div class="row" id="menurow">
			<div class="col-sm-12">
				<nav class="navbar navbar-white">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								
								<?php
								wp_nav_menu( array(
									'theme_location'    => 'primary',
									'container'			=> false,
									'items_wrap'		=> '%3$s'
									));
									?>
								</ul>
							</div><!-- /.navbar-collapse -->
						</div><!-- /.container-fluid -->
					</nav>
				</div>
			</div>
