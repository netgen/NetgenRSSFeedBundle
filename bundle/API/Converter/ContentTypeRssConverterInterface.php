<?php

namespace Netgen\RssFeedBundle\API\Converter;

use eZ\Publish\API\Repository\Values\Content\Content;
use PicoFeed\Syndication\FeedBuilder;
use PicoFeed\Syndication\Rss20ItemBuilder;

interface ContentTypeRssConverterInterface
{
    /**
     * @param string $contentTypeIdentifier
     *
     * @return bool
     */
    public function accepts($contentTypeIdentifier);

    /**
     * @param Content $content
     *
     * @return Rss20ItemBuilder
     */
    public function convert(Content $content, FeedBuilder $builder);
}
