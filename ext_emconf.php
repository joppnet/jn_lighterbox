<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "jn_lighterbox".
 *
 * Auto generated 09-06-2023 16:38
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF['jn_lighterbox'] = [
	'title' => '[joppnet] Lightbox',
	'description' => 'A very lightweight Lightbox extension for click-enlarging content element images using lightbox2 or any other library of your choice.',
	'category' => 'plugin',
	'version' => '1.3.6',
	'state' => 'stable',
	'uploadfolder' => false,
	'clearcacheonload' => true,
	'author' => 'Stefan Riedel',
	'author_email' => 'stefan.riedel@joppnet.de',
	'author_company' => 'joppnet',
	'constraints' =>
	[
		'depends' =>
		[
			'typo3' => '9.5.0-13.4.99',
		],
		'conflicts' => [],
		'suggests' => [],
	],
];
