<?php

namespace Netgen\RssFeedBundle\Converters;

use eZ\Publish\API\Repository\Values\Content\Content;
use Netgen\RssFeedBundle\API\Converter\ContentTypeRssConverterInterface;
use PicoFeed\Syndication\FeedBuilder;
use PicoFeed\Syndication\Rss20ItemBuilder;

class BlogPostConverter implements ContentTypeRssConverterInterface
{
    /**
     * @inheritDoc
     */
    public function accepts($contentTypeIdentifier)
    {
        return $contentTypeIdentifier === 'blog_post';
    }

    /**
     * @inheritDoc
     */
    public function convert(Content $content, FeedBuilder $builder)
    {
        return Rss20ItemBuilder::create($builder)
            ->withAuthor("marek")
            ->withContent("Ovo je moj content")
            ->withPublishedDate(new \DateTime())
            ->withUrl("www.google.com");
    }
}
