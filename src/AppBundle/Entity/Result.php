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
     * @var string
     *
     * @ORM\Column(name="game", type="string", length=255, nullable=true)
     */
    private $game;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\GoodNumber", mappedBy="$result",cascade={"persist", "remove"})
     */
    private $goodNumbers;


    /**
     * @var string
     *
     * @ORM\Column(name="joker_plus", type="string", length=255, nullable=true)
     */
    private $JOKERPLUS;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->goodNumbers = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set game
     *
     * @param string $game
     *
     * @return Result
     */
    public function setGame($game)
    {
        $this->game = $game;

        return $this;
    }

    /**
     * Get game
     *
     * @return string
     */
    public function getGame()
    {
        return $this->game;
    }

    /**
     * Set jOKERPLUS
     *
     * @param string $jOKERPLUS
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
     * @return string
     */
    public function getJOKERPLUS()
    {
        return $this->JOKERPLUS;
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
}
