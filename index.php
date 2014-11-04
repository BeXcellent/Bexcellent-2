<?php 
if (is_page('gateway')) {
	get_header('gateway');
} else {
	get_header();
	?>
<div class="row">
    <div id="pagecontent" class="col-md-10 col-md-offset-1">
			<?php if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); ?>
<<<<<<< HEAD
                                            
        <div id="wrapper">
            <h1 class="text-center"><?php the_title(); ?></h1>
            <h6 id="thedate" class="text-center"><?php if (!is_page()){echo the_time('F jS, Y');} ?></h6>
                <?php the_content();  ?>                      
                <p>
                    <?php comments_template(); ?>
                </p>
        </div>
        <div id="google_translate_element"></div><script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
            }
        </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </div>
</div>
=======
                                                <div id="wrapper">
                                                        <h1 class="text-center"><?php the_title(); ?></h1>
                                                        <h6 id="thedate" class="text-center"><?php if (!is_page()) { echo the_time('F jS, Y'); } ?></h6>
                                                        
                                                        <?php echo the_content();  ?>
                                                        
                                                        <p style="<?php if(stripos(comments_template(), "comments are closed") !== false) { echo "display:none"; } ?>">
                                                        <?php comments_template(); } } ?>
                                                        </p>
                                                </div>
				<div id="google_translate_element"></div><script type="text/javascript">
				function googleTranslateElementInit() {
					new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
				}
			</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		</div>
	</div>
>>>>>>> parent of 21b5da4... starting work on comments
	<?php
        }               
}
if (is_page('gateway')) {
	get_footer('gateway');
}else{
	get_footer();
}
