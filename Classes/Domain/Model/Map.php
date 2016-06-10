<?php
namespace TYPO3\Lvaddress\Domain\Model;

/***************************************************************
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
 ***************************************************************/

/**
 * Map
 */
class Map extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * area
	 *
	 * @var integer
	 */
	protected $area = 0;

	/**
	 * map
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $map = '';

	/**
	 * html
	 *
	 * @var string
	 */
	protected $html = '';

	/**
	 * Returns the area
	 *
	 * @return integer $area
	 */
	public function getArea() {
		return $this->area;
	}

	/**
	 * Sets the area
	 *
	 * @param integer $area
	 * @return void
	 */
	public function setArea($area) {
		$this->area = $area;
	}

	/**
	 * Returns the html
	 *
	 * @return string html
	 */
	public function getHtml() {
		return $this->html;
	}

	/**
	 * Sets the html
	 *
	 * @param string $html
	 * @return string html
	 */
	public function setHtml($html) {
		$this->html = $html;
	}

	/**
	 * Returns the map
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference map
	 */
	public function getMap() {
		return $this->map;
	}

	/**
	 * Sets the map
	 *
	 * @param string $map
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference map
	 */
	public function setMap($map) {
		$this->map = $map;
	}

}