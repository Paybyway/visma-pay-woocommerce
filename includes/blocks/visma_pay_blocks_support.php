<?php

use Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType;

final class WC_Gateway_Visma_Pay_Blocks_Support extends AbstractPaymentMethodType
{
	private $gateway;
	protected $name = 'vismapay';

	public function initialize()
	{
		$this->settings = get_option('woocommerce_visma_pay_settings', []);
		$payment_gateways_class = WC()->payment_gateways();
		$payment_gateways = $payment_gateways_class->payment_gateways();
		$this->gateway = $payment_gateways['visma_pay'];
	}

	public function is_active()
	{
		return $this->gateway->is_available();
	}

	/**
	 * Registers and returns built scripts/handles
	 */
	public function get_payment_method_script_handles()
	{
		$script_path = '/build/blocks.js';
		$script_asset_path = WC_Gateway_Visma_Pay::plugin_abspath() . 'build/blocks.asset.php';
		$script_asset  = file_exists( $script_asset_path )
			? require( $script_asset_path )
			: array(
				'dependencies' => array(),
				'version' => '1.0.0'
			);
		$script_url = WC_Gateway_Visma_Pay::plugin_url() . $script_path;

		wp_register_script(
			'wc-vismapay-blocks-integration',
			$script_url,
			$script_asset['dependencies'],
			$script_asset['version'],
			true
		);

		if (function_exists('wp_set_script_translations')) {
			wp_set_script_translations('wc-vismapay-blocks-integration', 'visma-pay-payment-gateway', WC_Gateway_Visma_Pay::plugin_abspath() . 'languages/' );
		}

		return ['wc-vismapay-blocks-integration'];
	}

	/**
	 * Returned data is available to the payment method scripts via getSetting('vismapay_data')
	 */
	public function get_payment_method_data()
	{
		$payment_methods = [];
		$embed = $this->gateway->is_embed();
		
		// blocks will also be rendered in the editor
		if (is_checkout())
		{
			wc_print_notices();

			if ($embed)
			{
				$payment_methods = $this->gateway->visma_pay_get_merchant_payment_methods();
			}
		}

		return [
			'title' => $this->get_setting('title'),
			'description' => $this->get_setting('visma_pay_description'),
			'paymentDescription' => $this->get_setting('visma_pay_payment_description'),
			'supports' => array_filter($this->gateway->supports, [$this->gateway, 'supports']),
			'paymentMethods' => $payment_methods,
			'currency' => get_woocommerce_currency(),
			'embed' => $embed
		];
	}
}