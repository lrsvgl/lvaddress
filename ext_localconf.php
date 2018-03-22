<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'TYPO3.Lvaddress',
            'Addresslist',
            [
                'Address' => 'list, show, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Address' => 'create, update, delete'
            ]
        );

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					addresslist {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_addresslist.svg
						title = LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_addresslist
						description = LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_addresslist.description
						tt_content_defValues {
							CType = list
							list_type = lvaddress_addresslist
						}
					}
				}
				show = *
			}
	   }'
	);
    },
    $_EXTKEY
);
