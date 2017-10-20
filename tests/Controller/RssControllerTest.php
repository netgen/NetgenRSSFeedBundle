<?php

namespace Netgen\RssFeedBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RssControllerTest extends WebTestCase
{
    public function testCreatefeed()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/netgen/rss-feed');
    }

}
