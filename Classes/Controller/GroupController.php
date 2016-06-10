<?php
namespace TYPO3\Lvaddress\Controller;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016
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
 ***************************************************************/

/**
 * GroupController
 */
class GroupController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $groups = $this->groupRepository->findAll();
        $this->view->assign('groups', $groups);
    }
    
    /**
     * action show
     *
     * @param \TYPO3\Lvaddress\Domain\Model\Group $group
     * @return void
     */
    public function showAction(\TYPO3\Lvaddress\Domain\Model\Group $group)
    {
        $this->view->assign('group', $group);
    }
    
    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {
        
    }
    
    /**
     * action create
     *
     * @param \TYPO3\Lvaddress\Domain\Model\Group $newGroup
     * @return void
     */
    public function createAction(\TYPO3\Lvaddress\Domain\Model\Group $newGroup)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->groupRepository->add($newGroup);
        $this->redirect('list');
    }
    
    /**
     * action edit
     *
     * @param \TYPO3\Lvaddress\Domain\Model\Group $group
     * @ignorevalidation $group
     * @return void
     */
    public function editAction(\TYPO3\Lvaddress\Domain\Model\Group $group)
    {
        $this->view->assign('group', $group);
    }
    
    /**
     * action update
     *
     * @param \TYPO3\Lvaddress\Domain\Model\Group $group
     * @return void
     */
    public function updateAction(\TYPO3\Lvaddress\Domain\Model\Group $group)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->groupRepository->update($group);
        $this->redirect('list');
    }
    
    /**
     * action delete
     *
     * @param \TYPO3\Lvaddress\Domain\Model\Group $group
     * @return void
     */
    public function deleteAction(\TYPO3\Lvaddress\Domain\Model\Group $group)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->groupRepository->remove($group);
        $this->redirect('list');
    }

}