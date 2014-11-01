<!DOCTYPE html>
<html>
<head>
	<title><?php echo wp_title(); ?></title>
	<meta charset="windows-1252">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<meta name="google-translate-customization" content="a9ae1f2b766f7d2b-81ef0989257c4ff9-g6bca4490168a957a-11"></meta>
	<meta name="description" content="Education, Educational, A different website, Interesting, Cool, Fun, Bexcellent is exellent, Resource, Engaging, Awesome." />
	<?php echo wp_head(); ?>
</head>
<body onload="setInterval(changeBackground, 25000); ">
	<audio id="pop" src="<?php echo get_template_directory_uri(); ?>/pop.mp3"></audio>
	<div class="container-fluid">
		<div class="row">
                    
                    <div style="float: right; margin-top:5px"><button id="bubblebutton" type="button" class="btn btn-success btn-lg" onclick="setInterval(bubblefunc, 900);">Set the Bubbles Free!!</button>
                    <p id="clickbubbletext">Try clicking on a bubble...</p></div>
                        
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
		<div class="row" id="menurow">
			<div class="col-md-11 col-md-offset-1">
				<?php
				wp_nav_menu( array(
					'menu'              => 'primary',
					'theme_location'    => 'primary',
					'depth'             => 2,
					'container'         => 'false',
					'menu_class'        => 'nav nav-pills',
					'menu_id'			=> 'navbar',
					'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					'walker'            => new wp_bootstrap_navwalker())
				);
				?>
			</div>
		</div>
