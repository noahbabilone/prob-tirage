<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Number
 *
 * @ORM\Table(name="number")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NumberRepository")
 */
class Number
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
     * @var int
     *
     * @ORM\Column(name="value", type="integer", nullable=true)
     */
    private $value;

    
}
