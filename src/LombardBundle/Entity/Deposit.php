<?php

namespace LombardBundle\Entity;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 * @ORM\Table()
 */
class Deposit {

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
     * @ORM\Column(type="date", nullable=false)
     *   
     * @Assert\Date()
     */
    private $date;
    
    /**
     * @ORM\Column(type="decimal", precision=8, scale=2, nullable=false)
     */
    private $inp_price;
    
    /**
     * @ORM\Column(type="decimal", precision=8, scale=2, nullable=false)
     */
    private $out_price;

    /**
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $deposit_term;
    
    /**
     * 
     * @ORM\ManyToOne(targetEntity="Status")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    protected $status;


    /**
     * 
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    protected $client;
    
    /**
     * 
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    protected $product;



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
     * Set date
     *
     * @param \DateTime $date
     * @return Deposit
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set inp_price
     *
     * @param string $inp_price
     * @return Deposit
     */
    public function setInpPrice($inp_price)
    {
        $this->inp_price = $inp_price;

        return $this;
    }

    /**
     * Get inp_price
     *
     * @return string 
     */
    public function getInpPrice()
    {
        return $this->inp_price;
    }
    
    /**
     * Set out_price
     *
     * @param string $out_price
     * @return Deposit
     */
    public function setOutPrice($out_price)
    {
        $this->out_price = $out_price;

        return $this;
    }

    /**
     * Get out_price
     *
     * @return string 
     */
    public function getOutPrice()
    {
        return $this->out_price;
    }

    /**
     * Set deposit_term
     *
     * @param string $depositTerm
     * @return Deposit
     */
    public function setDepositTerm($depositTerm)
    {
        $this->deposit_term = $depositTerm;

        return $this;
    }

    /**
     * Get deposit_term
     *
     * @return string 
     */
    public function getDepositTerm()
    {
        return $this->deposit_term;
    }
    

    /**
     * Set status
     *
     * @param \LombardBundle\Entity\Status $status
     * @return Deposit
     */
    public function setStatus(\LombardBundle\Entity\Status $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \LombardBundle\Entity\Status 
     */
    public function getStatus()
    {
        return $this->status;
    }
    
    /**
     * Set client
     *
     * @param \LombardBundle\Entity\Client $client
     * @return Deposit
     */
    public function setClient(\LombardBundle\Entity\Client $client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \LombardBundle\Entity\Client 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set product
     *
     * @param \LombardBundle\Entity\Product $product
     * @return Deposit
     */
    public function setProduct(\LombardBundle\Entity\Product $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \LombardBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }
}
