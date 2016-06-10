<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'TYPO3.' . $extKey,
            'Addresslist',
            [
                'Address' => 'list, show, create, edit, update, delete',
                
            ],
            // non-cacheable actions
            [
                'Address' => 'create, update, delete',
                
            ]
        );

    },
    $_EXTKEY
);
