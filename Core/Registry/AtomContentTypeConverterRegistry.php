<?php

namespace Netgen\RssFeedBundle\Core\Registry;

use Netgen\RssFeedBundle\API\Converter\ContentTypeAtomConverterInterface;

class AtomContentTypeConverterRegistry extends BaseRegistry
{
    public function addConverter(ContentTypeAtomConverterInterface $converter, $priority = 1)
    {
        parent::addConverter($converter, $priority);
    }
}
