<?php

namespace GerMdz\LoremIpsumBundle\Tests;

use GerMdz\LoremIpsumBundle\KnpUIpsum;
use GerMdz\LoremIpsumBundle\KnpULoremIpsumBundle;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

class FuncionalTest extends TestCase
{
    public function testServiceWiring()
    {
        $kernel = new KnpULorenIpsumTestingKernel('test', true);
        $kernel->boot();
        $container = $kernel->getContainer();

        $ipsum = $container->get('knpu_lorem_ipsum.knpi_ipsum');
        $this->assertInstanceOf(KnpUIpsum::class, $ipsum);

        $this->assertIsString($ipsum->getParagraphs());
    }
}

class KnpULorenIpsumTestingKernel extends Kernel
{

    public function registerBundles()
    {
        return [
            new KnpULoremIpsumBundle()
        ];
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        // TODO: Implement registerContainerConfiguration() method.
    }
}