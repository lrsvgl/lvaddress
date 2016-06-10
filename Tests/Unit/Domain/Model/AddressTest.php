<?php
namespace TYPO3\Lvaddress\Tests\Unit\Domain\Model;

/**
 * Test case for class \TYPO3\Lvaddress\Domain\Model\Address.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class AddressTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \TYPO3\Lvaddress\Domain\Model\Address
     */
    protected $subject = NULL;

    public function setUp()
    {
        $this->subject = new \TYPO3\Lvaddress\Domain\Model\Address();
    }

    public function tearDown()
    {
        unset($this->subject);
    }

    /**
     * @test
     */
    public function getLastnameReturnsInitialValueForString()
    {
        $this->assertSame(
            '',
            $this->subject->getLastname()
        );

    }

    /**
     * @test
     */
    public function setLastnameForStringSetsLastname()
    {
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
    public function getFirstnameReturnsInitialValueForString()
    {
        $this->assertSame(
            '',
            $this->subject->getFirstname()
        );

    }

    /**
     * @test
     */
    public function setFirstnameForStringSetsFirstname()
    {
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
    public function getImageReturnsInitialValueForFileReference()
    {
        $this->assertEquals(
            NULL,
            $this->subject->getImage()
        );

    }

    /**
     * @test
     */
    public function setImageForFileReferenceSetsImage()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setImage($fileReferenceFixture);

        $this->assertAttributeEquals(
            $fileReferenceFixture,
            'image',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        $this->assertSame(
            '',
            $this->subject->getTitle()
        );

    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
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
    public function getFunctionReturnsInitialValueForString()
    {
        $this->assertSame(
            '',
            $this->subject->getFunction()
        );

    }

    /**
     * @test
     */
    public function setFunctionForStringSetsFunction()
    {
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
    public function getPhoneReturnsInitialValueForString()
    {
        $this->assertSame(
            '',
            $this->subject->getPhone()
        );

    }

    /**
     * @test
     */
    public function setPhoneForStringSetsPhone()
    {
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
    public function getFaxReturnsInitialValueForString()
    {
        $this->assertSame(
            '',
            $this->subject->getFax()
        );

    }

    /**
     * @test
     */
    public function setFaxForStringSetsFax()
    {
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
    public function getMobileReturnsInitialValueForString()
    {
        $this->assertSame(
            '',
            $this->subject->getMobile()
        );

    }

    /**
     * @test
     */
    public function setMobileForStringSetsMobile()
    {
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
    public function getEmailReturnsInitialValueForString()
    {
        $this->assertSame(
            '',
            $this->subject->getEmail()
        );

    }

    /**
     * @test
     */
    public function setEmailForStringSetsEmail()
    {
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
    public function getWwwReturnsInitialValueForString()
    {
        $this->assertSame(
            '',
            $this->subject->getWww()
        );

    }

    /**
     * @test
     */
    public function setWwwForStringSetsWww()
    {
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
    public function getCompanyReturnsInitialValueForString()
    {
        $this->assertSame(
            '',
            $this->subject->getCompany()
        );

    }

    /**
     * @test
     */
    public function setCompanyForStringSetsCompany()
    {
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
    public function getStreetReturnsInitialValueForString()
    {
        $this->assertSame(
            '',
            $this->subject->getStreet()
        );

    }

    /**
     * @test
     */
    public function setStreetForStringSetsStreet()
    {
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
    public function getZipReturnsInitialValueForString()
    {
        $this->assertSame(
            '',
            $this->subject->getZip()
        );

    }

    /**
     * @test
     */
    public function setZipForStringSetsZip()
    {
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
    public function getCityReturnsInitialValueForString()
    {
        $this->assertSame(
            '',
            $this->subject->getCity()
        );

    }

    /**
     * @test
     */
    public function setCityForStringSetsCity()
    {
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
    public function getStateReturnsInitialValueForString()
    {
        $this->assertSame(
            '',
            $this->subject->getState()
        );

    }

    /**
     * @test
     */
    public function setStateForStringSetsState()
    {
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
    public function getDescriptionReturnsInitialValueForString()
    {
        $this->assertSame(
            '',
            $this->subject->getDescription()
        );

    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
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
    public function getCountryReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setCountryForIntSetsCountry()
    {
    }

    /**
     * @test
     */
    public function getGroupsReturnsInitialValueForGroup()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->assertEquals(
            $newObjectStorage,
            $this->subject->getGroups()
        );

    }

    /**
     * @test
     */
    public function setGroupsForObjectStorageContainingGroupSetsGroups()
    {
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
    public function addGroupToObjectStorageHoldingGroups()
    {
        $group = new \TYPO3\Lvaddress\Domain\Model\Group();
        $groupsObjectStorageMock = $this->getMock(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class, ['attach'], [], '', false);
        $groupsObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($group));
        $this->inject($this->subject, 'groups', $groupsObjectStorageMock);

        $this->subject->addGroup($group);
    }

    /**
     * @test
     */
    public function removeGroupFromObjectStorageHoldingGroups()
    {
        $group = new \TYPO3\Lvaddress\Domain\Model\Group();
        $groupsObjectStorageMock = $this->getMock(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class, ['detach'], [], '', false);
        $groupsObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($group));
        $this->inject($this->subject, 'groups', $groupsObjectStorageMock);

        $this->subject->removeGroup($group);

    }
}
