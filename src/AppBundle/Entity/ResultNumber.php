<?php

namespace AppBundle\Entity;

use Gedmo\Mapping\Annotation As Gedmo;
use Doctrine\ORM\Mapping as ORM;


/**
 * ResultNumber
 *
 * @ORM\Table(name="result_number")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ResultNumberRepository")
 */
class ResultNumber
{
    /**
     * @var Result
     * @ORM\Id
     *     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Result")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="result_id", referencedColumnName="id")
     * })
     */
    private $result;


    /**
     * @var Number
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Number")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="number_id", referencedColumnName="id")
     * })
     */
    private $number;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=true)
     */
    private $position;

    /**
     * @var bool
     *
     * @ORM\Column(name="bonus", type="boolean", nullable=true)
     */
    private $bonus;

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
     * @var bool
     *
     * @ORM\Column(name="visible", type="boolean", nullable=true ,options={ "default":true })
     */
    private $visible;

    /**
     * Set position
     *
     * @param integer $position
     *
     * @return ResultNumber
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set bonus
     *
     * @param boolean $bonus
     *
     * @return ResultNumber
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
     * Set created
     *
     * @param \DateTime $created
     *
     * @return ResultNumber
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
     * @return ResultNumber
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
     * Set visible
     *
     * @param boolean $visible
     *
     * @return ResultNumber
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
     * Set result
     *
     * @param \BackBundle\Entity\Result $result
     *
     * @return ResultNumber
     */
    public function setResult(\BackBundle\Entity\Result $result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return \BackBundle\Entity\Result
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set number
     *
     * @param \BackBundle\Entity\Number $number
     *
     * @return ResultNumber
     */
    public function setNumber(\BackBundle\Entity\Number $number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return \BackBundle\Entity\Number
     */
    public function getNumber()
    {
        return $this->number;
    }
}
