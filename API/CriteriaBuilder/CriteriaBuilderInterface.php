<?php

namespace Netgen\RssFeedBundle\API\CriteriaBuilder;

use eZ\Publish\API\Repository\Values\Content\Query\Criterion;
use Netgen\RssFeedBundle\Entity\EzRssExportItem;

interface CriteriaBuilderInterface
{
    /**
     * @param EzRssExportItem $item
     *
     * @return Criterion[]
     */
    public function build(EzRssExportItem $item);
}
