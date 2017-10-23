<?php

namespace Netgen\RssFeedBundle\Core\CriteriaBuilder;

use eZ\Publish\API\Repository\LocationService;
use eZ\Publish\API\Repository\Values\Content\Query\Criterion;
use Netgen\RssFeedBundle\API\CriteriaBuilder\CriteriaBuilderInterface;
use Netgen\RssFeedBundle\API\Exception\InvalidCriteriaSpecified;
use Netgen\RssFeedBundle\Entity\EzRssExportItem;

class Builder implements CriteriaBuilderInterface
{
    /**
     * @var LocationService
     */
    protected $locationService;

    public function __construct(LocationService $locationService)
    {
        $this->locationService = $locationService;
    }

    /**
     * @param EzRssExportItem $item
     * @return mixed
     */
    public function build(EzRssExportItem $item)
    {
        $criteria = [];

        if (!empty($item->getClassId())) {
            $criteria[] = new Criterion\ContentTypeId($item->getClassId());
        }

        if (!empty($item->getSourceNodeId())) {
            $locationId = $item->getSourceNodeId();
            if (!empty($item->getSubNodes())) {
                $location = $this->locationService
                    ->loadLocation($locationId);

                $criteria[] = new Criterion\Subtree($location->pathString);
            } else {
                $criteria[] = new Criterion\ParentLocationId($locationId);
            }

        }

        if (count($criteria) == 0) {
            throw new InvalidCriteriaSpecifiedException();
        }

        return $criteria;
    }
}
