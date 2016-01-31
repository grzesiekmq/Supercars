<?php

namespace Grupa\ProjektBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ZamowieniaControllerTest extends WebTestCase
{
    public function testShowzamowienia()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Zamowienia');
    }

}
