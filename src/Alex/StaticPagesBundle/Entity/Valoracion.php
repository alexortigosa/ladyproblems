<?php

namespace Alex\StaticPagesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Valoracion
 *
 * @ORM\Table(name="valoracion")
 * @ORM\Entity(repositoryClass="Alex\StaticPagesBundle\Repository\ValoracionRepository")
 */
class Valoracion
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
     * @ORM\Column(name="valoracionR", type="integer", nullable=true)
     */
    private $valoracionR;

    /**
     * @var int
     *
     * @ORM\Column(name="valoracionN", type="integer", nullable=true)
     */
    private $valoracionN;

    /**
     * @var string
     *
     * @ORM\Column(name="comentarioR", type="text", nullable=true)
     */
    private $comentarioR;

    /**
     * @var string
     *
     * @ORM\Column(name="comentarioN", type="text", nullable=true)
     */
    private $comentarioN;

    /**
     * @var int
     *
     * @ORM\OneToOne(targetEntity="Servicio", inversedBy="valoracion")
     * @ORM\JoinColumn(name="servicio_id", referencedColumnName="id")
     */
    private $servicio;


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
     * Set valoracionR
     *
     * @param integer $valoracionR
     *
     * @return Valoracion
     */
    public function setValoracionR($valoracionR)
    {
        $this->valoracionR = $valoracionR;

        return $this;
    }

    /**
     * Get valoracionR
     *
     * @return int
     */
    public function getValoracionR()
    {
        return $this->valoracionR;
    }

    /**
     * Set valoracionN
     *
     * @param integer $valoracionN
     *
     * @return Valoracion
     */
    public function setValoracionN($valoracionN)
    {
        $this->valoracionN = $valoracionN;

        return $this;
    }

    /**
     * Get valoracionN
     *
     * @return int
     */
    public function getValoracionN()
    {
        return $this->valoracionN;
    }

    /**
     * Set comentarioR
     *
     * @param string $comentarioR
     *
     * @return Valoracion
     */
    public function setComentarioR($comentarioR)
    {
        $this->comentarioR = $comentarioR;

        return $this;
    }

    /**
     * Get comentarioR
     *
     * @return string
     */
    public function getComentarioR()
    {
        return $this->comentarioR;
    }

    /**
     * Set comentarioN
     *
     * @param string $comentarioN
     *
     * @return Valoracion
     */
    public function setComentarioN($comentarioN)
    {
        $this->comentarioN = $comentarioN;

        return $this;
    }

    /**
     * Get comentarioN
     *
     * @return string
     */
    public function getComentarioN()
    {
        return $this->comentarioN;
    }

    /**
     * @return int
     */
    public function getServicio()
    {
        return $this->servicio;
    }

    /**
     * @param int $servicio
     */
    public function setServicio($servicio)
    {
        $this->servicio = $servicio;
    }


}

