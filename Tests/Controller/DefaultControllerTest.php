<?php

namespace Tecspro\ComunBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/slugify/index');

        $this->assertTrue($crawler->filter('html:contains("slugify")')->count() > 0);
    }
}