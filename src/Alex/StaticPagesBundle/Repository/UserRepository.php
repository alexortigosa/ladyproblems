<?php
/**
 * Created by PhpStorm.
 * User: alexandreortigosa
 * Date: 15/12/2016
 * Time: 21:17
 */

namespace Alex\StaticPagesBundle\Repository;


use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    public function existthistweetuser($username)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT u FROM AlexStaticPagesBundle:User u
                  ORDER  DESC'
            )
            ->getResult();
    }

}