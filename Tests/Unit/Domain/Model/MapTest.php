<?php
namespace TYPO3\Lvaddress\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class MapTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \TYPO3\Lvaddress\Domain\Model\Map
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \TYPO3\Lvaddress\Domain\Model\Map();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getAreaReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setAreaForIntSetsArea()
    {
    }

    /**
     * @test
     */
    public function getMapReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getMap()
        );

    }

    /**
     * @test
     */
    public function setMapForFileReferenceSetsMap()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setMap($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'map',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getHtmlReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getHtml()
        );

    }

    /**
     * @test
     */
    public function setHtmlForStringSetsHtml()
    {
        $this->subject->setHtml('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'html',
            $this->subject
        );

    }
}
