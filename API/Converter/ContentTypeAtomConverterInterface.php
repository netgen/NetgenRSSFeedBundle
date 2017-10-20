<?php

namespace Netgen\RssFeedBundle\API\Converter;

use eZ\Publish\API\Repository\Values\Content\Content;
use PicoFeed\Syndication\AtomItemBuilder;

interface ContentTypeAtomConverterInterface
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
     * @return AtomItemBuilder
     */
    public function convert(Content $content);
}
