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
t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_address.xml');

array(
                'label_alt' => 'lastname, firstname',
                'label_alt_force' => 1,   
                'default_sortby' => 'company,lastname,firstname',




/* ========================
  /TCA/Address.php
  ======================== */
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, frontpage, company, country, groups, firstname, lastname, image, title, function, street, zip, city, state, phone, fax, mobile, email, www, description;;;richtext:rte_transform[mode=ts_links], --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
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
                                'minitems' => 1,
                                'maxitems' => 99
			),
		),
               
                        
                        
/* ========================
  /TCA/Map.php
  ======================== */
                        
                        
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
);


?>
 /* ========================
  /Controller/Domain/Model/Address.php
  ======================== */

                        
/* ========================
  ext_tables.sql
  ======================== */                    
#
# Table structure for table 'tx_lvaddress_static_mm'
#
CREATE TABLE tx_lvaddress_static_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);


/* ========================
  setup.txt
  ======================== */                    
#     
            
            
page.includeJSFooter.tx_lvaddress_file_1 = EXT:lv_address/Resources/Public/Scripts/functions.js
            
plugin.tx_lvaddress {
	view {
		templateRootPath = {$plugin.tx_lvaddress.view.templateRootPath}
		partialRootPath = {$plugin.tx_lvaddress.view.partialRootPath}
		layoutRootPath = {$plugin.tx_lvaddress.view.layoutRootPath}
	}
	persistence {
		storagePid = {$plugin.tx_lvaddress.persistence.storagePid}


                classes {
                        TYPO3\Lvaddress\Domain\Model\Countries {
                               mapping {
                                      tableName = static_countries
                                      columns {
                                            uid.mapOnProperty = uid
                                            pid.mapOnProperty = pid
                                            cn_iso_2.mapOnProperty = iso2
                                            cn_short_en.mapOnProperty = cnShortEn
                                            cn_parent_territory_uid.mapOnProperty = cnParentTerritoryUid
                                      }
                              }
                         }
                  }
	}
        settings {
                africa = 20,21,22,23,24
                asia = 6,7,8,9,26,27,28,30
                australia = 25
                europe = 10,11,12,13,22
                northamerica = 18
                southamerica =  16,17,19
                world = 20,21,22,23,24,6,7,8,9,26,27,28,30,25,10,11,12,13,18,16,17,19
        }
	features {
                skipDefaultArguments = 1
		# uncomment the following line to enable the new Property Mapper.
		# rewrittenPropertyMapper = 1
	}
}

plugin.tx_lvaddress._CSS_DEFAULT_STYLE (
	textarea.f3-form-error {
		background-color:#FF9F9F;
		border: 1px #FF0000 solid;
	}

	input.f3-form-error {
		background-color:#FF9F9F;
		border: 1px #FF0000 solid;
	}

	.tx-lv-address table {
		border-collapse:separate;
		border-spacing:10px;
	}

	.tx-lv-address table th {
		font-weight:bold;
	}

	.tx-lv-address table td {
		vertical-align:top;
	}

	.typo3-messages .message-error {
		color:red;
	}

	.typo3-messages .message-ok {
		color:green;
	}

)
   

