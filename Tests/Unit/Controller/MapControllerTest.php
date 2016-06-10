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
 * Test case for class TYPO3\Lvaddress\Controller\MapController.
 *
 */
class MapControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \TYPO3\Lvaddress\Controller\MapController
	 */
	protected $subject;

	public function setUp() {
		$this->subject = $this->getMock('TYPO3\\Lvaddress\\Controller\\MapController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllMapsFromRepositoryAndAssignsThemToView() {

		$allMaps = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$mapRepository = $this->getMock('', array('findAll'), array(), '', FALSE);
		$mapRepository->expects($this->once())->method('findAll')->will($this->returnValue($allMaps));
		$this->inject($this->subject, 'mapRepository', $mapRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('maps', $allMaps);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenMapToView() {
		$map = new \TYPO3\Lvaddress\Domain\Model\Map();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('map', $map);

		$this->subject->showAction($map);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenMapToView() {
		$map = new \TYPO3\Lvaddress\Domain\Model\Map();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newMap', $map);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($map);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenMapToMapRepository() {
		$map = new \TYPO3\Lvaddress\Domain\Model\Map();

		$mapRepository = $this->getMock('', array('add'), array(), '', FALSE);
		$mapRepository->expects($this->once())->method('add')->with($map);
		$this->inject($this->subject, 'mapRepository', $mapRepository);

		$this->subject->createAction($map);
	}

	/**
	 * @test
	 */
	public function createActionAddsMessageToFlashMessageContainer() {
		$map = new \TYPO3\Lvaddress\Domain\Model\Map();

		$mapRepository = $this->getMock('', array('add'), array(), '', FALSE);
		$this->inject($this->subject, 'mapRepository', $mapRepository);
		$this->subject->expects($this->once())->method('addFlashMessage');

		$this->subject->createAction($map);
	}

	/**
	 * @test
	 */
	public function createActionRedirectsToListAction() {
		$map = new \TYPO3\Lvaddress\Domain\Model\Map();

		$mapRepository = $this->getMock('', array('add'), array(), '', FALSE);
		$this->inject($this->subject, 'mapRepository', $mapRepository);

		$this->subject->expects($this->once())->method('redirect')->with('list');
		$this->subject->createAction($map);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenMapToView() {
		$map = new \TYPO3\Lvaddress\Domain\Model\Map();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('map', $map);

		$this->subject->editAction($map);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenMapInMapRepository() {
		$map = new \TYPO3\Lvaddress\Domain\Model\Map();

		$mapRepository = $this->getMock('', array('update'), array(), '', FALSE);
		$mapRepository->expects($this->once())->method('update')->with($map);
		$this->inject($this->subject, 'mapRepository', $mapRepository);

		$this->subject->updateAction($map);
	}

	/**
	 * @test
	 */
	public function updateActionAddsMessageToFlashMessageContainer() {
		$map = new \TYPO3\Lvaddress\Domain\Model\Map();

		$mapRepository = $this->getMock('', array('update'), array(), '', FALSE);
		$this->inject($this->subject, 'mapRepository', $mapRepository);

		$this->subject->expects($this->once())->method('addFlashMessage');
		$this->subject->updateAction($map);
	}

	/**
	 * @test
	 */
	public function updateActionRedirectsToListAction() {
		$map = new \TYPO3\Lvaddress\Domain\Model\Map();

		$mapRepository = $this->getMock('', array('update'), array(), '', FALSE);
		$this->inject($this->subject, 'mapRepository', $mapRepository);

		$this->subject->expects($this->once())->method('redirect')->with('list');
		$this->subject->updateAction($map);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenMapFromMapRepository() {
		$map = new \TYPO3\Lvaddress\Domain\Model\Map();

		$mapRepository = $this->getMock('', array('remove'), array(), '', FALSE);
		$mapRepository->expects($this->once())->method('remove')->with($map);
		$this->inject($this->subject, 'mapRepository', $mapRepository);

		$this->subject->deleteAction($map);
	}

	/**
	 * @test
	 */
	public function deleteActionAddsMessageToFlashMessageContainer() {
		$map = new \TYPO3\Lvaddress\Domain\Model\Map();

		$mapRepository = $this->getMock('', array('remove'), array(), '', FALSE);
		$this->inject($this->subject, 'mapRepository', $mapRepository);
		$this->subject->expects($this->once())->method('addFlashMessage');

		$this->subject->deleteAction($map);
	}

	/**
	 * @test
	 */
	public function deleteActionRedirectsToListAction() {
		$map = new \TYPO3\Lvaddress\Domain\Model\Map();

		$mapRepository = $this->getMock('', array('remove'), array(), '', FALSE);
		$this->inject($this->subject, 'mapRepository', $mapRepository);

		$this->subject->expects($this->once())->method('redirect')->with('list');
		$this->subject->deleteAction($map);
	}
}
