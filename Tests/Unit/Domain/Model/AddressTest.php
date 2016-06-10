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
 * Test case for class \TYPO3\Lvaddress\Domain\Model\Address.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class AddressTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \TYPO3\Lvaddress\Domain\Model\Address
	 */
	protected $subject;

	public function setUp() {
		$this->subject = new \TYPO3\Lvaddress\Domain\Model\Address();
	}

	public function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getFrontpageReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getFrontpage()
		);
	}

	/**
	 * @test
	 */
	public function setFrontpageForIntegerSetsFrontpage() {
		$this->subject->setFrontpage(12);

		$this->assertAttributeEquals(
			12,
			'frontpage',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLastnameReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getLastname()
		);
	}

	/**
	 * @test
	 */
	public function setLastnameForStringSetsLastname() {
		$this->subject->setLastname('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'lastname',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFirstnameReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getFirstname()
		);
	}

	/**
	 * @test
	 */
	public function setFirstnameForStringSetsFirstname() {
		$this->subject->setFirstname('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'firstname',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getImageReturnsInitialValueForTYPO3\CMS\Extbase\Domain\Model\FileReference() {	}

	/**
	 * @test
	 */
	public function setImageForTYPO3\CMS\Extbase\Domain\Model\FileReferenceSetsImage() {	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() {
		$this->subject->setTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'title',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFunctionReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getFunction()
		);
	}

	/**
	 * @test
	 */
	public function setFunctionForStringSetsFunction() {
		$this->subject->setFunction('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'function',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPhoneReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPhone()
		);
	}

	/**
	 * @test
	 */
	public function setPhoneForStringSetsPhone() {
		$this->subject->setPhone('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'phone',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFaxReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getFax()
		);
	}

	/**
	 * @test
	 */
	public function setFaxForStringSetsFax() {
		$this->subject->setFax('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'fax',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMobileReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getMobile()
		);
	}

	/**
	 * @test
	 */
	public function setMobileForStringSetsMobile() {
		$this->subject->setMobile('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'mobile',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEmailReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getEmail()
		);
	}

	/**
	 * @test
	 */
	public function setEmailForStringSetsEmail() {
		$this->subject->setEmail('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'email',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getWwwReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getWww()
		);
	}

	/**
	 * @test
	 */
	public function setWwwForStringSetsWww() {
		$this->subject->setWww('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'www',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCompanyReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getCompany()
		);
	}

	/**
	 * @test
	 */
	public function setCompanyForStringSetsCompany() {
		$this->subject->setCompany('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'company',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getStreetReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getStreet()
		);
	}

	/**
	 * @test
	 */
	public function setStreetForStringSetsStreet() {
		$this->subject->setStreet('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'street',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getZipReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getZip()
		);
	}

	/**
	 * @test
	 */
	public function setZipForStringSetsZip() {
		$this->subject->setZip('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'zip',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCityReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getCity()
		);
	}

	/**
	 * @test
	 */
	public function setCityForStringSetsCity() {
		$this->subject->setCity('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'city',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getStateReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getState()
		);
	}

	/**
	 * @test
	 */
	public function setStateForStringSetsState() {
		$this->subject->setState('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'state',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDescription()
		);
	}

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() {
		$this->subject->setDescription('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCountryReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getCountry()
		);
	}

	/**
	 * @test
	 */
	public function setCountryForIntegerSetsCountry() {
		$this->subject->setCountry(12);

		$this->assertAttributeEquals(
			12,
			'country',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGroupsReturnsInitialValueForGroup() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getGroups()
		);
	}

	/**
	 * @test
	 */
	public function setGroupsForObjectStorageContainingGroupSetsGroups() {
		$group = new \TYPO3\Lvaddress\Domain\Model\Group();
		$objectStorageHoldingExactlyOneGroups = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneGroups->attach($group);
		$this->subject->setGroups($objectStorageHoldingExactlyOneGroups);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneGroups,
			'groups',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addGroupToObjectStorageHoldingGroups() {
		$group = new \TYPO3\Lvaddress\Domain\Model\Group();
		$groupsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$groupsObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($group));
		$this->inject($this->subject, 'groups', $groupsObjectStorageMock);

		$this->subject->addGroup($group);
	}

	/**
	 * @test
	 */
	public function removeGroupFromObjectStorageHoldingGroups() {
		$group = new \TYPO3\Lvaddress\Domain\Model\Group();
		$groupsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$groupsObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($group));
		$this->inject($this->subject, 'groups', $groupsObjectStorageMock);

		$this->subject->removeGroup($group);

	}
}
