<?php 
    /*
     * To edit the background image, place it's path on the server here.
     */
    $bubble_path = get_template_directory_uri()."/texture/new_bubbles/single_bubble.png";
    
    $bubble_menu_items = array(
        "Videos" => "/gallery/videos", 
        "Articles" => "/articles", 
        "About" => "/about", 
        "Photos" => "/gallery/photos", 
        "Games" => "/games", 
        "News" => "/news", 
        "Apply" => "/applying", 
        "5-8" => "/5-8", 
        "8-12" => "/8-12", 
        "12-18" => "/12-18"
        );
    
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<meta name="google-translate-customization" content="a9ae1f2b766f7d2b-81ef0989257c4ff9-g6bca4490168a957a-11"></meta>
	<meta name="description" content="Education, Educational, A different website, Interesting, Cool, Fun, Bexcellent is exellent, Resource, Engaging, Awesome." />
	<?php echo wp_head(); ?>
	<title>BeXcellent | Gateway</title>
	<meta charset="windows-1252">
	<meta name="viewport" content="width=device-width">
	<style type="text/css">
	body
	{
		width: 100vw;
		height: 100vh;
	}
	</style>
</head>
<body>
	
	<div>
            <?php 
                $id_no = 1;
                foreach($bubble_menu_items as $item => $url) { ?>
                    
                    <div id="l<?php echo $id_no?>" class="linkbubble">
			<a target="_parent" href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URL'].$url; ?>">
                            <img class="linkbubble" src="<?php echo $bubble_path; ?>" alt="Videos">
                            <p class="bubbletext" style="left: 1.0em;top: 1.8em;"><?php echo $item; ?></p>
                        </a>
                    </div> 
            <?php
                    $id_no += 1;
                            }
            ?>
		
		<img src="<?php echo get_template_directory_uri(); ?>/texture/new_bubbles/becellent.jpg" alt="BeXcellent" class="" style="position:absolute; top: 120px; left: 2px;"/>
                
                <h3 id="gatewayblurb">The website made by young people for young people for all things</br><b>Curriculum for Excellence</b> 
                    </br></br>
                    <!-- <a href="http://www.sqa.org.uk/" target="_blank"><img src="//www1.sqa.org.uk/images/sqa-print-logo.gif"></a></br> -->
                    <a href="http://www.childreninscotland.org.uk/" target="_blank"> <img src="http://www.childreninscotland.org.uk/sites/all/themes/cis/logo.png"></a>
                </h3>
	</div>