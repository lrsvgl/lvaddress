<?php
namespace TYPO3\Lvaddress\Tests\Unit\Domain\Model;

/**
 * Test case for class \TYPO3\Lvaddress\Domain\Model\Map.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class MapTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \TYPO3\Lvaddress\Domain\Model\Map
     */
    protected $subject = NULL;

    public function setUp()
    {
        $this->subject = new \TYPO3\Lvaddress\Domain\Model\Map();
    }

    public function tearDown()
    {
        unset($this->subject);
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
        $this->assertEquals(
            NULL,
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

        $this->assertAttributeEquals(
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
        $this->assertSame(
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

        $this->assertAttributeEquals(
            'Conceived at T3CON10',
            'html',
            $this->subject
        );

    }
}
