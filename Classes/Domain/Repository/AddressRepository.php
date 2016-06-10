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
 * The repository for Addresses
 */
class AddressRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

	protected $defaultOrderings = array(
		'lastname' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
		'firstname' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
		'company' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
	);

	/**
	 * @param $countryUid
	 * @param $group
	 */
	public function findByCountryUid($countryUid, $group) {
		//\TYPO3\CMS\Core\Utility\DebugUtility::debug('countryUid rep', $countryUid);
		//\TYPO3\CMS\Core\Utility\DebugUtility::debug('group rep', $group);
		$q = $this->createQuery();
		$q->matching(
			$q->logicalAnd(
				$q->contains('country', $countryUid), $q->contains('groups', $group)
			)
		);
		$orderings = array(
			'lastname' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
			'company' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
			'uid' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
		);
		$q->setOrderings($orderings);
		return $q->execute();
	}

	/**
	 * @param $countries
	 * @param $group
	 */
	public function findAddressesByArea($countries, $group) {
		$countries = $countries->toArray();
		$countriesLn = count($countries);
		//\TYPO3\CMS\Core\Utility\DebugUtility::debug('count',$countriesLn);
		$q = $this->createQuery();
		$constraints = array();
		for ($i = 0; $i <= $countriesLn; $i++) {
			$uid = $countries[$i];
			$constraints[$i] = $q->contains('country', $uid);
		}
		//\TYPO3\CMS\Core\Utility\DebugUtility::debug("Area rep group: ", $group);
		$q->matching(
			$q->logicalAnd(
				$q->logicalOr($constraints), $q->contains('groups', $group)
			)
		);
		$orderings = array(
			'lastname' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
			'company' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
			'uid' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
		);
		$q->setOrderings($orderings);
		return $q->execute();
	}

	/**
	 * @param $group
	 */
	public function findAddressesByGroup($group) {
		//\TYPO3\CMS\Core\Utility\DebugUtility::debug('Area rep group: ', $group);
		$q = $this->createQuery();
		$q->matching(
			$q->contains('groups', $group)
		);
		$orderings = array(
            'sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
			//'lastname' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
			//'company' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
			'uid' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
		);
		$q->setOrderings($orderings);
		return $q->execute();
	}

}