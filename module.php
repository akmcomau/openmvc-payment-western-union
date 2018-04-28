<?php
$_MODULE = [
	'name' => 'Payment - Western Union',
	'description' => 'Support for Western Union within the checkout',
	'namespace' => '\\modules\\payment_western_union',
	'config_controller' => 'administrator\\PaymentWesternUnion',
	'controllers' => [
		'administrator\\PaymentWesternUnion',
		'PaymentWesternUnion'
	],
	'default_config' => [
		'currency' => 'AUD',
		'bank' => '',
		'swift' => '',
		'bsb' => '',
		'account_number' => '',
	]
];
