<?php
namespace TYPO3\Lvaddress\Controller;

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
 * AddressController
 */
class AddressController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * addressRepository
	 *
	 * @var \TYPO3\Lvaddress\Domain\Repository\AddressRepository
	 * @inject
	 */
	protected $addressRepository = NULL;

	/**
	 * mapRepository
	 *
	 * @var \TYPO3\Lvaddress\Domain\Repository\MapRepository
	 * @inject
	 */
	protected $mapRepository = NULL;

	/**
	 * countriesRepository
	 *
	 * @var \TYPO3\Lvaddress\Domain\Repository\CountriesRepository
	 * @inject
	 */
	protected $countriesRepository = NULL;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		//		$area = $this->settings['area'];
		$group = $this->settings['group'];
		//		$areas = $this->getAreas($area);
		//		$request = $this->request->getArguments('filter');
		//		$countryUid = $request['country'];
		//		// country select box
		//		$countries = $this->countriesRepository->findCountriesByArea($areas);
		//		// addresses
		//		if ($countryUid) {
		//			//\TYPO3\CMS\Core\Utility\DebugUtility::debug("countryUid",$countryUid);
		//			$addresses = $this->addressRepository->findByCountryUid($countryUid,$group);
		//                        //$addresses = $this->addressRepository->findAll();
		//		} else {
		//			$addresses = $this->addressRepository->findAddressesByArea($countries,$group);
		//		}
		//                //\TYPO3\CMS\Core\Utility\DebugUtility::debug($group);
		//		//\TYPO3\CMS\Core\Utility\DebugUtility::debug($_REQUEST['tx_lvaddress_addresslist']['country']);
		//		$map = $this->mapRepository->findByUid(intval($area));
		//$this->view->assign('countries', $countries);
		//$addresses = $this->addressRepository->findAll();
		$addresses = $this->addressRepository->findAddressesByGroup($group);

		//\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($addresses, 'location');
		//die('test');

		$this->view->assign('addresses', $addresses);
	}
	/**
	 * teaser show
	 *
	 * action teaser
	 * @return void
	 */
	public function teaserAction() {
        $lang = $GLOBALS['TSFE']->config['config']['language'];

        if ($lang == "de") {
            $this->view->assign('reflink', '/de/ueber-carpe-verba/referenzen.html');
        }
        if ($lang == "en") {
            $this->view->assign('reflink', '/en/carpe-verba/references.html');
        }


        $addresses = $this->addressRepository->findByFrontpage(1);
        $this->view->assign('addresses', $addresses);
	}
	/**
	 * action show
	 *
	 * @param \TYPO3\Lvaddress\Domain\Model\Address $address
	 * @return void
	 */
	public function showAction(\TYPO3\Lvaddress\Domain\Model\Address $address) {
		$this->view->assign('address', $address);
	}

	/**
	 * action new
	 *
	 * @param \TYPO3\Lvaddress\Domain\Model\Address $newAddress
	 * @ignorevalidation $newAddress
	 * @return void
	 */
	public function newAction(\TYPO3\Lvaddress\Domain\Model\Address $newAddress = NULL) {
		$this->view->assign('newAddress', $newAddress);
	}

	/**
	 * action create
	 *
	 * @param \TYPO3\Lvaddress\Domain\Model\Address $newAddress
	 * @return void
	 */
	public function createAction(\TYPO3\Lvaddress\Domain\Model\Address $newAddress) {
		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->addressRepository->add($newAddress);
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \TYPO3\Lvaddress\Domain\Model\Address $address
	 * @ignorevalidation $address
	 * @return void
	 */
	public function editAction(\TYPO3\Lvaddress\Domain\Model\Address $address) {
		$this->view->assign('address', $address);
	}

	/**
	 * action update
	 *
	 * @param \TYPO3\Lvaddress\Domain\Model\Address $address
	 * @return void
	 */
	public function updateAction(\TYPO3\Lvaddress\Domain\Model\Address $address) {
		$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->addressRepository->update($address);
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \TYPO3\Lvaddress\Domain\Model\Address $address
	 * @return void
	 */
	public function deleteAction(\TYPO3\Lvaddress\Domain\Model\Address $address) {
		$this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->addressRepository->remove($address);
		$this->redirect('list');
	}

	/**
	 * get areas of continet
	 *
	 * @param $area
	 * @return array
	 */
	public function getAreas($area) {
		switch ($area) {
			case 1:
				$areas = $this->settings['africa'];
				break;
			case 2:
				$areas = $this->settings['asia'];
				break;
			case 3:
				$areas = $this->settings['australia'];
				break;
			case 4:
				$areas = $this->settings['europe'];
				break;
			case 5:
				$areas = $this->settings['northamerica'];
				break;
			case 6:
				$areas = $this->settings['southamerica'];
				break;
			case 7:
				$areas = $this->settings['world'];
				break;
		}
		return $areas;
	}

}