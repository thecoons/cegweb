<?php

namespace CEG\ApplicationBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    public function testGetuser()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/getUser');
    }

}
