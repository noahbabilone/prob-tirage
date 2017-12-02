<?php

namespace AppBundle\Entity;

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
     *     * @ORM\ManyToOne(targetEntity="BackBundle\Entity\Result")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="result_id", referencedColumnName="id")
     * })
     */
    private $result;


    /**
     * @var Number
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="BackBundle\Entity\Number")
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
     * @ORM\Column(name="jocker", type="boolean")
     */
    private $jocker;
}

