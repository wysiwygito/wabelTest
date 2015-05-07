<?php

namespace wabel\PMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Likee
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="wabel\PMBundle\Entity\LikeeRepository")
 * 
 * 
 */
class Likee
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
     *
     * @ORM\ManyToOne(targetEntity="wabel\PMBundle\Entity\Product", inversedBy="likees")
     * @ORM\JoinColumn
     */
    private $product;
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
     * Set product
     *
     * @param \wabel\PMBundle\Entity\Product $product
     * @return Likee
     */
    public function setProduct(\wabel\PMBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \wabel\PMBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }
    
   
}
