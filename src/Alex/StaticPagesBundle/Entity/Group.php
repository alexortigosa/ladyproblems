<?php
/**
 * Created by PhpStorm.
 * User: alexandreortigosa
 * Date: 18/12/2016
 * Time: 17:35
 */

namespace Alex\StaticPagesBundle\Entity;

use FOS\UserBundle\Model\Group as BaseGroup;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="group")
 */
class Group extends BaseGroup
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}