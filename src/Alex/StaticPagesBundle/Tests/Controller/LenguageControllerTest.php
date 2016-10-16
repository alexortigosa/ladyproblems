<?php

namespace Alex\StaticPagesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LenguageControllerTest extends WebTestCase
{
    public function testSwitch()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/switch');
    }

}
