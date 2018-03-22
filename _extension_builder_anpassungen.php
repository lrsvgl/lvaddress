<?php

/* ========================
  ext_localconf.php
  ======================== */

if (!is_array($TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['lvaddress_cache'])) {
    $TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['lvaddress_cache'] = array();
}


/* ========================
  ext_tables.php
  ======================== */

$pluginSignature = str_replace('_', '', $_EXTKEY) . '_addresslist';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_address.xml');


/* ========================
  TCA
  ======================== */

    // address

array(
    'ctrl' => [
        'label' => 'lastname',
        'label_alt' => 'firstname',
        'label_alt_force' => 1,
        //'sortby' => 'sorting',
        //'default_sortby' => ',lastname,firstname',

    ],



	    'internalpage' => [
		    'exclude' => 1,
		    'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.internalpage',
		    'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim',
			    'wizards' => [
				    '_PADDING' => 2,
				    'link' => [
					    'type' => 'popup',
					    'title' => 'LLL:EXT:cms/locallang_ttc.xml:header_link_formlabel',
					    'icon' => 'link_popup.gif',
					    'module' => [
						    'name' => 'wizard_element_browser',
						    'urlParameters' => [
							    'mode' => 'wizard',
							    'act' => 'page'
						    ]
					    ],
					    'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
				    ],
			    ],
			    'softref' => 'typolink',
		    ],
	    ],
);


/* ========================
  ext_tables.sql
  ======================== */
// sorting int(11) unsigned DEFAULT '0' NOT NULL,

?>
