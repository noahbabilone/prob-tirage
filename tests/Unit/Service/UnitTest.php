<?php

namespace Tests\AppBundle\Controller;

use AppBundle\Service\TirageService;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DependencyInjection\ContainerInterface;

class UnitTest extends WebTestCase
{
    /**
     * @testCrawl
     */
    public function testCrawl()
    {
        $this->assertTrue(true);
        $this->assertFalse(false);

    }
    
}
