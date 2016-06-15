<?php
/**
 * Created by PhpStorm.
 * User: Nuwan Rathnayaka
 * Date: 6/12/2016
 * Time: 9:23 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="account")
 */
class Account
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     *
     */
    private $userId;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $profilePic;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $coverPic;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $category;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $businessName;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $businessVision;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $telephoneNumber;



    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }
    public function setUserId($userId){
        $this->userId=$userId;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Account
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set profilePic
     *
     * @param string $profilePic
     * @return Account
     */
    public function setProfilePic($profilePic)
    {
        $this->profilePic = $profilePic;

        return $this;
    }

    /**
     * Get profilePic
     *
     * @return string 
     */
    public function getProfilePic()
    {
        return $this->profilePic;
    }

    /**
     * Set coverPic
     *
     * @param string $coverPic
     * @return Account
     */
    public function setCoverPic($coverPic)
    {
        $this->coverPic = $coverPic;

        return $this;
    }

    /**
     * Get coverPic
     *
     * @return string 
     */
    public function getCoverPic()
    {
        return $this->coverPic;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return Account
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set businessName
     *
     * @param string $businessName
     * @return Account
     */
    public function setBusinessName($businessName)
    {
        $this->businessName = $businessName;

        return $this;
    }

    /**
     * Get businessName
     *
     * @return string 
     */
    public function getBusinessName()
    {
        return $this->businessName;
    }

    /**
     * Set businessVision
     *
     * @param string $businessVision
     * @return Account
     */
    public function setBusinessVision($businessVision)
    {
        $this->businessVision = $businessVision;

        return $this;
    }

    /**
     * Get businessVision
     *
     * @return string 
     */
    public function getBusinessVision()
    {
        return $this->businessVision;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Account
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set telephoneNumber
     *
     * @param string $telephoneNumber
     * @return Account
     */
    public function setTelephoneNumber($telephoneNumber)
    {
        $this->telephoneNumber = $telephoneNumber;

        return $this;
    }

    /**
     * Get telephoneNumber
     *
     * @return string 
     */
    public function getTelephoneNumber()
    {
        return $this->telephoneNumber;
    }
}
