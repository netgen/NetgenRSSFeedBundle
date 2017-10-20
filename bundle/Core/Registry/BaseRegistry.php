<?php

namespace Netgen\RssFeedBundle\Core\Registry;

use eZ\Publish\API\Repository\Values\Content\Content;
use Netgen\RssFeedBundle\API\Converter\ContentTypeAtomConverterInterface;
use Netgen\RssFeedBundle\API\Converter\ContentTypeRssConverterInterface;
use Netgen\RssFeedBundle\API\Exception\NoAvailableConverterException;
use Netgen\RssFeedBundle\Core\ContentTypeResolver;
use PicoFeed\Syndication\FeedBuilder;

class BaseRegistry
{
    /**
     * @var ContentTypeRssConverterInterface[]|ContentTypeAtomConverterInterface[]
     */
    protected $converters;

    /**
     * @var ContentTypeResolver
     */
    protected $contentTypeResolver;

    public function __construct(ContentTypeResolver $contentTypeResolver)
    {
        $this->contentTypeResolver = $contentTypeResolver;
    }

    public function addConverter($converter, $priority = 1)
    {
        $this->converters[] = array(
            'converter' => $converter,
            'priority' => $priority,
        );
    }

    public function convert(Content $content, FeedBuilder $builder)
    {
        $contentType = $this->contentTypeResolver->getContentType($content);

        $this->prepareConverters();
        foreach($this->converters as $converter) {
            $converter = $converter['converter'];
            if ($converter->accepts($contentType->identifier)) {
                return $converter->convert($content, $builder);
            }
        }

        throw new NoAvailableConverterException();
    }

    protected function prepareConverters()
    {
        usort($this->converters, function ($one, $two) {
            if ($one['priority'] === $two['priority']) {
                return 0;
            }

            return ($one['priority'] > $two['priority']) ? -1 : 1;
        });
    }
}
