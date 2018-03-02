<?php

namespace AppBundle\Entity;

use Gedmo\Mapping\Annotation As Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * GoodNumber
 *
 * @ORM\Table(name="good_number")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GoodNumberRepository")
 */
class GoodNumber
{
    const FiveEGoodNumbAddNumbChange = '5 bons numéros + numéro chance';
    const FiveEGoodNumb = '5 bons numéros';
    const FourEGoodNumbAddNumbChange = '4 bons numéros + numéro chance';
    const FourEGoodNumb = '4 bons numéros';
    const ThreeGoodNumbAddNumbChange = '3 bons numéros + numéro chance';
    const ThreeGoodNumb= '3 bons numéros';    
    const TwoGoodNumbAddNumbChange = '2 bons numéros + numéro chance';
    const TwoGoodNumb= '2 bons numéros';
    const OneOrZeroGoodNumbAddNumbChange= '1 ou 0 bon numéro + numéro chance';
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="title", type="string",  length=255,nullable=true)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="good", type="integer", nullable=true)
     */
    private $good;
    
    /**
     * @var bool
     *
     * @ORM\Column(name="bonus", type="boolean", nullable=true)
     */
    private $bonus;
    /**
     * @var int
     *
     * @ORM\Column(name="count", type="integer", nullable=true)
     */
    private $count;

    /**
     * @var int
     *
     * @ORM\Column(name="lottery", type="integer", nullable=true)
     */
    private $lottery;

     /**
      * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Result", inversedBy="goodNumbers")
      */
    private $result;
    
    /**
     * @var \DateTime
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \DateTime
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column( type="datetime", nullable=true)
     */
    private $updated;

    

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
     * Set title
     *
     * @param string $title
     *
     * @return GoodNumber
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set good
     *
     * @param integer $good
     *
     * @return GoodNumber
     */
    public function setGood($good)
    {
        $this->good = $good;

        return $this;
    }

    /**
     * Get good
     *
     * @return integer
     */
    public function getGood()
    {
        return $this->good;
    }

    /**
     * Set bonus
     *
     * @param boolean $bonus
     *
     * @return GoodNumber
     */
    public function setBonus($bonus)
    {
        $this->bonus = $bonus;

        return $this;
    }

    /**
     * Get bonus
     *
     * @return boolean
     */
    public function getBonus()
    {
        return $this->bonus;
    }

    /**
     * Set count
     *
     * @param integer $count
     *
     * @return GoodNumber
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set lottery
     *
     * @param integer $lottery
     *
     * @return GoodNumber
     */
    public function setLottery($lottery)
    {
        $this->lottery = $lottery;

        return $this;
    }

    /**
     * Get lottery
     *
     * @return integer
     */
    public function getLottery()
    {
        return $this->lottery;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return GoodNumber
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return GoodNumber
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set result
     *
     * @param \AppBundle\Entity\Result $result
     *
     * @return GoodNumber
     */
    public function setResult(\AppBundle\Entity\Result $result = null)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return \AppBundle\Entity\Result
     */
    public function getResult()
    {
        return $this->result;
    }
}
