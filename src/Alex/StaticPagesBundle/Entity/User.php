<?php
/**
 * Created by PhpStorm.
 * User: alexandre
 * Date: 17/10/16
 * Time: 11:34
 */

namespace Alex\StaticPagesBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends  BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**

     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=255)
     */
    protected $sexo;

    /**
     * @ORM\ManyToMany(targetEntity="Alex\StaticPagesBundle\Entity\Group")
     * @ORM\JoinTable(name="user_user_group",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     * )
     */
    protected $groups;

    /**

     * @var int
     *
     * @ORM\Column(name="edad", type="integer")
     */
    protected $edad;

    /**

     * @var int
     *
     * @ORM\Column(name="numhijos", type="integer")
     */
    protected $numhijos;

    /**

     * @var int
     *
     * @ORM\Column(name="tiempo", type="integer")
     */
    protected $tiempo;



    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param string $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @return int
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param int $edad
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    /**
     * @return int
     */
    public function getNumhijos()
    {
        return $this->numhijos;
    }

    /**
     * @param int $numhijos
     */
    public function setNumhijos($numhijos)
    {
        $this->numhijos = $numhijos;
    }

    /**
     * @return int
     */
    public function getTiempo()
    {
        return $this->tiempo;
    }

    /**
     * @param int $tiempo
     */
    public function setTiempo($tiempo)
    {
        $this->tiempo = $tiempo;
    }







}