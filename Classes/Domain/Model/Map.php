<?php
namespace TYPO3\Lvaddress\Domain\Model;

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
 * Map
 */
class Map extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * area
     *
     * @var int
     */
    protected $area = 0;
    
    /**
     * map
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $map = null;
    
    /**
     * html
     *
     * @var string
     */
    protected $html = '';
    
    /**
     * Returns the area
     *
     * @return int $area
     */
    public function getArea()
    {
        return $this->area;
    }
    
    /**
     * Sets the area
     *
     * @param int $area
     * @return void
     */
    public function setArea($area)
    {
        $this->area = $area;
    }
    
    /**
     * Returns the map
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $map
     */
    public function getMap()
    {
        return $this->map;
    }
    
    /**
     * Sets the map
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $map
     * @return void
     */
    public function setMap(\TYPO3\CMS\Extbase\Domain\Model\FileReference $map)
    {
        $this->map = $map;
    }
    
    /**
     * Returns the html
     *
     * @return string $html
     */
    public function getHtml()
    {
        return $this->html;
    }
    
    /**
     * Sets the html
     *
     * @param string $html
     * @return void
     */
    public function setHtml($html)
    {
        $this->html = $html;
    }

}