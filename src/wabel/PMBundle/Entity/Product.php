<?php

namespace wabel\PMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="wabel\PMBundle\Entity\ProductRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Product
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
        
    /**
     * @var integer
     * @ORM\Column(name="nblike", type="integer")
     * 
     */
    private $nblike;
    
    /**
     * @ORM\OneToMany(targetEntity="wabel\PMBundle\Entity\Likee", mappedBy="product")
     */
    private $likees;
    
    public function __construct(){
        
        $this->likees = new \Doctrine\Common\Collections\ArrayCollection();
        
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
     * Set name
     *
     * @param string $name
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    

    /**
     * Set nblike
     *
     * @param integer $nblike
     * @return Product
     */
    public function setNblike($nblike)
    {
        $this->nblike = $nblike;

        return $this;
    }

    /**
     * Get nblike
     *
     * @return integer 
     */
    public function getNblike()
    {
        return $this->nblike;
    }
    
    
    
    /**
     * Add likees
     *
     * @param \wabel\PMBundle\Entity\Likee $likees
     * @return Product
     */
    public function addLikee(\wabel\PMBundle\Entity\Likee $likees)
    {
        
        $this->likees[] = $likees;
        $likees->setProduct($this);

        return $this;
    }

    /**
     * Remove likees
     *
     * @param \wabel\PMBundle\Entity\Likee $likees
     */
    public function removeLikee(\wabel\PMBundle\Entity\Likee $likees)
    {
        $this->likees->removeElement($likees);
    }

    /**
     * Get likees
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLikees()
    {
        return $this->likees;
    }
}
