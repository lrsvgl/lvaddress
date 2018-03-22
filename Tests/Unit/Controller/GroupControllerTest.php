<?php
namespace TYPO3\Lvaddress\Tests\Unit\Controller;

/**
 * Test case.
 */
class GroupControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \TYPO3\Lvaddress\Controller\GroupController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\TYPO3\Lvaddress\Controller\GroupController::class)
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
    public function listActionFetchesAllGroupsFromRepositoryAndAssignsThemToView()
    {

        $allGroups = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $groupRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $groupRepository->expects(self::once())->method('findAll')->will(self::returnValue($allGroups));
        $this->inject($this->subject, 'groupRepository', $groupRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('groups', $allGroups);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenGroupToView()
    {
        $group = new \TYPO3\Lvaddress\Domain\Model\Group();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('group', $group);

        $this->subject->showAction($group);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenGroupToGroupRepository()
    {
        $group = new \TYPO3\Lvaddress\Domain\Model\Group();

        $groupRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $groupRepository->expects(self::once())->method('add')->with($group);
        $this->inject($this->subject, 'groupRepository', $groupRepository);

        $this->subject->createAction($group);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenGroupToView()
    {
        $group = new \TYPO3\Lvaddress\Domain\Model\Group();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('group', $group);

        $this->subject->editAction($group);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenGroupInGroupRepository()
    {
        $group = new \TYPO3\Lvaddress\Domain\Model\Group();

        $groupRepository = $this->getMockBuilder(\::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $groupRepository->expects(self::once())->method('update')->with($group);
        $this->inject($this->subject, 'groupRepository', $groupRepository);

        $this->subject->updateAction($group);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenGroupFromGroupRepository()
    {
        $group = new \TYPO3\Lvaddress\Domain\Model\Group();

        $groupRepository = $this->getMockBuilder(\::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $groupRepository->expects(self::once())->method('remove')->with($group);
        $this->inject($this->subject, 'groupRepository', $groupRepository);

        $this->subject->deleteAction($group);
    }
}
