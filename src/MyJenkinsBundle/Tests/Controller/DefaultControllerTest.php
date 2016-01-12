<?php

namespace MyJenkinsBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hello');

        $this->assertContains('Hello World', $client->getResponse()->getContent());
    }
}
