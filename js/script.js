jQuery(document).ready(function() {

	jQuery(".menu-trigger").click(function() {
	
		jQuery(".nav-menu").slideToggle();
			jQuery(this).toggleClass("nav-expanded").css('display', '');
		});

	});
	
});