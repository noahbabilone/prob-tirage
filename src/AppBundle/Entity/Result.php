<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Result
 *
 * @ORM\Table(name="result")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ResultRepository")
 */
class Result
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="codes_to_20k", type="string", length=255, nullable=true)
     */
    private $codesTo20k;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Game", inversedBy="results")
     */
    private $game;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Number", inversedBy="results")
     * */
    private $numberChance;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\GoodNumber", mappedBy="result",cascade={"persist", "remove"})
     */
    private $goodNumbers; 
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\ResultNumber", mappedBy="result",cascade={"persist", "remove"})
     */
    private $resultNumbers;

    /**
     * @var integer
     *
     * @ORM\Column(name="joker_plus", type="integer", length=255, nullable=true)
     */
    private $JOKERPLUS;
    /**
     * @var bool
     *
     * @ORM\Column(name="visible", type="boolean", nullable=true ,options={ "default":true })
     */
    private $visible;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->goodNumbers = new \Doctrine\Common\Collections\ArrayCollection();
        $this->resultNumbers = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Result
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
     * Set codesTo20k
     *
     * @param string $codesTo20k
     *
     * @return Result
     */
    public function setCodesTo20k($codesTo20k)
    {
        $this->codesTo20k = $codesTo20k;

        return $this;
    }

    /**
     * Get codesTo20k
     *
     * @return string
     */
    public function getCodesTo20k()
    {
        return $this->codesTo20k;
    }

    /**
     * Set jOKERPLUS
     *
     * @param integer $jOKERPLUS
     *
     * @return Result
     */
    public function setJOKERPLUS($jOKERPLUS)
    {
        $this->JOKERPLUS = $jOKERPLUS;

        return $this;
    }

    /**
     * Get jOKERPLUS
     *
     * @return integer
     */
    public function getJOKERPLUS()
    {
        return $this->JOKERPLUS;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     *
     * @return Result
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return boolean
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set game
     *
     * @param \AppBundle\Entity\Game $game
     *
     * @return Result
     */
    public function setGame(\AppBundle\Entity\Game $game = null)
    {
        $this->game = $game;

        return $this;
    }

    /**
     * Get game
     *
     * @return \AppBundle\Entity\Game
     */
    public function getGame()
    {
        return $this->game;
    }

    /**
     * Set numberChance
     *
     * @param \AppBundle\Entity\Number $numberChance
     *
     * @return Result
     */
    public function setNumberChance(\AppBundle\Entity\Number $numberChance = null)
    {
        $this->numberChance = $numberChance;

        return $this;
    }

    /**
     * Get numberChance
     *
     * @return \AppBundle\Entity\Number
     */
    public function getNumberChance()
    {
        return $this->numberChance;
    }

    /**
     * Add goodNumber
     *
     * @param \AppBundle\Entity\GoodNumber $goodNumber
     *
     * @return Result
     */
    public function addGoodNumber(\AppBundle\Entity\GoodNumber $goodNumber)
    {
        $this->goodNumbers[] = $goodNumber;

        return $this;
    }

    /**
     * Remove goodNumber
     *
     * @param \AppBundle\Entity\GoodNumber $goodNumber
     */
    public function removeGoodNumber(\AppBundle\Entity\GoodNumber $goodNumber)
    {
        $this->goodNumbers->removeElement($goodNumber);
    }

    /**
     * Get goodNumbers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGoodNumbers()
    {
        return $this->goodNumbers;
    }

    /**
     * Add resultNumber
     *
     * @param \AppBundle\Entity\ResultNumber $resultNumber
     *
     * @return Result
     */
    public function addResultNumber(\AppBundle\Entity\ResultNumber $resultNumber)
    {
        $this->resultNumbers[] = $resultNumber;

        return $this;
    }

    /**
     * Remove resultNumber
     *
     * @param \AppBundle\Entity\ResultNumber $resultNumber
     */
    public function removeResultNumber(\AppBundle\Entity\ResultNumber $resultNumber)
    {
        $this->resultNumbers->removeElement($resultNumber);
    }

    /**
     * Get resultNumbers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getResultNumbers()
    {
        return $this->resultNumbers;
    }
}
