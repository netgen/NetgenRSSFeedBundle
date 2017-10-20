<?php

namespace Netgen\RssFeedBundle\Controller;

use eZ\Publish\API\Repository\Values\Content\Query;
use eZ\Publish\API\Repository\Values\Content\Search\SearchHit;
use eZ\Publish\Core\MVC\Symfony\Controller\Controller;
use eZ\Publish\API\Repository\Values\Content\Query\Criterion;
use PicoFeed\Syndication\Rss20FeedBuilder;

class RssController extends Controller
{
    public function createFeedAction()
    {
        $criteria = [
            new Criterion\ContentTypeIdentifier(['blog_post']),
            new Criterion\Visibility(Criterion\Visibility::VISIBLE)
        ];

        $query = new Query();
        $query->filter = new Criterion\LogicalAnd($criteria);

        $result = $this->getRepository()
            ->getSearchService()
            ->findContent($query);

        dump($result);

        $contents = array_map(
            function(SearchHit $hit) {
                return $hit->valueObject;
            },
            $result->searchHits
        );

        $builder = Rss20FeedBuilder::create()
            ->withAuthor("Marekovski")
            ->withTitle("Moja titla")
            ->withDate(new \DateTime())
            ->withSiteUrl("www.google.com")
            ->withFeedUrl("www.google.com");

        $service = $this->container->get("netgen_rss_feed.service.rss");
        $builder = $service->createFeed($builder, $contents);

        dump($builder->build());

        return $this->render(
            'NetgenRssFeedBundle:Rss:create_feed.html.twig',
                array(
            // ...
            )
        );
    }

}
