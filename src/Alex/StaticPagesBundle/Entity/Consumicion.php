<?php

namespace Alex\StaticPagesBundle\Entity;

use Alex\StaticPagesBundle\AlexStaticPagesBundle;
use Alex\StaticPagesBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;

/**
 * Consumicion
 *
 * @ORM\Table(name="consumicion")
 * @ORM\Entity(repositoryClass="Alex\StaticPagesBundle\Repository\ConsumicionRepository")
 */
class Consumicion
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
     * @ORM\Column(name="articulo", type="string", length=255)
     */
    private $articulo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var int
     *
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="usuario", referencedColumnName="id")
     */
    private $usuario;

    /**
     * @var int
     ** @ORM\ManyToOne(targetEntity="Sorteo")
     * @ORM\JoinColumn(name="sorteo", referencedColumnName="id")
     */
    private $sorteo;

    /**
     * @var int
     *
     * * @ORM\Column(name="ganador", type="integer")
     */
    private $ganador = 0;


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
     * Set articulo
     *
     * @param string $articulo
     *
     * @return Consumicion
     */
    public function setArticulo($articulo)
    {
        $this->articulo = $articulo;

        return $this;
    }

    /**
     * Get articulo
     *
     * @return string
     */
    public function getArticulo()
    {
        return $this->articulo;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Consumicion
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     *
     * @return Consumicion
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set sorteo
     *
     * @param integer $sorteo
     *
     * @return Consumicion
     */
    public function setSorteo($sorteo)
    {
        $this->sorteo = $sorteo;

        return $this;
    }

    /**
     * Get sorteo
     *
     * @return int
     */
    public function getSorteo()
    {
        return $this->sorteo;
    }

    /**
     * @return int
     */
    public function getGanador()
    {
        return $this->ganador;
    }

    /**
     * @param int $ganador
     */
    public function setGanador($ganador)
    {
        $this->ganador = $ganador;
    }


}

