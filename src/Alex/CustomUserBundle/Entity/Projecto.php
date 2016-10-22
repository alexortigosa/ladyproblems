<?php

namespace Alex\CustomUserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projecto
 *
 * @ORM\Table(name="projecto")
 * @ORM\Entity(repositoryClass="Alex\CustomUserBundle\Repository\ProjectoRepository")
 */
class Projecto
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
     * @ORM\Column(name="precioestimado", type="float")
     */
    private $precioestimado;

    /**
     * @var float
     *
     * @ORM\Column(name="precioTotal", type="float", nullable=true)
     */
    private $precioTotal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaentrega", type="datetime", nullable=true)
     */
    private $fechaentrega;




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
     * Set precioestimado
     *
     * @param float $precioestimado
     *
     * @return Projecto
     */
    public function setPrecioestimado($precioestimado)
    {
        $this->precioestimado = $precioestimado;

        return $this;
    }

    /**
     * Get precioestimado
     *
     * @return float
     */
    public function getPrecioestimado()
    {
        return $this->precioestimado;
    }

    /**
     * Set precioTotal
     *
     * @param float $precioTotal
     *
     * @return Projecto
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

}

