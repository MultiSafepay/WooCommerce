(function( $ ) {
	'use strict';

	$(function() {
		check_if_apple_pay_available();
		$(document).ajaxComplete(function(e, xhr, settings) {
			if (settings.url == '/?wc-ajax=update_order_review') {
				check_if_apple_pay_available();
			}
		});

	});

	function check_if_apple_pay_available() {
		if (!window.ApplePaySession || !ApplePaySession.canMakePayments()) {
			$('.payment_method_multisafepay_applepay').remove();
		}
	}

})( jQuery );
