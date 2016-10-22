<?php

namespace Alex\StaticPagesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proyecto
 *
 * @ORM\Table(name="proyecto")
 * @ORM\Entity(repositoryClass="Alex\StaticPagesBundle\Repository\ProyectoRepository")
 */
class Proyecto
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
     * @var float
     *
     * @ORM\Column(name="precioHora", type="float", nullable=true)
     */
    private $precioHora;

    /**
     * @var float
     *
     * @ORM\Column(name="precioEstimado", type="float", nullable=true)
     */
    private $precioEstimado;

    /**
     * @var float
     *
     * @ORM\Column(name="precioTotal", type="float", nullable=true)
     */
    private $precioTotal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaEntrega", type="date", nullable=true)
     */
    private $fechaEntrega;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="prevision", type="date", nullable=true)
     */
    private $prevision;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="prevision", type="date", nullable=true)
     */
    private $prevision;

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
     * Set precioHora
     *
     * @param float $precioHora
     *
     * @return Proyecto
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

    /**
     * Set precioEstimado
     *
     * @param float $precioEstimado
     *
     * @return Proyecto
     */
    public function setPrecioEstimado($precioEstimado)
    {
        $this->precioEstimado = $precioEstimado;

        return $this;
    }

    /**
     * Get precioEstimado
     *
     * @return float
     */
    public function getPrecioEstimado()
    {
        return $this->precioEstimado;
    }

    /**
     * Set precioTotal
     *
     * @param float $precioTotal
     *
     * @return Proyecto
     */
    public function setPrecioTotal($precioTotal)
    {
        $this->precioTotal = $precioTotal;

        return $this;
    }

    /**
     * Get precioTotal
     *
     * @return float
     */
    public function getPrecioTotal()
    {
        return $this->precioTotal;
    }

    /**
     * Set fechaEntrega
     *
     * @param \DateTime $fechaEntrega
     *
     * @return Proyecto
     */
    public function setFechaEntrega($fechaEntrega)
    {
        $this->fechaEntrega = $fechaEntrega;

        return $this;
    }

    /**
     * Get fechaEntrega
     *
     * @return \DateTime
     */
    public function getFechaEntrega()
    {
        return $this->fechaEntrega;
    }

    /**
     * Set prevision
     *
     * @param \DateTime $prevision
     *
     * @return Proyecto
     */
    public function setPrevision($prevision)
    {
        $this->prevision = $prevision;

        return $this;
    }

    /**
     * Get prevision
     *
     * @return \DateTime
     */
    public function getPrevision()
    {
        return $this->prevision;
    }
}

