<?php

namespace LombardBundle\Entity;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table()
 * @ORM\Entity
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class Client {

    use \Gedmo\Timestampable\Traits\TimestampableEntity,
        \Gedmo\Blameable\Traits\BlameableEntity,
        \Gedmo\SoftDeleteable\Traits\SoftDeleteableEntity;

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    private $fio;
    
    /**
     * @ORM\Column(type="string", length=8, nullable=false)
     */
    private $passport;
    
    /**
     * @ORM\Column(type="date", nullable=false)
     *   
     * @Assert\Date()
     */
    private $birthday;
    
    /**
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    private $adress;

    /**
     * @ORM\Column(type="string", length=12, nullable=false)
     */
    private $phone;
    
    /**
     * @ORM\Column(type="string", length=12, nullable=false)
     */
    private $idnumber;
    

    public function __toString() {
        return $this->fio;
    }
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
     * Set fio
     *
     * @param string $fio
     * @return Client
     */
    public function setFio($fio)
    {
        $this->fio = $fio;

        return $this;
    }

    /**
     * Get fio
     *
     * @return string 
     */
    public function getFio()
    {
        return $this->fio;
    }
    
    /**
     * Set passport
     *
     * @param string $passport
     * @return Client
     */
    public function setPassport($passport)
    {
        $this->passport = $passport;

        return $this;
    }

    /**
     * Get passport
     *
     * @return string 
     */
    public function getPassport()
    {
        return $this->passport;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return Client
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set adress
     *
     * @param string $adress
     * @return Client
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string 
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     * @return Client
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return integer 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set idnumber
     *
     * @param integer $idnumber
     * @return Client
     */
    public function setIdnumber($idnumber)
    {
        $this->idnumber = $idnumber;

        return $this;
    }

    /**
     * Get idnumber
     *
     * @return integer 
     */
    public function getIdnumber()
    {
        return $this->idnumber;
    }
}
