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
     * @var float
     *
     * @ORM\Column(name="precioHora", type="float")
     */
    private $precioHora;

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
    /**
     * Set precioHora
     *
     * @param float $precioHora
     *
     * @return Projecto
     */
    public function setPrecioHora($precioHora)
    {
        $this->precioHora = $precioHora;

        return $this;
    }

    /**
     * Get precioHora
     *
     * @return float
     */
    public function getPrecioHora()
    {
        return $this->precioHora;
    }
}

