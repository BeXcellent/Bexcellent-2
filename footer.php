<?php echo wp_footer(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/fastclick.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bex-normal.js"></script>
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-snowfall.min.js"></script> -->
<script type="text/javascript" async="true" src="//bexcellent.disqus.com/embed.js"></script>
<script type="text/javascript">
window.addEventListener('load', function() {
	new FastClick(document.body);
}, false);
var bgcount = 2;
function changeBackground() {
	$('body').css("backgroundImage", "url('<?php echo get_template_directory_uri(); ?>/texture/backgrounds/bg"+bgcount+".png')");
	++bgcount;
	if(bgcount === 12) bgcount = 1;
}
</script>
<div id="preloaded-images">
	<?php for ($i = 1; $i <= 11; $i++): ?>

   <img src="<?php echo get_template_directory_uri(); ?>/texture/backgrounds/bg<?php echo $i; ?>.png" width="1" height="1" alt="" />
	<?php endfor; ?>
</div>
<style type="text/css">
body
{
	background-image: url('<?php echo get_template_directory_uri(); ?>/texture/backgrounds/bg1.png');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
}
</style>
</body>
</html>
