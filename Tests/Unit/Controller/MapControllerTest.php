<?php
namespace TYPO3\Lvaddress\Tests\Unit\Controller;

/**
 * Test case.
 */
class MapControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \TYPO3\Lvaddress\Controller\MapController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\TYPO3\Lvaddress\Controller\MapController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllMapsFromRepositoryAndAssignsThemToView()
    {

        $allMaps = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $mapRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $mapRepository->expects(self::once())->method('findAll')->will(self::returnValue($allMaps));
        $this->inject($this->subject, 'mapRepository', $mapRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('maps', $allMaps);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenMapToView()
    {
        $map = new \TYPO3\Lvaddress\Domain\Model\Map();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('map', $map);

        $this->subject->showAction($map);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenMapToMapRepository()
    {
        $map = new \TYPO3\Lvaddress\Domain\Model\Map();

        $mapRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $mapRepository->expects(self::once())->method('add')->with($map);
        $this->inject($this->subject, 'mapRepository', $mapRepository);

        $this->subject->createAction($map);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenMapToView()
    {
        $map = new \TYPO3\Lvaddress\Domain\Model\Map();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('map', $map);

        $this->subject->editAction($map);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenMapInMapRepository()
    {
        $map = new \TYPO3\Lvaddress\Domain\Model\Map();

        $mapRepository = $this->getMockBuilder(\::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $mapRepository->expects(self::once())->method('update')->with($map);
        $this->inject($this->subject, 'mapRepository', $mapRepository);

        $this->subject->updateAction($map);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenMapFromMapRepository()
    {
        $map = new \TYPO3\Lvaddress\Domain\Model\Map();

        $mapRepository = $this->getMockBuilder(\::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $mapRepository->expects(self::once())->method('remove')->with($map);
        $this->inject($this->subject, 'mapRepository', $mapRepository);

        $this->subject->deleteAction($map);
    }
}
