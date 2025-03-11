=== Visma Pay for Woocommerce ===
Contributors: hsuvant
Donate link:
Tags: payment gateway, visma, pay, verkkomaksut, pankit, vismapay
Requires at least: 3.3
Tested up to: 6.7.2
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
WC requires at least: 3.0.0
WC tested up to: 9.7.1

Visma Pay plugin for Woocommerce.

== Description ==

Visma Pay plugin allows you to accept e-payments through most Finnish banks, credit cards, credit invoices and wallets. This plugin uses the Visma Pay Payment API.

This is a plugin for integrating Visma Pay payment gateway with your Woocommerce store. To accept payments with this plugin, you need to have an active contract with [Visma Pay](https://www.visma.fi/vismapay/). You can order Visma Pay [here](https://www.visma.fi/vismapay/tilaa-visma-pay/) (see [terms](https://static.vismapay.com/terms/yleiset-ehdot.pdf)).


= Supported payment methods =
Nordea, Osuuspankki, Danskebank, Aktia, Säästöpankki, Paikallisosuuspankki, Handelsbanken, S-Pankki, Ålandsbanken, Oma Säästöpankki, Visa, Mastercard, Jousto, MobilePay, Alisa Lasku, Alisa Yrityslasku, OP Lasku, Pivo and Siirto.

== Installation ==

1. Activate the plugin through the ‘Plugins’ menu in WordPress.
2. From the Woocommerce settings menu open ‘Payment gateways’ tab, and select ‘Visma Pay’.
3. Fill in private key and API key. These can be found from the Visma Pay merchant portal.
4. Save settings and make a test order and payment to confirm everything works.

== Frequently asked questions ==
-


== Screenshots ==
-


== Changelog ==

= 1.1.6 =
* Updated 'tested up to' versions.
* Removed Alisa Yrityslasku

= 1.1.5 =
* Fixed an issue with incorrect shipping tax rate being sent to Visma Pay API.

= 1.1.4 =
* Changed Visma Pay API version to w3.2 which supports decimals in tax percent
* Updated 'tested up to' versions.

= 1.1.3 =
* Increased specificity of plugin styles
* Updated 'tested up to' versions.

= 1.1.2 =
* Fixed issues caused when Woocommerce Blocks was enabled

= 1.1.1 =
* Added files that were missing from 1.1.0

= 1.1.0 =
* Support for Woocommerce Blocks
* Updated 'tested up to' versions.

= 1.0.9 =
* Support for HPOS
* Updated order of payment methods
* Updated 'tested up to' versions.

= 1.0.8 =
* Rebranded Fellow Lasku to Alisa Lasku and Fellow Yrityslasku to Alisa Yrityslasku.
* Updated 'tested up to' versions.

= 1.0.7 =
* Fixed an error caused by successful payment returning twice.

= 1.0.6 =
* Updated 'tested up to' versions.
* Updated payment method logos.

= 1.0.5 =
* Fixed issue where Fellow Yrityslasku maximum and minimum amounts were not checked.

= 1.0.4 =
* Enterpay-yrityslasku rebranded to Fellow Yrityslasku.
* Fixed issue with multibyte characters in order number prefix.


== Upgrade notice ==
-