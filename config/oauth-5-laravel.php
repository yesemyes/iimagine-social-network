<?php

return [

	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => '\\OAuth\\Common\\Storage\\Session',

	/**
	 * Consumers
	 */
	'consumers' => [

		'Facebook' => [
			'client_id'     => '136738110284510',
			'client_secret' => '333cc418895ad004074aeaac05ad5f5c',
			'scope'         => ['email','publish_actions'],
		],
		'Google' => [
			'client_id'     => '24418481962-52f7vpeofhhpdlgl16rmefuhudionjj2.apps.googleusercontent.com',
			'client_secret' => 'tfSbrFKlJ1pvaAAohNrfm4La',
			'scope'         => ['userinfo_email', 'userinfo_profile',
									'https://www.googleapis.com/auth/plus.me',
									'https://www.googleapis.com/auth/plus.circles.read',
									'https://www.googleapis.com/auth/plus.circles.write',
									'https://www.googleapis.com/auth/plus.stream.read',
									'https://www.googleapis.com/auth/plus.stream.write',
									'https://www.googleapis.com/auth/plus.media.upload'],
		],
		'Twitter' => [
			'client_id'     => 'jc07IXLaF7F8rs7yQFYQ9SYHD',
			'client_secret' => 'WvZCLGkYZnTEMkeTDDgCwnmP3gb4opVZBmQaTBwroQr0numo7f',
			// No scope - oauth1 doesn't need scope
		],
		'Linkedin' => [
		    'client_id'     => '77bxo3m22s83c2', //  Ks0UKEgWWRW5xPRS
		    'client_secret' => 'POVE4Giqvd4DlTnU',
			 'scope'         => ['r_basicprofile', 'r_emailaddress', 'rw_company_admin', 'w_share'],
		],
		'Instagram' => [
			'client_id'     => '7502c314346d4f2fac1d02cbe9074c71',
			'client_secret' => '3cc450155dec46c3941f1ab00645693a',
			'scope'         => ['basic', 'comments', 'relationships', 'likes'],
		],
		'Reddit' => [
			'client_id'     => 'h71qR5FrTBrveA', // GkVN6o9276WXqQ
			'client_secret' => 'YNmgPSguJ_vw5IOZQfxAKHQnrLc', // VSxB-u2Fknmng72nUMqI0MY5koI
			'scope'         => ['identity', 'submit','mysubreddits'],
		],
		'Pinterest' => [
			'client_id'     => '4931223704112740825', // 4931223704112740825
			'client_secret' => '5f7c5a66892fb722848e620369462d72704ca5ac45ede426e7a6d061ceb53c69', // 5f7c5a66892fb722848e620369462d72704ca5ac45ede426e7a6d061ceb53c69
			'scope'			=>	['read_public','write_public'],
		],

	]

];