<?php

namespace Alex\StaticPagesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Servicio
 *
 * @ORM\Table(name="servicio")
 * @ORM\Entity(repositoryClass="Alex\StaticPagesBundle\Repository\ServicioRepository")
 */
class Servicio
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
     * @ORM\Column(name="inicio", type="datetime")
     */
    private $inicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin", type="datetime")
     */
    private $fin;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="text", nullable=true)
     */
    private $comentario;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="usuariopeticion", referencedColumnName="id")
     */
    private $usuariopeticion;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="$usuariorealizacion", referencedColumnName="id")
     */
    private $usuariorealizacion;



    /**
     * @var int
     *
     * @ORM\Column(name="valoracion", type="string", length=255)
     * @ORM\OneToOne(targetEntity="Valoracion", mappedBy="servicio")
     */
    private $valoracion;


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
     * Set inicio
     *
     * @param \DateTime $inicio
     *
     * @return Servicio
     */
    public function setInicio($inicio)
    {
        $this->inicio = $inicio;

        return $this;
    }

    /**
     * Get inicio
     *
     * @return \DateTime
     */
    public function getInicio()
    {
        return $this->inicio;
    }

    /**
     * Set fin
     *
     * @param \DateTime $fin
     *
     * @return Servicio
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get fin
     *
     * @return \DateTime
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     *
     * @return Servicio
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set usuariopeticion
     *
     * @param string $usuariopeticion
     *
     * @return Servicio
     */
    public function setUsuariopeticion($usuariopeticion)
    {
        $this->usuariopeticion = $usuariopeticion;

        return $this;
    }

    /**
     * Get usuariopeticion
     *
     * @return string
     */
    public function getUsuariopeticion()
    {
        return $this->usuariopeticion;
    }

    /**
     * Set usuariorealizacion
     *
     * @param string $usuariorealizacion
     *
     * @return Servicio
     */
    public function setUsuariorealizacion($usuariorealizacion)
    {
        $this->usuariorealizacion = $usuariorealizacion;

        return $this;
    }

    /**
     * Get usuariorealizacion
     *
     * @return string
     */
    public function getUsuariorealizacion()
    {
        return $this->usuariorealizacion;
    }

    /**
     * @return string
     */
    public function getValoracion()
    {
        return $this->valoracion;
    }

    /**
     * @param string $valoracion
     */
    public function setValoracion($valoracion)
    {
        $this->valoracion = $valoracion;
    }



}

