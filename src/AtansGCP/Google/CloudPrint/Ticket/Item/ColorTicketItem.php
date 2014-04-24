<?php
namespace AtansGCP\Google\CloudPrint\Ticket\Item;

class ColorTicketItem
{
    /**
     * @var string
     */
    public $vendor_id = 1;

    /**
     * @var int
     */
    public $type = 2;

    /**
     * Get vendor_id
     *
     * @return string
     */
    public function getVendorId()
    {
        return $this->vendor_id;
    }

    /**
     * Set vendor_id
     *
     * @param  string $vendor_id
     * @return ColorTicketItem
     */
    public function setVendorId($vendor_id)
    {
        $this->vendor_id = $vendor_id;
        return $this;
    }

    /**
     * Get type
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set type
     *
     * @param  int $type
     * @return ColorTicketItem
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}
