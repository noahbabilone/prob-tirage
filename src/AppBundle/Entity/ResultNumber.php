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
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Result
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Result", inversedBy="resultNumbers")
     */
    private $result;

    /**
     * @var Number
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Number")
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
     * @ORM\Column(name="bonus", type="boolean", nullable=true,options={ "default":false })
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

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
     * Set result
     *
     * @param \AppBundle\Entity\Result $result
     *
     * @return ResultNumber
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

    /**
     * Set number
     *
     * @param \AppBundle\Entity\Number $number
     *
     * @return ResultNumber
     */
    public function setNumber(\AppBundle\Entity\Number $number = null)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return \AppBundle\Entity\Number
     */
    public function getNumber()
    {
        return $this->number;
    }
}
