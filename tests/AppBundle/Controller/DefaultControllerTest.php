<?php

namespace Tests\AppBundle\Controller;

use AppBundle\Service\TirageService;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DependencyInjection\ContainerInterface;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('PROG TIRAGE', strtoupper($crawler->filter('h3.logo-default')->text()));
    }


    /*
        $this->assertTrue($stack);
        $this->assertFalse($stack);
        $this->assertEquals($stack);
        $this->assertNotEmpty($stack);
        $this->assertNotEmpty($stack);
        $this->assertNotEmpty($stack);
    */
    /**
     * @testCrawl
     */
    public function testCrawl()
    {
        $this->assertTrue(true);
        $this->assertFalse(false);

    }

    /*  public function testShowPost()
      {
          $client = static::createClient();
  
          $crawler = $client->request('GET', '/post/hello-world');
          $this->assertGreaterThan(0, $crawler->filter('html:contains("Hello World")')->count());
      }*/
}
