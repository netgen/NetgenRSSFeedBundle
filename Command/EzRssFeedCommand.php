<?php

namespace Netgen\RssFeedBundle\Command;

use eZ\Publish\API\Repository\Values\Content\Query;
use Netgen\RssFeedBundle\Core\CriteriaBuilder\Builder;
use Netgen\RssFeedBundle\Entity\EzRssExport;
use Netgen\RssFeedBundle\Entity\EzRssExportItem;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use eZ\Publish\API\Repository\Values\Content\Query\Criterion;

class EzRssFeedCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this->setName("netgen:ezrss-export:info");
        $this->addArgument("export_name", InputArgument::REQUIRED, "RSS export name.");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $export = $input->getArgument("export_name");

        $export = $this->getContainer()->get("doctrine.orm.default_entity_manager")
            ->getRepository(EzRssExport::class)
            ->findOneBy([
                'accessUrl' => $export,
                'status' => 1
            ]);

        $exportObject = $export;

        $exports = $this->getContainer()->get("doctrine.orm.default_entity_manager")
            ->getRepository(EzRssExportItem::class)
            ->findBy([
                'rssExportId' => $export->getId(),
                'status' => 1,
            ]);

        /** @var Builder $builder */
        $builder = $this->getContainer()->get("netgen_rss_feed.core.criteria_builder");

        $criteria = [
            new Criterion\Visibility(Criterion\Visibility::VISIBLE),
        ];

        foreach ($exports as $export) {
            $criteria[] = new Criterion\LogicalOr($builder->build($export));
        }

        $query = new Query();
        $query->limit = $exportObject->getNumberOfObjects();
        $query->filter = new Criterion\LogicalAnd($criteria);

        $results = $this->getContainer()->get("ezpublish.api.service.search")
            ->findContent($query);


        foreach ($results->searchHits as $hit) {
            dump($hit->valueObject);
        }

    }
}
