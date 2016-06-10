<?php
namespace TYPO3\Lvaddress\Tests\Unit\Controller;

/**
 * Test case for class TYPO3\Lvaddress\Controller\GroupController.
 *
 */
class GroupControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

    /**
     * @var \TYPO3\Lvaddress\Controller\GroupController
     */
    protected $subject = NULL;

    public function setUp()
    {
        $this->subject = $this->getMock(\TYPO3\Lvaddress\Controller\GroupController::class, ['redirect', 'forward', 'addFlashMessage'], [], '', false);
    }

    public function tearDown()
    {
        unset($this->subject);
    }

    /**
     * @test
     */
    public function listActionFetchesAllGroupsFromRepositoryAndAssignsThemToView()
    {

        $allGroups = $this->getMock(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class, [], [], '', false);

        $groupRepository = $this->getMock(\::class, ['findAll'], [], '', false);
        $groupRepository->expects($this->once())->method('findAll')->will($this->returnValue($allGroups));
        $this->inject($this->subject, 'groupRepository', $groupRepository);

        $view = $this->getMock(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class);
        $view->expects($this->once())->method('assign')->with('groups', $allGroups);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenGroupToView()
    {
        $group = new \TYPO3\Lvaddress\Domain\Model\Group();

        $view = $this->getMock(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class);
        $this->inject($this->subject, 'view', $view);
        $view->expects($this->once())->method('assign')->with('group', $group);

        $this->subject->showAction($group);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenGroupToGroupRepository()
    {
        $group = new \TYPO3\Lvaddress\Domain\Model\Group();

        $groupRepository = $this->getMock(\::class, ['add'], [], '', false);
        $groupRepository->expects($this->once())->method('add')->with($group);
        $this->inject($this->subject, 'groupRepository', $groupRepository);

        $this->subject->createAction($group);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenGroupToView()
    {
        $group = new \TYPO3\Lvaddress\Domain\Model\Group();

        $view = $this->getMock(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class);
        $this->inject($this->subject, 'view', $view);
        $view->expects($this->once())->method('assign')->with('group', $group);

        $this->subject->editAction($group);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenGroupInGroupRepository()
    {
        $group = new \TYPO3\Lvaddress\Domain\Model\Group();

        $groupRepository = $this->getMock(\::class, ['update'], [], '', false);
        $groupRepository->expects($this->once())->method('update')->with($group);
        $this->inject($this->subject, 'groupRepository', $groupRepository);

        $this->subject->updateAction($group);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenGroupFromGroupRepository()
    {
        $group = new \TYPO3\Lvaddress\Domain\Model\Group();

        $groupRepository = $this->getMock(\::class, ['remove'], [], '', false);
        $groupRepository->expects($this->once())->method('remove')->with($group);
        $this->inject($this->subject, 'groupRepository', $groupRepository);

        $this->subject->deleteAction($group);
    }
}
