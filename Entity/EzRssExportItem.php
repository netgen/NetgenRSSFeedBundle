<?php

namespace Netgen\RssFeedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EzRssExportItem
 *
 * @ORM\Entity()
 * @ORM\Table(name="ezrss_export_item")
 */
class EzRssExportItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", options={"default"=0})
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", nullable=true, length=255)
     */
    private $category;

    /**
     * @var int
     *
     * @ORM\Column(name="class_id", type="integer", nullable=true, options={"default"=0})
     */
    private $classId;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", nullable=true, length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="enclosure", type="string", nullable=true, length=255)
     */
    private $enclosure;

    /**
     * @var int
     *
     * @ORM\Column(name="rssexport_id", type="integer", nullable=true, options={"default"=0})
     */
    private $rssExportId;

    /**
     * @var int
     *
     * @ORM\Column(name="source_node_id", type="integer", nullable=true, options={"default"=0})
     */
    private $sourceNodeId;

    /**
     * @var int
     *
     * @ORM\Column(name="subnodes", type="integer", nullable=false, options={"default"=0})
     */
    private $subNodes;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", nullable=true, length=255)
     */
    private $title;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return int
     */
    public function getClassId()
    {
        return $this->classId;
    }

    /**
     * @param int $classId
     */
    public function setClassId($classId)
    {
        $this->classId = $classId;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getEnclosure()
    {
        return $this->enclosure;
    }

    /**
     * @param string $enclosure
     */
    public function setEnclosure($enclosure)
    {
        $this->enclosure = $enclosure;
    }

    /**
     * @return int
     */
    public function getRssExportId()
    {
        return $this->rssExportId;
    }

    /**
     * @param int $rssExportId
     */
    public function setRssExportId($rssExportId)
    {
        $this->rssExportId = $rssExportId;
    }

    /**
     * @return int
     */
    public function getSourceNodeId()
    {
        return $this->sourceNodeId;
    }

    /**
     * @param int $sourceNodeId
     */
    public function setSourceNodeId($sourceNodeId)
    {
        $this->sourceNodeId = $sourceNodeId;
    }

    /**
     * @return int
     */
    public function getSubNodes()
    {
        return $this->subNodes;
    }

    /**
     * @param int $subNodes
     */
    public function setSubNodes($subNodes)
    {
        $this->subNodes = $subNodes;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
}
