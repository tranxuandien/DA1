<?php

namespace UserBundle\Entity;

/**
 * ShopLink
 */
class ShopLink
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $linkShop;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $image;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set linkShop
     *
     * @param string $linkShop
     *
     * @return ShopLink
     */
    public function setLinkShop($linkShop)
    {
        $this->linkShop = $linkShop;

        return $this;
    }

    /**
     * Get linkShop
     *
     * @return string
     */
    public function getLinkShop()
    {
        return $this->linkShop;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return ShopLink
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }
}

