<?php

namespace SM\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductGroup
 *
 * @ORM\Table(name="mtx_productgroup")
 * @ORM\Entity(repositoryClass="SM\Bundle\AdminBundle\Repository\ProductGroupRepository")
 * @ORM\HasLifecycleCallbacks
 */
class ProductGroup {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Branch")
     */
    private $branch;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $created;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $updated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $created_at;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updated_at;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="ProductGroupLanguage", mappedBy="productgroup", cascade={"all"})
     */
    protected $productgroup_languages;

    /**
     * @var Language
     */
    private $language;

    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue() {
        if (!$this->getCreatedAt()) {
            $this->created_at = new \DateTime();
            $this->updated_at = new \DateTime();
        }
    }

    public function getCurrentLanguage() {
        $objLanguages = $this->productgroup_languages->toArray();
        if (is_array($objLanguages)) {
            if (null !== $this->language) {
                foreach ($objLanguages as $oLanguage) {
                    if ($oLanguage->getLanguage()->getId() == $this->language->getId()) {
                        return $oLanguage;
                    }
                }
            }
        }

        return null;
    }

    public function hasLanguage(Language $language) {
        $result = false;
        if (count($this->productgroup_languages->toArray()) > 0) {
            foreach ($this->productgroup_languages as $plTemp) {
                if ($language->getId() == $plTemp->getLanguage()->getId()) {
                    $result = true;
                    break;
                }
            }
        }

        return $result;
    }

    public function __toString() {
        $objLanguages = $this->productgroup_languages->toArray();
        if (is_array($objLanguages)) {
            if (isset($objLanguages[0])) {
                return $objLanguages[0]->getName();
            }
        }
        return '';
    }

    /**
     * Set Language
     *
     * @param \SM\Bundle\AdminBundle\Entity\Language $language
     */
    public function setLanguage(Language $language) {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return \SM\Bundle\AdminBundle\Entity\Language
     */
    public function getLanguage() {
        return $this->language;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->productgroup_languages = new \Doctrine\Common\Collections\ArrayCollection();
        $this->language = null;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return ProductGroup
     */
    public function setStatus($status) {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return ProductGroup
     */
    public function setCreatedAt($createdAt) {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt() {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return ProductGroup
     */
    public function setUpdatedAt($updatedAt) {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt() {
        return $this->updated_at;
    }

    /**
     * Set branch
     *
     * @param \SM\Bundle\AdminBundle\Entity\Branch $branch
     * @return ProductGroup
     */
    public function setBranch(\SM\Bundle\AdminBundle\Entity\Branch $branch = null) {
        $this->branch = $branch;

        return $this;
    }

    /**
     * Get branch
     *
     * @return \SM\Bundle\AdminBundle\Entity\Branch 
     */
    public function getBranch() {
        return $this->branch;
    }

    /**
     * Set created
     *
     * @param \SM\Bundle\AdminBundle\Entity\User $created
     * @return ProductGroup
     */
    public function setCreated(\SM\Bundle\AdminBundle\Entity\User $created = null) {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \SM\Bundle\AdminBundle\Entity\User 
     */
    public function getCreated() {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \SM\Bundle\AdminBundle\Entity\User $updated
     * @return ProductGroup
     */
    public function setUpdated(\SM\Bundle\AdminBundle\Entity\User $updated = null) {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \SM\Bundle\AdminBundle\Entity\User 
     */
    public function getUpdated() {
        return $this->updated;
    }

    /**
     * Add productgroup_languages
     *
     * @param \SM\Bundle\AdminBundle\Entity\ProductGroupLanguage $productgroupLanguages
     * @return ProductGroup
     */
    public function addProductgroupLanguage(\SM\Bundle\AdminBundle\Entity\ProductGroupLanguage $productgroupLanguages) {
        $this->productgroup_languages[] = $productgroupLanguages;

        return $this;
    }

    /**
     * Remove productgroup_languages
     *
     * @param \SM\Bundle\AdminBundle\Entity\ProductGroupLanguage $productgroupLanguages
     */
    public function removeProductgroupLanguage(\SM\Bundle\AdminBundle\Entity\ProductGroupLanguage $productgroupLanguages) {
        $this->productgroup_languages->removeElement($productgroupLanguages);
    }

    /**
     * Get productgroup_languages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProductgroupLanguages() {
        return $this->productgroup_languages;
    }

}