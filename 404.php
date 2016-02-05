<?php
if (is_page('gateway')) {
	get_header('gateway');
} else {
	get_header();
	?>
<div class="row">
    <div id="pagecontent" class="col-md-10 col-md-offset-1" style="text-align: center;">
        <h2>Sorry, the page you are looking for was not found :( fasdfghasdnfjasdjf</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/texture/404.jpg">
    </div>
</div>

	<?php
}
if (is_page('gateway')) {
	get_footer('gateway');
}else{
	get_footer();
}
?>
