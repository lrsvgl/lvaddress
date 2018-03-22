<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address',
	    'label' => 'lastname',
	    'label_alt' => 'firstname',
	    'label_alt_force' => 1,
	    //'sortby' => 'sorting',
	    //'default_sortby' => ',lastname,firstname',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
		'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
		'searchFields' => 'lastname,firstname,image,title,function,phone,fax,mobile,email,www,company,street,zip,city,state,description,country,internalpage,groups',
        'iconfile' => 'EXT:lvaddress/Resources/Public/Icons/tx_lvaddress_domain_model_address.gif'
    ],
    'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, lastname, firstname, image, title, function, phone, fax, mobile, email, www, company, street, zip, city, state, description, country, internalpage, groups',
    ],
    'types' => [
		'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, lastname, firstname, image, title, function, phone, fax, mobile, email, www, company, street, zip, city, state, description, country, internalpage, groups, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
		'sys_language_uid' => [
			'exclude' => true,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'special' => 'languages',
				'items' => [
					[
						'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
						-1,
						'flags-multiple'
					]
				],
				'default' => 0,
			],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_lvaddress_domain_model_address',
                'foreign_table_where' => 'AND tx_lvaddress_domain_model_address.pid=###CURRENT_PID### AND tx_lvaddress_domain_model_address.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
		't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
		'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
		'starttime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ]
        ],
        'endtime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ]
            ],
        ],
        'lastname' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.lastname',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'firstname' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.firstname',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'image' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.image',
	        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
			    'image',
			    [
			        'appearance' => [
			            'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
			        ],
			        'foreign_types' => [
			            '0' => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ]
			        ],
			        'maxitems' => 1
			    ],
			    $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
	    ],
	    'title' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.title',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'function' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.function',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'phone' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.phone',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'fax' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.fax',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'mobile' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.mobile',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'email' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.email',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'www' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.www',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'company' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.company',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'street' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.street',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'zip' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.zip',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'city' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.city',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'state' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.state',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'description' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.description',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 15,
			    'eval' => 'trim',
			],
	        'defaultExtras' => 'richtext:rte_transform[mode=ts_css]'
	    ],
	    'country' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.country',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'items' => [
			        ['-- Label --', 0],
			    ],
			    'size' => 1,
			    'maxitems' => 1,
			    'eval' => ''
			],
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
	    'groups' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_address.groups',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectMultipleSideBySide',
			    'foreign_table' => 'tx_lvaddress_domain_model_group',
			    'MM' => 'tx_lvaddress_address_group_mm',
			    'size' => 10,
			    'autoSizeMax' => 30,
			    'maxitems' => 9999,
			    'multiple' => 0,
			    'wizards' => [
			        '_PADDING' => 1,
			        '_VERTICAL' => 1,
			        'edit' => [
			            'module' => [
			                'name' => 'wizard_edit',
			            ],
			            'type' => 'popup',
			            'title' => 'Edit', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.edit
			            'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_edit.gif',
			            'popup_onlyOpenIfSelected' => 1,
			            'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
			        ],
			        'add' => [
			            'module' => [
			                'name' => 'wizard_add',
			            ],
			            'type' => 'script',
			            'title' => 'Create new', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.add
			            'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_add.gif',
			            'params' => [
			                'table' => 'tx_lvaddress_domain_model_group',
			                'pid' => '###CURRENT_PID###',
			                'setValue' => 'prepend'
			            ],
			        ],
			    ],
			],
	    ],
    ],
];
