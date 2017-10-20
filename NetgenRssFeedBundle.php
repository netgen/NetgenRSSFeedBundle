<?php

namespace Netgen\RssFeedBundle;

use Netgen\RssFeedBundle\DependencyInjection\Compiler\RssContentTypeConvertersPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class NetgenRssFeedBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new RssContentTypeConvertersPass());
    }
}
