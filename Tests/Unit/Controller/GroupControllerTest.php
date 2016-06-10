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
 * Test case for class TYPO3\Lvaddress\Controller\GroupController.
 *
 */
class GroupControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \TYPO3\Lvaddress\Controller\GroupController
	 */
	protected $subject;

	public function setUp() {
		$this->subject = $this->getMock('TYPO3\\Lvaddress\\Controller\\GroupController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllGroupsFromRepositoryAndAssignsThemToView() {

		$allGroups = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$groupRepository = $this->getMock('', array('findAll'), array(), '', FALSE);
		$groupRepository->expects($this->once())->method('findAll')->will($this->returnValue($allGroups));
		$this->inject($this->subject, 'groupRepository', $groupRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('groups', $allGroups);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenGroupToView() {
		$group = new \TYPO3\Lvaddress\Domain\Model\Group();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('group', $group);

		$this->subject->showAction($group);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenGroupToView() {
		$group = new \TYPO3\Lvaddress\Domain\Model\Group();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newGroup', $group);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($group);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenGroupToGroupRepository() {
		$group = new \TYPO3\Lvaddress\Domain\Model\Group();

		$groupRepository = $this->getMock('', array('add'), array(), '', FALSE);
		$groupRepository->expects($this->once())->method('add')->with($group);
		$this->inject($this->subject, 'groupRepository', $groupRepository);

		$this->subject->createAction($group);
	}

	/**
	 * @test
	 */
	public function createActionAddsMessageToFlashMessageContainer() {
		$group = new \TYPO3\Lvaddress\Domain\Model\Group();

		$groupRepository = $this->getMock('', array('add'), array(), '', FALSE);
		$this->inject($this->subject, 'groupRepository', $groupRepository);
		$this->subject->expects($this->once())->method('addFlashMessage');

		$this->subject->createAction($group);
	}

	/**
	 * @test
	 */
	public function createActionRedirectsToListAction() {
		$group = new \TYPO3\Lvaddress\Domain\Model\Group();

		$groupRepository = $this->getMock('', array('add'), array(), '', FALSE);
		$this->inject($this->subject, 'groupRepository', $groupRepository);

		$this->subject->expects($this->once())->method('redirect')->with('list');
		$this->subject->createAction($group);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenGroupToView() {
		$group = new \TYPO3\Lvaddress\Domain\Model\Group();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('group', $group);

		$this->subject->editAction($group);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenGroupInGroupRepository() {
		$group = new \TYPO3\Lvaddress\Domain\Model\Group();

		$groupRepository = $this->getMock('', array('update'), array(), '', FALSE);
		$groupRepository->expects($this->once())->method('update')->with($group);
		$this->inject($this->subject, 'groupRepository', $groupRepository);

		$this->subject->updateAction($group);
	}

	/**
	 * @test
	 */
	public function updateActionAddsMessageToFlashMessageContainer() {
		$group = new \TYPO3\Lvaddress\Domain\Model\Group();

		$groupRepository = $this->getMock('', array('update'), array(), '', FALSE);
		$this->inject($this->subject, 'groupRepository', $groupRepository);

		$this->subject->expects($this->once())->method('addFlashMessage');
		$this->subject->updateAction($group);
	}

	/**
	 * @test
	 */
	public function updateActionRedirectsToListAction() {
		$group = new \TYPO3\Lvaddress\Domain\Model\Group();

		$groupRepository = $this->getMock('', array('update'), array(), '', FALSE);
		$this->inject($this->subject, 'groupRepository', $groupRepository);

		$this->subject->expects($this->once())->method('redirect')->with('list');
		$this->subject->updateAction($group);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenGroupFromGroupRepository() {
		$group = new \TYPO3\Lvaddress\Domain\Model\Group();

		$groupRepository = $this->getMock('', array('remove'), array(), '', FALSE);
		$groupRepository->expects($this->once())->method('remove')->with($group);
		$this->inject($this->subject, 'groupRepository', $groupRepository);

		$this->subject->deleteAction($group);
	}

	/**
	 * @test
	 */
	public function deleteActionAddsMessageToFlashMessageContainer() {
		$group = new \TYPO3\Lvaddress\Domain\Model\Group();

		$groupRepository = $this->getMock('', array('remove'), array(), '', FALSE);
		$this->inject($this->subject, 'groupRepository', $groupRepository);
		$this->subject->expects($this->once())->method('addFlashMessage');

		$this->subject->deleteAction($group);
	}

	/**
	 * @test
	 */
	public function deleteActionRedirectsToListAction() {
		$group = new \TYPO3\Lvaddress\Domain\Model\Group();

		$groupRepository = $this->getMock('', array('remove'), array(), '', FALSE);
		$this->inject($this->subject, 'groupRepository', $groupRepository);

		$this->subject->expects($this->once())->method('redirect')->with('list');
		$this->subject->deleteAction($group);
	}
}
