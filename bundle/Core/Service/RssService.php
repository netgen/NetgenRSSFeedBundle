<?php

namespace Netgen\RssFeedBundle\Core\Service;

use eZ\Publish\API\Repository\Values\Content\Content;
use Netgen\RssFeedBundle\API\FeedServiceInterface;
use Netgen\RssFeedBundle\Core\Registry\RssContentTypeConverterRegistry;
use PicoFeed\Syndication\FeedBuilder;

class RssService implements FeedServiceInterface
{
    /**
     * @var RssContentTypeConverterRegistry
     */
    protected $registry;

    public function __construct(RssContentTypeConverterRegistry $registry)
    {
        $this->registry = $registry;
    }

    /**
     * @inheritDoc
     */
    public function createFeed(FeedBuilder $builder, array $contents)
    {
        /** @var Content $content */
        foreach ($contents as $content) {
            $builder->withItem(
                $this->registry->convert($content, $builder)
            );
        }

        return $builder;
    }
}
