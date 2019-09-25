<?php

namespace App\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomeTest extends WebTestCase
{
    public function testListagemInicial()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertSelectorTextContains('html h1.title', 'Meus Jogos');
        $this->assertEquals(3, $crawler->filter('ul > li')->count());
        $this->assertEquals('Super Mario World - Novo', $crawler->filter('ul > li')->first()->text());
    }
}
