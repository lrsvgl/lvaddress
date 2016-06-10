<?php

namespace TYPO3\Lvaddress\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 
 *
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
 * Test case for class \TYPO3\Lvaddress\Domain\Model\Map.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class MapTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \TYPO3\Lvaddress\Domain\Model\Map
	 */
	protected $subject;

	public function setUp() {
		$this->subject = new \TYPO3\Lvaddress\Domain\Model\Map();
	}

	public function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getAreaReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getArea()
		);
	}

	/**
	 * @test
	 */
	public function setAreaForIntegerSetsArea() {
		$this->subject->setArea(12);

		$this->assertAttributeEquals(
			12,
			'area',
			$this->subject
		);
	}


	/**
	 * @test
	 */
	public function getHtmlReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getHtml()
		);
	}

	/**
	 * @test
	 */
	public function setHtmlForStringSetsHtml() {
		$this->subject->setHtml('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'html',
			$this->subject
		);
	}
}
