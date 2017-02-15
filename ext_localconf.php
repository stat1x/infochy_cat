<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Infochy.' . $_EXTKEY,
	'Plugin',
	array(
		'Cat' => 'list, show, new, create, edit, update, delete',
		
	),
	// non-cacheable actions
	array(
		'Cat' => 'create, update, delete',
		
	)
);
