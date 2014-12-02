<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jqueryandui.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/fastclick.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bex-normal.js"></script>
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
<style type="text/css">
body 
{
	background-image: url('<?php echo get_template_directory_uri(); ?>/texture/backgrounds/bg1.png');
	background-repeat: no-repeat;
	background-attachment: fixed;
}
</style>
<?php echo wp_footer(); ?>
</body>
</html>
