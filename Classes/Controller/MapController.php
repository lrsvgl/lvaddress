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

/***
 *
 * This file is part of the "Adressen" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018
 *
 ***/

/**
 * MapController
 */
class MapController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $maps = $this->mapRepository->findAll();
        $this->view->assign('maps', $maps);
    }

    /**
     * action show
     *
     * @param \TYPO3\Lvaddress\Domain\Model\Map $map
     * @return void
     */
    public function showAction(\TYPO3\Lvaddress\Domain\Model\Map $map)
    {
        $this->view->assign('map', $map);
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
     * @param \TYPO3\Lvaddress\Domain\Model\Map $newMap
     * @return void
     */
    public function createAction(\TYPO3\Lvaddress\Domain\Model\Map $newMap)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->mapRepository->add($newMap);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \TYPO3\Lvaddress\Domain\Model\Map $map
     * @ignorevalidation $map
     * @return void
     */
    public function editAction(\TYPO3\Lvaddress\Domain\Model\Map $map)
    {
        $this->view->assign('map', $map);
    }

    /**
     * action update
     *
     * @param \TYPO3\Lvaddress\Domain\Model\Map $map
     * @return void
     */
    public function updateAction(\TYPO3\Lvaddress\Domain\Model\Map $map)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->mapRepository->update($map);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \TYPO3\Lvaddress\Domain\Model\Map $map
     * @return void
     */
    public function deleteAction(\TYPO3\Lvaddress\Domain\Model\Map $map)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->mapRepository->remove($map);
        $this->redirect('list');
    }
}
