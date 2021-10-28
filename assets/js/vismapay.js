jQuery(document).ready(function($){
	if (jQuery('form#order_review').length>0) {

		jQuery('#visma-pay-bank-payments .bank-button').on('click',function() {
			jQuery('#visma-pay-bank-payments .bank-button').removeClass('selected');
			jQuery(this).addClass('selected');
			var id = jQuery(this).attr('id');
			var selected = id.replace('visma-pay-button-','');
			jQuery('#visma_pay_selected_bank').val(selected);
		});
	}

	jQuery('body').on( 'updated_checkout', function () {
		jQuery('#visma-pay-bank-payments .bank-button').on('click',function() {
			jQuery('#visma-pay-bank-payments .bank-button').removeClass('selected');
			jQuery(this).addClass('selected');
			var id = jQuery(this).attr('id');
			var selected = id.replace('visma-pay-button-','');
			jQuery('#visma_pay_selected_bank').val(selected);
		});
	});
}(jQuery));