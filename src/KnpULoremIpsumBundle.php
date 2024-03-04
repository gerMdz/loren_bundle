<?php

namespace GerMdz\LoremIpsumBundle;

use GerMdz\LoremIpsumBundle\DependencyInjection\KnpULoremIpsumExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class KnpULoremIpsumBundle extends Bundle
{
    public function getContainerExtension()
    {
        if (null === $this->extension){
            $this->extension = new KnpULoremIpsumExtension();
        }

        return $this->extension;
    }

}