<?php

namespace Netgen\RssFeedBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Reference;

class RssContentTypeConvertersPass implements CompilerPassInterface
{
    /**
     * @inheritDoc
     */
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition('netgen_rss_feed.registry.rss')) {
            return;
        }

        $registry = $container->getDefinition('netgen_rss_feed.registry.rss');

        foreach ($container->findTaggedServiceIds('netgen_rss_feed.converter.rss') as $id => $attributes) {
            foreach ($attributes as $attribute) {

                $priority = isset($attribute['priority']) ? $attribute['priority'] : 1;

//                if ($priority > Priority::MAX_PRIORITY) {
//                    throw new LogicException(
//                        "Service {$id} uses priority greater than allowed. " .
//                        'Priority must be lower than or equal to ' . Priority::MAX_PRIORITY . '.'
//                    );
//                }
//
//                if ($priority < Priority::MIN_PRIORITY) {
//                    throw new LogicException(
//                        "Service {$id} uses priority less than allowed. " .
//                        'Priority must be greater than or equal to ' . Priority::MIN_PRIORITY . '.'
//                    );
//                }

                $registry->addMethodCall(
                    'addConverter',
                    array(
                        new Reference($id),
                        $priority,
                    )
                );
            }
        }
    }
}
