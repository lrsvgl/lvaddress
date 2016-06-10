<?php

namespace TYPO3\Lvaddress\Domain\Model;

/**
 * Countries
 */
class Countries extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

    /**
     * uid
     *
     * @var string
     */
    protected $uid = '';
    

    /**
     * cnShortEn
     *
     * @var string
     */
    protected $cnShortEn = '';
    
    /**
     * iso2
     *
     * @var string
     */
    protected $iso2 = '';

    /**
     * cnParentTerritoryUid
     *
     * @var string
     */
    protected $cnParentTerritoryUid = '';

    /**
     * Returns the uid
     *
     * @return string $uid
     */
    public function getUid() {
        return $this->uid;
    }

    /**
     * Sets the uid
     *
     * @param string $uid
     * @return void
     */
    public function setUid($uid) {
        $this->uid = $uid;
    }
    
    /**
     * Returns the cnshorten
     *
     * @return string $cnshorten
     */
    public function getCnShortEn() {
        return $this->cnShortEn;
    }

    /**
     * Sets the cnshorten
     *
     * @param string $cnShortEn
     * @return void
     */
    public function setCnShortEn($cnShortEn) {
        $this->cnShortEn = $cnShortEn;
    }
    
    /**
     * Returns the iso2
     *
     * @return string $iso2
     */
    public function getIso2() {
        return $this->iso2;
    }

    /**
     * Sets the iso
     *
     * @param string $iso2
     * @return void
     */
    public function setIso2($iso2) {
        $this->iso2 = $iso2;
    }

    /**
     * Returns the cnParentTerritoryUid
     *
     * @return string $getCnParentTerritoryUid
     */
    public function getCnParentTerritoryUid() {
        return $this->cnParentTerritoryUid;
    }

    /**
     * Sets the cnParentTerritoryUid
     *
     * @param string $getCnParentTerritoryUid
     * @return void
     */
    public function setCnparentterritoryuid($getCnParentTerritoryUid) {
        $this->getCnParentTerritoryUid = $getCnParentTerritoryUid;
    }

}
