<?php
namespace TYPO3\Lvaddress\Tests\Unit\Controller;

/**
 * Test case for class TYPO3\Lvaddress\Controller\AddressController.
 *
 */
class AddressControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

    /**
     * @var \TYPO3\Lvaddress\Controller\AddressController
     */
    protected $subject = NULL;

    public function setUp()
    {
        $this->subject = $this->getMock(\TYPO3\Lvaddress\Controller\AddressController::class, ['redirect', 'forward', 'addFlashMessage'], [], '', false);
    }

    public function tearDown()
    {
        unset($this->subject);
    }

    /**
     * @test
     */
    public function listActionFetchesAllAddressesFromRepositoryAndAssignsThemToView()
    {

        $allAddresses = $this->getMock(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class, [], [], '', false);

        $addressRepository = $this->getMock(\TYPO3\Lvaddress\Domain\Repository\AddressRepository::class, ['findAll'], [], '', false);
        $addressRepository->expects($this->once())->method('findAll')->will($this->returnValue($allAddresses));
        $this->inject($this->subject, 'addressRepository', $addressRepository);

        $view = $this->getMock(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class);
        $view->expects($this->once())->method('assign')->with('addresses', $allAddresses);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenAddressToView()
    {
        $address = new \TYPO3\Lvaddress\Domain\Model\Address();

        $view = $this->getMock(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class);
        $this->inject($this->subject, 'view', $view);
        $view->expects($this->once())->method('assign')->with('address', $address);

        $this->subject->showAction($address);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenAddressToAddressRepository()
    {
        $address = new \TYPO3\Lvaddress\Domain\Model\Address();

        $addressRepository = $this->getMock(\TYPO3\Lvaddress\Domain\Repository\AddressRepository::class, ['add'], [], '', false);
        $addressRepository->expects($this->once())->method('add')->with($address);
        $this->inject($this->subject, 'addressRepository', $addressRepository);

        $this->subject->createAction($address);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenAddressToView()
    {
        $address = new \TYPO3\Lvaddress\Domain\Model\Address();

        $view = $this->getMock(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class);
        $this->inject($this->subject, 'view', $view);
        $view->expects($this->once())->method('assign')->with('address', $address);

        $this->subject->editAction($address);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenAddressInAddressRepository()
    {
        $address = new \TYPO3\Lvaddress\Domain\Model\Address();

        $addressRepository = $this->getMock(\TYPO3\Lvaddress\Domain\Repository\AddressRepository::class, ['update'], [], '', false);
        $addressRepository->expects($this->once())->method('update')->with($address);
        $this->inject($this->subject, 'addressRepository', $addressRepository);

        $this->subject->updateAction($address);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenAddressFromAddressRepository()
    {
        $address = new \TYPO3\Lvaddress\Domain\Model\Address();

        $addressRepository = $this->getMock(\TYPO3\Lvaddress\Domain\Repository\AddressRepository::class, ['remove'], [], '', false);
        $addressRepository->expects($this->once())->method('remove')->with($address);
        $this->inject($this->subject, 'addressRepository', $addressRepository);

        $this->subject->deleteAction($address);
    }
}
