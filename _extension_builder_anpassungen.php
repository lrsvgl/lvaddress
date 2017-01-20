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
        'sortby' => 'sorting',
        //'default_sortby' => ',lastname,firstname',

    ]



);


/* ========================
  ext_tables.sql
  ======================== */
// sorting int(11) unsigned DEFAULT '0' NOT NULL,

?>
