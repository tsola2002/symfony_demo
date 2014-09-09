<?php

namespace Isaac\LibraryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Contact
 *
 * @ORM\Table(name="contacts")
 * @ORM\Entity(repositoryClass="Isaac\LibraryBundle\Entity\ContactRepository")
 */
class Contact
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="addressline1", type="string", length=255)
     */
    private $addressline1;

    /**
     * @var string
     *
     * @ORM\Column(name="addressline2", type="string", length=255)
     */
    private $addressline2;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="postcode", type="string", length=255)
     */
    private $postcode;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephonehome", type="integer")
     */
    private $telephonehome;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephonemobile", type="integer")
     */
    private $telephonemobile;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return Contact
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Contact
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set addressline1
     *
     * @param string $addressline1
     * @return Contact
     */
    public function setAddressline1($addressline1)
    {
        $this->addressline1 = $addressline1;

        return $this;
    }

    /**
     * Get addressline1
     *
     * @return string 
     */
    public function getAddressline1()
    {
        return $this->addressline1;
    }

    /**
     * Set addressline2
     *
     * @param string $addressline2
     * @return Contact
     */
    public function setAddressline2($addressline2)
    {
        $this->addressline2 = $addressline2;

        return $this;
    }

    /**
     * Get addressline2
     *
     * @return string 
     */
    public function getAddressline2()
    {
        return $this->addressline2;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Contact
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     * @return Contact
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string 
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set telephonehome
     *
     * @param integer $telephonehome
     * @return Contact
     */
    public function setTelephonehome($telephonehome)
    {
        $this->telephonehome = $telephonehome;

        return $this;
    }

    /**
     * Get telephonehome
     *
     * @return integer 
     */
    public function getTelephonehome()
    {
        return $this->telephonehome;
    }

    /**
     * Set telephonemobile
     *
     * @param integer $telephonemobile
     * @return Contact
     */
    public function setTelephonemobile($telephonemobile)
    {
        $this->telephonemobile = $telephonemobile;

        return $this;
    }

    /**
     * Get telephonemobile
     *
     * @return integer 
     */
    public function getTelephonemobile()
    {
        return $this->telephonemobile;
    }
}
