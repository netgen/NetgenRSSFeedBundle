<?php

namespace Netgen\RssFeedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EzRssExport
 *
 * @ORM\Entity()
 * @ORM\Table(name="ezrss_export")
 */
class EzRssExport
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
     * @ORM\Column(name="access_url", type="string", nullable=true, length=255)
     */
    private $accessUrl;

    /**
     * @var int
     *
     * @ORM\Column(name="active", type="integer", nullable=true, options={"default"=0})
     */
    private $active;

    /**
     * @var int
     *
     * @ORM\Column(name="created", type="integer", nullable=true, options={"default"=0})
     */
    private $created;

    /**
     * @var int
     *
     * @ORM\Column(name="creator_id", type="integer", nullable=true, options={"default"=0})
     */
    private $creatorId;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", nullable=true)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="image_id", type="integer", nullable=true, options={"default"=0})
     */
    private $imageId;

    /**
     * @var int
     *
     * @ORM\Column(name="main_node_only", type="integer", nullable=false, options={"default"=0})
     */
    private $mainNodeOnly;

    /**
     * @var int
     *
     * @ORM\Column(name="modified", type="integer", nullable=true, options={"default"=0})
     */
    private $modified;

    /**
     * @var int
     *
     * @ORM\Column(name="modifier_id", type="integer", nullable=true, options={"default"=0})
     */
    private $modifierId;

    /**
     * @var int
     *
     * @ORM\Column(name="node_id", type="integer", nullable=true, options={"default"=0})
     */
    private $nodeId;

    /**
     * @var int
     *
     * @ORM\Column(name="number_of_objects", type="integer", nullable=false, options={"default"=0})
     */
    private $numberOfObjects;

    /**
     * @var string
     *
     * @ORM\Column(name="rss_version", type="string", nullable=true)
     */
    private $rssVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="site_access", type="string", nullable=true)
     */
    private $siteAccess;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", nullable=true)
     */
    private $url;

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
    public function getAccessUrl()
    {
        return $this->accessUrl;
    }

    /**
     * @param string $accessUrl
     */
    public function setAccessUrl($accessUrl)
    {
        $this->accessUrl = $accessUrl;
    }

    /**
     * @return int
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param int $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @return int
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param int $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return int
     */
    public function getCreatorId()
    {
        return $this->creatorId;
    }

    /**
     * @param int $creatorId
     */
    public function setCreatorId($creatorId)
    {
        $this->creatorId = $creatorId;
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
     * @return int
     */
    public function getImageId()
    {
        return $this->imageId;
    }

    /**
     * @param int $imageId
     */
    public function setImageId($imageId)
    {
        $this->imageId = $imageId;
    }

    /**
     * @return int
     */
    public function getMainNodeOnly()
    {
        return $this->mainNodeOnly;
    }

    /**
     * @param int $mainNodeOnly
     */
    public function setMainNodeOnly($mainNodeOnly)
    {
        $this->mainNodeOnly = $mainNodeOnly;
    }

    /**
     * @return int
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * @param int $modified
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    }

    /**
     * @return int
     */
    public function getModifierId()
    {
        return $this->modifierId;
    }

    /**
     * @param int $modifierId
     */
    public function setModifierId($modifierId)
    {
        $this->modifierId = $modifierId;
    }

    /**
     * @return int
     */
    public function getNodeId()
    {
        return $this->nodeId;
    }

    /**
     * @param int $nodeId
     */
    public function setNodeId($nodeId)
    {
        $this->nodeId = $nodeId;
    }

    /**
     * @return int
     */
    public function getNumberOfObjects()
    {
        return $this->numberOfObjects;
    }

    /**
     * @param int $numberOfObjects
     */
    public function setNumberOfObjects($numberOfObjects)
    {
        $this->numberOfObjects = $numberOfObjects;
    }

    /**
     * @return string
     */
    public function getRssVersion()
    {
        return $this->rssVersion;
    }

    /**
     * @param string $rssVersion
     */
    public function setRssVersion($rssVersion)
    {
        $this->rssVersion = $rssVersion;
    }

    /**
     * @return string
     */
    public function getSiteAccess()
    {
        return $this->siteAccess;
    }

    /**
     * @param string $siteAccess
     */
    public function setSiteAccess($siteAccess)
    {
        $this->siteAccess = $siteAccess;
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

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
}
