<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_lvaddress_domain_model_address'] = array(
	'ctrl' => $TCA['tx_lvaddress_domain_model_address']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, frontpage, lastname, firstname, image, title, function, phone, fax, mobile, email, www, company, street, zip, city, state, description, groups, country',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, frontpage, lastname, firstname, image, title, function, phone, fax, mobile, email, www, company, street, zip, city, state, description;;;richtext:rte_transform[mode=ts_links], groups, country,  --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_lvaddress_domain_model_address',
				'foreign_table_where' => 'AND tx_lvaddress_domain_model_address.pid=###CURRENT_PID### AND tx_lvaddress_domain_model_address.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
/*
               'frontpage' => array(
                    'exclude' => 0,
                    'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.frontpage',
                    'config' => array(
                        'type' => 'check',
                        'items' => array(
                            array('Startseite', 1)
                        ),
                        'size' => 1,
                        'maxitems' => 1,
                        'eval' => 'required'
                    ),
                ),
*/
		'lastname' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.lastname',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'firstname' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.firstname',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'image' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.image',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'image',
				array('maxitems' => 1),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'title' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'function' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.function',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'phone' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.phone',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
        /*
		'fax' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.fax',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'mobile' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.mobile',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
        */
		'email' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.email',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
        /*
		'www' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.www',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'company' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.company',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'street' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.street',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'zip' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.zip',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'city' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.city',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'state' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.state',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'description' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
		),
		'country' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.country',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
                                'MM' => 'tx_lvaddress_static_mm',
                                'foreign_table' => 'static_countries',
                                'foreign_table_where' => 'ORDER BY static_countries.cn_short_en',
                                'itemsProcFunc' => 'SJBR\\StaticInfoTables\\Hook\\Backend\\Form\\ElementRenderingHelper->translateCountriesSelector',
                                'size' => 10,
                                'minitems' => 0,
                                'maxitems' => 99
			),
		),
        */
		'groups' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.groups',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_lvaddress_domain_model_group',
				'MM' => 'tx_lvaddress_address_group_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
                                'minitems' => 1,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_lvaddress_domain_model_group',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),

	),
);

?>
