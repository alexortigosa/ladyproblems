<?php

namespace Alex\CustomUserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artefacto
 *
 * @ORM\Table(name="artefacto")
 * @ORM\Entity(repositoryClass="Alex\CustomUserBundle\Repository\ArtefactoRepository")
 */
class Artefacto
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
     * @var string
     *
     * @ORM\Column(name="prevision", type="decimal", precision=2, scale=0, nullable=true)
     */
    private $prevision;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaentrega", type="datetime", nullable=true)
     */
    private $fechaentrega;

    /**
     * @var string
     *
     * @ORM\Column(name="empleado", type="string", length=255, nullable=true)
     */
    private $empleado;


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
     * Set prevision
     *
     * @param string $prevision
     *
     * @return Artefacto
     */
    public function setPrevision($prevision)
    {
        $this->prevision = $prevision;

        return $this;
    }

    /**
     * Get prevision
     *
     * @return string
     */
    public function getPrevision()
    {
        return $this->prevision;
    }

    /**
     * Set fechaentrega
     *
     * @param \DateTime $fechaentrega
     *
     * @return Artefacto
     */
    public function setFechaentrega($fechaentrega)
    {
        $this->fechaentrega = $fechaentrega;

        return $this;
    }

    /**
     * Get fechaentrega
     *
     * @return \DateTime
     */
    public function getFechaentrega()
    {
        return $this->fechaentrega;
    }

    /**
     * Set empleado
     *
     * @param string $empleado
     *
     * @return Artefacto
     */
    public function setEmpleado($empleado)
    {
        $this->empleado = $empleado;

        return $this;
    }

    /**
     * Get empleado
     *
     * @return string
     */
    public function getEmpleado()
    {
        return $this->empleado;
    }
}

