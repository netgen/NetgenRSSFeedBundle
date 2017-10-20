<?php

namespace Netgen\RssFeedBundle\API;

use PicoFeed\Syndication\FeedBuilder;

interface FeedServiceInterface
{
    /**
     * @param FeedBuilder $builder
     * @param array $contents
     *
     * @return FeedBuilder
     */
    public function createFeed(FeedBuilder $builder, array $contents);
}
