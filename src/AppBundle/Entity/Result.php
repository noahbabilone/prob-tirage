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
     * @ORM\Column(name="date", type="datetime", unique=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="game", type="string", length=255)
     */
    private $game;
    
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Number", mappedBy="restaurant",cascade={"persist", "remove"})
     */
    private $numbers;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->numbers = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add number
     *
     * @param \AppBundle\Entity\Number $number
     *
     * @return Result
     */
    public function addNumber(\AppBundle\Entity\Number $number)
    {
        $this->numbers[] = $number;

        return $this;
    }

    /**
     * Remove number
     *
     * @param \AppBundle\Entity\Number $number
     */
    public function removeNumber(\AppBundle\Entity\Number $number)
    {
        $this->numbers->removeElement($number);
    }

    /**
     * Get numbers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNumbers()
    {
        return $this->numbers;
    }
}
