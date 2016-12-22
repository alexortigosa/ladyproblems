<?php

namespace Alex\StaticPagesBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Alex\StaticPagesBundle\DependencyInjection\AlexStaticPagesExtension as CustomExtensionClass;


class AlexStaticPagesBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new CustomExtensionClass();
    }
}
