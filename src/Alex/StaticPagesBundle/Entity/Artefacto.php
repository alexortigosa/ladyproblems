<?php

namespace Alex\StaticPagesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artefacto
 *
 * @ORM\Table(name="artefacto")
 * @ORM\Entity(repositoryClass="Alex\StaticPagesBundle\Repository\ArtefactoRepository")
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
     * @var float
     *
     * @ORM\Column(name="precioHora", type="float", nullable=true)
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
     * Set precioHora
     *
     * @param float $precioHora
     *
     * @return Artefacto
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

