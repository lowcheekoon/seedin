<script>	
$(document).ready(function(){
	var fancybox_width = $(window).width()<="479"? "100%" : "75%";
	$(".popup")
		.fancybox({
			'width'				: fancybox_width,
			'height'			: '100%',
			'minHeight'			: '400px',
			'autoScale'     	: false,
			'transitionIn'		: 'none',
			'transitionOut'		: 'none',
			'type'				: 'iframe',
			'scrolling'         : 'auto',
	});
});
</script>