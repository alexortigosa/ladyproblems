<?php
/**
 * Created by PhpStorm.
 * User: alexandreortigosa
 * Date: 15/12/2016
 * Time: 13:30
 */

namespace Alex\StaticPagesBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Alex\StaticPagesBundle\Entity\Sorteo;


class LoadSorteoData implements FixtureInterface
{


    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        // TODO: Implement load() method.
        $sorteo = new Sorteo();
        $sorteo->setFechaInicio(new \DateTime());

        $manager->persist($sorteo);
        $manager->flush();


    }
}