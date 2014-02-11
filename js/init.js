// JavaScript Document
/*
jQuery(document).ready(function(e) {
    //alert(jQuery('#greenbar').parents('.widget').html());
	//jQuery('#greenbar').parent().parent().css('background-color','red');
	jQuery('#greenbar').parents('.widget').addClass('desktop-only');
});
*/
jQuery(document).ready(function($) {
    // Code here will be executed on document ready. Use $ as normal.
	//$('#greenbar').parents('.widget').addClass('desktop-only');
	
	/**
	 * Enables menu toggle for small screens.
	 */
	( function() {
		var nav = $( '#site-navigation' ), button, menu;
		if ( ! nav )
			return;

		button = nav.find( '.menu-toggle' );
		if ( ! button )
			return;

		// Hide button if menu is missing or empty.
		menu = nav.find( '.nav-menu' );
		if ( ! menu || ! menu.children().length ) {
			button.hide();
			return;
		}

		$( '.menu-toggle' ).on( 'click.twentythirteen', function() {
			nav.toggleClass( 'toggled-on' );
		} );
		
	} )();
	
	
    /**
	 * Enables 2nd menu toggle for small screens.
	 */
	( function() {
		var nav = $( '#site-navigation-2nd' ), button, menu;
		if ( ! nav )
			return;

		button = nav.find( '.menu-toggle-2nd' );
		if ( ! button )
			return;

		// Hide button if menu is missing or empty.
		menu = nav.find( '.nav-menu' );
		if ( ! menu || ! menu.children().length ) {
			button.hide();
			return;
		}

		$( '.menu-toggle-2nd' ).on( 'click.twentythirteen', function() {
			nav.toggleClass( 'toggled-on' );
		} );
		
	} )();
	
	
});
