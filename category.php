<?php
if (is_page('gateway')) {
	get_header('home');
}else{
	get_header();
	?>
	<div class="row">
		<div id="pagecontent" class="col-md-10 col-md-offset-1">
			<?php if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); ?>
					<p style="margin-top: 1%;" class="text-justified">
						<h1 class="text-center"><?php the_title(); ?> <small><?php the_time('F jS, Y'); ?></small></h1>
						<?php
						the_excerpt();
						?>
					</p>
					<?php }
				} ?>
				<div id="google_translate_element"></div><script type="text/javascript">
				function googleTranslateElementInit() {
					new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
				}
			</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		</div>
	</div>
</div>
<?php
}
if (is_page('gateway')) {
	get_footer('home');
}else{
	get_footer();
}
?>