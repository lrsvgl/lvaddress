<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'TYPO3.' . $_EXTKEY,
	'Addresslist',
	array(
		'Address' => 'list, show, create, edit, update, delete',
		
	),
	// non-cacheable actions
	array(
		'Address' => 'create, update, delete',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'TYPO3.' . $_EXTKEY,
	'Addressteaser',
	array(
		'Address' => 'teaser',
		
	),
	// non-cacheable actions
	array(
		'Address' => 'create, update, delete',
		'Map' => 'create, update, delete',
		'Group' => 'create, update, delete',
		
	)
);


if (!is_array($TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['lvaddress_cache'])) {
    $TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['lvaddress_cache'] = array();
}
