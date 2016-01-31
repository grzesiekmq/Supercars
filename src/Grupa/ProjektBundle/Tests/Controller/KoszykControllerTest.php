<?php

namespace Grupa\ProjektBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class KoszykControllerTest extends WebTestCase
{
    public function testPokazkoszyk()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Koszyk');
    }

}
