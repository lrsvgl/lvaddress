<?php
namespace TYPO3\Lvaddress\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 * Address
 */
class Address extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * lastname
     *
     * @var string
     */
    protected $lastname = '';
    
    /**
     * firstname
     *
     * @var string
     */
    protected $firstname = '';
    
    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $image = null;
    
    /**
     * title
     *
     * @var string
     */
    protected $title = '';
    
    /**
     * function
     *
     * @var string
     */
    protected $function = '';
    
    /**
     * phone
     *
     * @var string
     */
    protected $phone = '';
    
    /**
     * fax
     *
     * @var string
     */
    protected $fax = '';
    
    /**
     * mobile
     *
     * @var string
     */
    protected $mobile = '';
    
    /**
     * email
     *
     * @var string
     */
    protected $email = '';
    
    /**
     * www
     *
     * @var string
     */
    protected $www = '';
    
    /**
     * company
     *
     * @var string
     */
    protected $company = '';
    
    /**
     * street
     *
     * @var string
     */
    protected $street = '';
    
    /**
     * zip
     *
     * @var string
     */
    protected $zip = '';
    
    /**
     * city
     *
     * @var string
     */
    protected $city = '';
    
    /**
     * state
     *
     * @var string
     */
    protected $state = '';
    
    /**
     * description
     *
     * @var string
     */
    protected $description = '';
    
    /**
     * country
     *
     * @var int
     */
    protected $country = 0;
    
    /**
     * groups
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Lvaddress\Domain\Model\Group>
     */
    protected $groups = null;
    
    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }
    
    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->groups = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }
    
    /**
     * Returns the lastname
     *
     * @return string $lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }
    
    /**
     * Sets the lastname
     *
     * @param string $lastname
     * @return void
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }
    
    /**
     * Returns the firstname
     *
     * @return string $firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }
    
    /**
     * Sets the firstname
     *
     * @param string $firstname
     * @return void
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }
    
    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }
    
    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }
    
    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    /**
     * Returns the function
     *
     * @return string $function
     */
    public function getFunction()
    {
        return $this->function;
    }
    
    /**
     * Sets the function
     *
     * @param string $function
     * @return void
     */
    public function setFunction($function)
    {
        $this->function = $function;
    }
    
    /**
     * Returns the phone
     *
     * @return string $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }
    
    /**
     * Sets the phone
     *
     * @param string $phone
     * @return void
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    
    /**
     * Returns the fax
     *
     * @return string $fax
     */
    public function getFax()
    {
        return $this->fax;
    }
    
    /**
     * Sets the fax
     *
     * @param string $fax
     * @return void
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }
    
    /**
     * Returns the mobile
     *
     * @return string $mobile
     */
    public function getMobile()
    {
        return $this->mobile;
    }
    
    /**
     * Sets the mobile
     *
     * @param string $mobile
     * @return void
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }
    
    /**
     * Returns the email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * Sets the email
     *
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    /**
     * Returns the www
     *
     * @return string $www
     */
    public function getWww()
    {
        return $this->www;
    }
    
    /**
     * Sets the www
     *
     * @param string $www
     * @return void
     */
    public function setWww($www)
    {
        $this->www = $www;
    }
    
    /**
     * Returns the company
     *
     * @return string $company
     */
    public function getCompany()
    {
        return $this->company;
    }
    
    /**
     * Sets the company
     *
     * @param string $company
     * @return void
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }
    
    /**
     * Returns the street
     *
     * @return string $street
     */
    public function getStreet()
    {
        return $this->street;
    }
    
    /**
     * Sets the street
     *
     * @param string $street
     * @return void
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }
    
    /**
     * Returns the zip
     *
     * @return string $zip
     */
    public function getZip()
    {
        return $this->zip;
    }
    
    /**
     * Sets the zip
     *
     * @param string $zip
     * @return void
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }
    
    /**
     * Returns the city
     *
     * @return string $city
     */
    public function getCity()
    {
        return $this->city;
    }
    
    /**
     * Sets the city
     *
     * @param string $city
     * @return void
     */
    public function setCity($city)
    {
        $this->city = $city;
    }
    
    /**
     * Returns the state
     *
     * @return string $state
     */
    public function getState()
    {
        return $this->state;
    }
    
    /**
     * Sets the state
     *
     * @param string $state
     * @return void
     */
    public function setState($state)
    {
        $this->state = $state;
    }
    
    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    /**
     * Returns the country
     *
     * @return int $country
     */
    public function getCountry()
    {
        return $this->country;
    }
    
    /**
     * Sets the country
     *
     * @param int $country
     * @return void
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }
    
    /**
     * Adds a Group
     *
     * @param \TYPO3\Lvaddress\Domain\Model\Group $group
     * @return void
     */
    public function addGroup(\TYPO3\Lvaddress\Domain\Model\Group $group)
    {
        $this->groups->attach($group);
    }
    
    /**
     * Removes a Group
     *
     * @param \TYPO3\Lvaddress\Domain\Model\Group $groupToRemove The Group to be removed
     * @return void
     */
    public function removeGroup(\TYPO3\Lvaddress\Domain\Model\Group $groupToRemove)
    {
        $this->groups->detach($groupToRemove);
    }
    
    /**
     * Returns the groups
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Lvaddress\Domain\Model\Group> $groups
     */
    public function getGroups()
    {
        return $this->groups;
    }
    
    /**
     * Sets the groups
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Lvaddress\Domain\Model\Group> $groups
     * @return void
     */
    public function setGroups(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $groups)
    {
        $this->groups = $groups;
    }

}