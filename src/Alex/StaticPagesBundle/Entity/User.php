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
     * @ORM\Column(name="twitname", type="string", length=255)
     */
    protected $twitname;

    /**
     * @ORM\ManyToMany(targetEntity="Alex\StaticPagesBundle\Entity\Group")
     * @ORM\JoinTable(name="user_user_group",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     * )
     */
    protected $groups;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * @return string
     */
    public function getTwitname()
    {
        return $this->twitname;
    }

    /**
     * @param string $twitname
     */
    public function setTwitname($twitname)
    {
        $this->twitname = $twitname;
    }

    /**
     * @return mixed
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @param mixed $groups
     */
    public function setGroups($groups)
    {
        $this->groups = $groups;
    }




}