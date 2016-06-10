<?php
namespace TYPO3\Lvaddress\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 ***************************************************************/

/**
 * Test case for class TYPO3\Lvaddress\Controller\AddressController.
 *
 */
class AddressControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \TYPO3\Lvaddress\Controller\AddressController
	 */
	protected $subject;

	public function setUp() {
		$this->subject = $this->getMock('TYPO3\\Lvaddress\\Controller\\AddressController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllAddressesFromRepositoryAndAssignsThemToView() {

		$allAddresses = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$addressRepository = $this->getMock('TYPO3\\Lvaddress\\Domain\\Repository\\AddressRepository', array('findAll'), array(), '', FALSE);
		$addressRepository->expects($this->once())->method('findAll')->will($this->returnValue($allAddresses));
		$this->inject($this->subject, 'addressRepository', $addressRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('addresses', $allAddresses);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenAddressToView() {
		$address = new \TYPO3\Lvaddress\Domain\Model\Address();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('address', $address);

		$this->subject->showAction($address);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenAddressToView() {
		$address = new \TYPO3\Lvaddress\Domain\Model\Address();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newAddress', $address);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($address);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenAddressToAddressRepository() {
		$address = new \TYPO3\Lvaddress\Domain\Model\Address();

		$addressRepository = $this->getMock('TYPO3\\Lvaddress\\Domain\\Repository\\AddressRepository', array('add'), array(), '', FALSE);
		$addressRepository->expects($this->once())->method('add')->with($address);
		$this->inject($this->subject, 'addressRepository', $addressRepository);

		$this->subject->createAction($address);
	}

	/**
	 * @test
	 */
	public function createActionAddsMessageToFlashMessageContainer() {
		$address = new \TYPO3\Lvaddress\Domain\Model\Address();

		$addressRepository = $this->getMock('TYPO3\\Lvaddress\\Domain\\Repository\\AddressRepository', array('add'), array(), '', FALSE);
		$this->inject($this->subject, 'addressRepository', $addressRepository);
		$this->subject->expects($this->once())->method('addFlashMessage');

		$this->subject->createAction($address);
	}

	/**
	 * @test
	 */
	public function createActionRedirectsToListAction() {
		$address = new \TYPO3\Lvaddress\Domain\Model\Address();

		$addressRepository = $this->getMock('TYPO3\\Lvaddress\\Domain\\Repository\\AddressRepository', array('add'), array(), '', FALSE);
		$this->inject($this->subject, 'addressRepository', $addressRepository);

		$this->subject->expects($this->once())->method('redirect')->with('list');
		$this->subject->createAction($address);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenAddressToView() {
		$address = new \TYPO3\Lvaddress\Domain\Model\Address();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('address', $address);

		$this->subject->editAction($address);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenAddressInAddressRepository() {
		$address = new \TYPO3\Lvaddress\Domain\Model\Address();

		$addressRepository = $this->getMock('TYPO3\\Lvaddress\\Domain\\Repository\\AddressRepository', array('update'), array(), '', FALSE);
		$addressRepository->expects($this->once())->method('update')->with($address);
		$this->inject($this->subject, 'addressRepository', $addressRepository);

		$this->subject->updateAction($address);
	}

	/**
	 * @test
	 */
	public function updateActionAddsMessageToFlashMessageContainer() {
		$address = new \TYPO3\Lvaddress\Domain\Model\Address();

		$addressRepository = $this->getMock('TYPO3\\Lvaddress\\Domain\\Repository\\AddressRepository', array('update'), array(), '', FALSE);
		$this->inject($this->subject, 'addressRepository', $addressRepository);

		$this->subject->expects($this->once())->method('addFlashMessage');
		$this->subject->updateAction($address);
	}

	/**
	 * @test
	 */
	public function updateActionRedirectsToListAction() {
		$address = new \TYPO3\Lvaddress\Domain\Model\Address();

		$addressRepository = $this->getMock('TYPO3\\Lvaddress\\Domain\\Repository\\AddressRepository', array('update'), array(), '', FALSE);
		$this->inject($this->subject, 'addressRepository', $addressRepository);

		$this->subject->expects($this->once())->method('redirect')->with('list');
		$this->subject->updateAction($address);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenAddressFromAddressRepository() {
		$address = new \TYPO3\Lvaddress\Domain\Model\Address();

		$addressRepository = $this->getMock('TYPO3\\Lvaddress\\Domain\\Repository\\AddressRepository', array('remove'), array(), '', FALSE);
		$addressRepository->expects($this->once())->method('remove')->with($address);
		$this->inject($this->subject, 'addressRepository', $addressRepository);

		$this->subject->deleteAction($address);
	}

	/**
	 * @test
	 */
	public function deleteActionAddsMessageToFlashMessageContainer() {
		$address = new \TYPO3\Lvaddress\Domain\Model\Address();

		$addressRepository = $this->getMock('TYPO3\\Lvaddress\\Domain\\Repository\\AddressRepository', array('remove'), array(), '', FALSE);
		$this->inject($this->subject, 'addressRepository', $addressRepository);
		$this->subject->expects($this->once())->method('addFlashMessage');

		$this->subject->deleteAction($address);
	}

	/**
	 * @test
	 */
	public function deleteActionRedirectsToListAction() {
		$address = new \TYPO3\Lvaddress\Domain\Model\Address();

		$addressRepository = $this->getMock('TYPO3\\Lvaddress\\Domain\\Repository\\AddressRepository', array('remove'), array(), '', FALSE);
		$this->inject($this->subject, 'addressRepository', $addressRepository);

		$this->subject->expects($this->once())->method('redirect')->with('list');
		$this->subject->deleteAction($address);
	}
}
