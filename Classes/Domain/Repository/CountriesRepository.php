<?php

namespace TYPO3\Lvaddress\Domain\Repository;

/* * *************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */

/**
 * The repository for Countries
 */
class CountriesRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

    public function findCountriesByArea($areas) {

        //\TYPO3\CMS\Core\Utility\DebugUtility::debug($areas);

        $areas = array_map('intval', explode(',', $areas));

        //$areas = array(10,11,12,13);

        $q = $this->createQuery();
        $q->statement("
            SELECT 
                    A.uid,
                    A.cn_short_en,
                    A.cn_iso_2
            FROM
                    static_countries as A,
                    tx_lvaddress_static_mm as B,
                    tx_lvaddress_domain_model_address as C
            WHERE   A.cn_parent_territory_uid IN ? 
            AND     A.uid = B.uid_foreign 
            AND     B.uid_local = C.uid
            AND     C.hidden = '0'
            AND     C.deleted = '0'
            ", array($areas)
        );
        #$GLOBALS['TYPO3_DB']->debugOutput = 2;
        //\TYPO3\CMS\Core\Utility\DebugUtility::debug($areas);
        $orderings = array(
            'A.cn_short_en' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
            'A.uid' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
        );
        $q->setOrderings($orderings);

        return $q->execute();
    }
    
//    public function findCountriesByArea($areas) {
//
//        //\TYPO3\CMS\Core\Utility\DebugUtility::debug($areas);
//
//        $areas = array_map('intval', explode(',', $areas));
//
//        //$areas = array(10,11,12,13);
//
//        $q = $this->createQuery();
//        $q->statement("
//            SELECT * 
//            FROM
//                    static_countries as A,
//                    tx_lvaddress_static_mm as B
//            WHERE   A.cn_parent_territory_uid IN ? 
//            AND     A.uid = B.uid_foreign 
//            ", array($areas)
//        );
//        #$GLOBALS['TYPO3_DB']->debugOutput = 2;
//        //\TYPO3\CMS\Core\Utility\DebugUtility::debug($areas);
//        $orderings = array(
//            'cn_short_en' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
//            'uid' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
//        );
//        $q->setOrderings($orderings);
//
//        return $q->execute();
//    }    

}
