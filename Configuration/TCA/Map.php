<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_lvaddress_domain_model_map'] = array(
	'ctrl' => $TCA['tx_lvaddress_domain_model_map']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, area, map, html',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, area, map, html, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
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
				'foreign_table' => 'tx_lvaddress_domain_model_map',
				'foreign_table_where' => 'AND tx_lvaddress_domain_model_map.pid=###CURRENT_PID### AND tx_lvaddress_domain_model_map.sys_language_uid IN (-1,0)',
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

		'area' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_map.area',
			'config' => array(
				'type' => 'select',
				'items' => array(
                                        array('Afrika', 1),
					array('Asien', 2),
                                        array('Australien', 3),
                                        array('Europa', 4),
                                        array('Nordamerika', 5),
                                        array('Südamerika', 6),
                                        array('Welt', 7),
				),
				'size' => 1,
				'maxitems' => 1,
                                'minitems' => 1,
				'eval' => ''
			),
		),
		'map' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_map.map',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'map',
				array('maxitems' => 1),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'html' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lvaddress/Resources/Private/Language/locallang_db.xlf:tx_lvaddress_domain_model_map.html',
			'config' => array(
				'type' => 'text',
				'cols' => 300,
				'rows' =>100,
				'eval' => 'trim'
			)
		),
		
	),
);

?>
