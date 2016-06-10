<?php
namespace TYPO3\Lvaddress\Tests\Unit\Controller;

/**
 * Test case for class TYPO3\Lvaddress\Controller\MapController.
 *
 */
class MapControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

    /**
     * @var \TYPO3\Lvaddress\Controller\MapController
     */
    protected $subject = NULL;

    public function setUp()
    {
        $this->subject = $this->getMock(\TYPO3\Lvaddress\Controller\MapController::class, ['redirect', 'forward', 'addFlashMessage'], [], '', false);
    }

    public function tearDown()
    {
        unset($this->subject);
    }

    /**
     * @test
     */
    public function listActionFetchesAllMapsFromRepositoryAndAssignsThemToView()
    {

        $allMaps = $this->getMock(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class, [], [], '', false);

        $mapRepository = $this->getMock(\::class, ['findAll'], [], '', false);
        $mapRepository->expects($this->once())->method('findAll')->will($this->returnValue($allMaps));
        $this->inject($this->subject, 'mapRepository', $mapRepository);

        $view = $this->getMock(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class);
        $view->expects($this->once())->method('assign')->with('maps', $allMaps);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenMapToView()
    {
        $map = new \TYPO3\Lvaddress\Domain\Model\Map();

        $view = $this->getMock(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class);
        $this->inject($this->subject, 'view', $view);
        $view->expects($this->once())->method('assign')->with('map', $map);

        $this->subject->showAction($map);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenMapToMapRepository()
    {
        $map = new \TYPO3\Lvaddress\Domain\Model\Map();

        $mapRepository = $this->getMock(\::class, ['add'], [], '', false);
        $mapRepository->expects($this->once())->method('add')->with($map);
        $this->inject($this->subject, 'mapRepository', $mapRepository);

        $this->subject->createAction($map);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenMapToView()
    {
        $map = new \TYPO3\Lvaddress\Domain\Model\Map();

        $view = $this->getMock(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class);
        $this->inject($this->subject, 'view', $view);
        $view->expects($this->once())->method('assign')->with('map', $map);

        $this->subject->editAction($map);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenMapInMapRepository()
    {
        $map = new \TYPO3\Lvaddress\Domain\Model\Map();

        $mapRepository = $this->getMock(\::class, ['update'], [], '', false);
        $mapRepository->expects($this->once())->method('update')->with($map);
        $this->inject($this->subject, 'mapRepository', $mapRepository);

        $this->subject->updateAction($map);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenMapFromMapRepository()
    {
        $map = new \TYPO3\Lvaddress\Domain\Model\Map();

        $mapRepository = $this->getMock(\::class, ['remove'], [], '', false);
        $mapRepository->expects($this->once())->method('remove')->with($map);
        $this->inject($this->subject, 'mapRepository', $mapRepository);

        $this->subject->deleteAction($map);
    }
}
