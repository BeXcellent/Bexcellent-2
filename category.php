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
					<?php the_content(); ?>
				</p>
			<?php }
		} ?>
		</div>
	</div>
</div>
<?php
}
if ( is_front_page() ) {
    get_footer('home');
}else{
	get_footer();
}
?>