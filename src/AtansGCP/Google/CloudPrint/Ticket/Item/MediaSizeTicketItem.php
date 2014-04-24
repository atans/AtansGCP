<?php
namespace AtansGCP\Google\CloudPrint\Ticket\Item;

class MediaSizeTicketItem
{
    /**
     * @var int
     */
    public $width_microns = 1;

    /**
     * @var int
     */
    public $height_microns = 2;

    /**
     * @var boolean
     */
    public $is_continuous_feed = false;

    /**
     * @var int
     */
    public $vendor_id;

    /**
     * Get width_microns
     *
     * @return int
     */
    public function getWidthMicrons()
    {
        return $this->width_microns;
    }

    /**
     * Set width_microns
     *
     * @param  int $width_microns
     * @return MediaSizeTicketItem
     */
    public function setWidthMicrons($width_microns)
    {
        $this->width_microns = $width_microns;
        return $this;
    }

    /**
     * Get height_microns
     *
     * @return int
     */
    public function getHeightMicrons()
    {
        return $this->height_microns;
    }

    /**
     * Set height_microns
     *
     * @param  int $height_microns
     * @return MediaSizeTicketItem
     */
    public function setHeightMicrons($height_microns)
    {
        $this->height_microns = $height_microns;
        return $this;
    }

    /**
     * Get is_continuous_feed
     *
     * @return boolean
     */
    public function getIsContinuousFeed()
    {
        return $this->is_continuous_feed;
    }

    /**
     * Set is_continuous_feed
     *
     * @param  boolean $is_continuous_feed
     * @return MediaSizeTicketItem
     */
    public function setIsContinuousFeed($is_continuous_feed)
    {
        $this->is_continuous_feed = $is_continuous_feed;
        return $this;
    }

    /**
     * Get vendor_id
     *
     * @return int
     */
    public function getVendorId()
    {
        return $this->vendor_id;
    }

    /**
     * Set vendor_id
     *
     * @param  int $vendor_id
     * @return MediaSizeTicketItem
     */
    public function setVendorId($vendor_id)
    {
        $this->vendor_id = $vendor_id;
        return $this;
    }
}