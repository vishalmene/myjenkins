<?php

namespace MyJenkinsBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class JenkinsControllerTest extends WebTestCase
{
	public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/new');

        $this->assertContains('Hello World', $client->getResponse()->getContent());
    }
}
