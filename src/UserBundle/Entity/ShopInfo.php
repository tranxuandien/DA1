<?php

namespace UserBundle\Entity;

/**
 * ShopInfo
 */
class ShopInfo
{
    /**
     * @var int
     */
    private $id;

    private $shopLinkId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $about;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $phone;

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
     * Set shopLinkId
     *
     * @param integer $shopLinkId
     *
     * @return ShopInfo
     */
    public function setShopLinkId($shopLinkId)
    {
        $this->shopLinkId = $shopLinkId;

        return $this;
    }

    /**
     * Get shopLinkId
     *
     * @return int
     */
    public function getShopLinkId()
    {
        return $this->shopLinkId;
    }

    /**
     * Set about
     *
     * @param string $about
     *
     * @return ShopInfo
     */
    public function setAbout($about)
    {
        $this->about = $about;

        return $this;
    }

    /**
     * Get about
     *
     * @return string
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return ShopInfo
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return ShopInfo
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
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

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}

