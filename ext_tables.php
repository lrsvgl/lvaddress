<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'TYPO3.' . $extKey,
            'Addresslist',
            'Addresslist'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'Adressen');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_lvaddress_domain_model_address', 'EXT:lvaddress/Resources/Private/Language/locallang_csh_tx_lvaddress_domain_model_address.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_lvaddress_domain_model_address');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_lvaddress_domain_model_map', 'EXT:lvaddress/Resources/Private/Language/locallang_csh_tx_lvaddress_domain_model_map.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_lvaddress_domain_model_map');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_lvaddress_domain_model_group', 'EXT:lvaddress/Resources/Private/Language/locallang_csh_tx_lvaddress_domain_model_group.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_lvaddress_domain_model_group');

    },
    $_EXTKEY
);
$pluginSignature = str_replace('_', '', $_EXTKEY) . '_addresslist';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_address.xml');