<?php

namespace Netgen\RssFeedBundle\Core;

use eZ\Publish\API\Repository\ContentTypeService;
use eZ\Publish\API\Repository\Values\Content\Content;
use eZ\Publish\API\Repository\Values\ContentType\ContentType;

class ContentTypeResolver
{
    /**
     * @var ContentTypeService
     */
    protected $contentTypeService;

    /**
     * ContentTypeResolver constructor.
     *
     * @param ContentTypeService $contentTypeService
     */
    public function __construct(ContentTypeService $contentTypeService)
    {
        $this->contentTypeService = $contentTypeService;
    }

    /**
     * @param Content $content
     *
     * @return ContentType
     */
    public function getContentType(Content $content)
    {
        return $this->contentTypeService->loadContentType($content->contentInfo->contentTypeId);
    }
}
