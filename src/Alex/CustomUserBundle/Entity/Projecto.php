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
     * @var float
     *
     * @ORM\Column(name="precioHora", type="float")
     */
    private $precioHora;


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

