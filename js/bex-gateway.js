window.floating = [];
window.currentStage = [];
jQuery.fn.makeFloat = function() {
	console.log('New');
	var object = $(this);
	$(this).attr('originleft', $(this).css('left'));
	$(this).attr('origintop', $(this).css('top'));
	window.floating[window.floating.length] = object;
	$(this).attr('currentstage', Math.floor(Math.random() * 3));
};
jQuery.fn.nextStage = function(object) {
	var currentStage = parseInt($(object).attr('currentstage'));
	if (currentStage === 0) {
		$(object).animate({
			'left': parseInt($(object).attr('originleft')) + 'px',
			'top': parseInt($(object).attr('origintop')) + 10 + 'px'
		}, 1000);
	}
	if (currentStage === 1) {
		$(object).animate({
			'left': parseInt($(object).attr('originleft')) - 10 + 'px',
			'top': parseInt($(object).attr('origintop')) + 'px'
		}, 1000);
	} 
	if (currentStage === 2) {
		$(object).animate({
			'left': parseInt($(object).attr('originleft')) + 'px',
			'top': parseInt($(object).attr('origintop')) - 10 + 'px'
		}, 1000);
	} 
	if (currentStage === 3) {
		$(object).animate({
			'left': parseInt($(object).attr('originleft')) + 10 + 'px',
			'top': parseInt($(object).attr('origintop')) + 'px'
		}, 1000);
		$(object).attr('currentstage', 0);
	} else{
		$(object).attr('currentstage', currentStage + 1);
	}
};
jQuery(document).ready(function($) {
	$('#l1').makeFloat();
	$('#l2').makeFloat();
	$('#l3').makeFloat();
	$('#l4').makeFloat();
	$('#l5').makeFloat();
	$('#l6').makeFloat();
	$('#l7').makeFloat();
	$('#l8').makeFloat();
	$('#l9').makeFloat();
	$('#l10').makeFloat();
	$('#l1-small').makeFloat();
	$('#l2-small').makeFloat();
	$('#l3-small').makeFloat();
	$('#l4-small').makeFloat();
	$('#l5-small').makeFloat();
	$('#l6-small').makeFloat();
	$('#l7-small').makeFloat();
	$('#l8-small').makeFloat();
	$('#l9-small').makeFloat();
	$('#l10-small').makeFloat();
	setInterval(function () {
		for (var i = 0; i < window.floating.length; i++) {
			$().nextStage(window.floating[i]);
		}
	}, 100);
});