<?php

namespace App\Tests\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProductControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private ?ProductRepository $repo;

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repo = static::getContainer()->get(ProductRepository::class);
    }

    public function testIndex()
    {
        $this->client->request('GET', '/');
        $this->assertResponseStatusCodeSame(200, 'Test products status 200');
        $this->assertIsArray($this->repo->findAll());
    }
}