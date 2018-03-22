<?php
namespace TYPO3\Lvaddress\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class AddressTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \TYPO3\Lvaddress\Domain\Model\Address
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \TYPO3\Lvaddress\Domain\Model\Address();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getLastnameReturnsInitialValueForString()
    {
        self::assertSame(
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

        self::assertAttributeEquals(
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
        self::assertSame(
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

        self::assertAttributeEquals(
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
        self::assertEquals(
            null,
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

        self::assertAttributeEquals(
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
        self::assertSame(
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

        self::assertAttributeEquals(
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
        self::assertSame(
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

        self::assertAttributeEquals(
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
        self::assertSame(
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

        self::assertAttributeEquals(
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
        self::assertSame(
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

        self::assertAttributeEquals(
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
        self::assertSame(
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

        self::assertAttributeEquals(
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
        self::assertSame(
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

        self::assertAttributeEquals(
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
        self::assertSame(
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

        self::assertAttributeEquals(
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
        self::assertSame(
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

        self::assertAttributeEquals(
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
        self::assertSame(
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

        self::assertAttributeEquals(
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
        self::assertSame(
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

        self::assertAttributeEquals(
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
        self::assertSame(
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

        self::assertAttributeEquals(
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
        self::assertSame(
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

        self::assertAttributeEquals(
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
        self::assertSame(
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

        self::assertAttributeEquals(
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
    public function getInternalpageReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setInternalpageForIntSetsInternalpage()
    {
    }

    /**
     * @test
     */
    public function getGroupsReturnsInitialValueForGroup()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
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

        self::assertAttributeEquals(
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
        $groupsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $groupsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($group));
        $this->inject($this->subject, 'groups', $groupsObjectStorageMock);

        $this->subject->addGroup($group);
    }

    /**
     * @test
     */
    public function removeGroupFromObjectStorageHoldingGroups()
    {
        $group = new \TYPO3\Lvaddress\Domain\Model\Group();
        $groupsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $groupsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($group));
        $this->inject($this->subject, 'groups', $groupsObjectStorageMock);

        $this->subject->removeGroup($group);

    }
}
