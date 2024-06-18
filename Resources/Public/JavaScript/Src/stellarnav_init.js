
jQuery(document).ready(function($) {
	jQuery('.stellarnav').stellarNav({
		menuLabel: 'Menü', // label for the mobile nav
		closeLabel: 'schliessen',
		position: 'right', // 'static', 'top', 'left', 'right' - when set to 'top', this forces the mobile nav to be placed absolutely on the very top of page
		breakpoint: 1024
	});
});