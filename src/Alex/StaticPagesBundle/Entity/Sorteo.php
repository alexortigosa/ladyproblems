<?php

namespace Alex\StaticPagesBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Sorteo
 *
 * @ORM\Table(name="sorteo")
 * @ORM\Entity(repositoryClass="Alex\StaticPagesBundle\Repository\SorteoRepository")
 */
class Sorteo
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
     * @ORM\Column(name="fechaInicio", type="datetime")
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaFin", type="datetime", nullable=true)
     */
    private $fechaFin;

    /**
     * One Product has Many Features.
     * @ORM\OneToMany(targetEntity="Consumicion", mappedBy="sorteo")
     */
    private $participantes;

    /**
     * Sorteo constructor.
     */
    public function __construct()
    {
        $this->participantes = new ArrayCollection();
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return Sorteo
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     *
     * @return Sorteo
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * @return mixed
     */
    public function getParticipantes()
    {
        return $this->participantes;
    }

    /**
     * @param mixed $participantes
     */
    public function setParticipantes($participantes)
    {
        $this->participantes = $participantes;
    }



    public function __toString()
    {
        return (string) $this->getId();
    }


}

