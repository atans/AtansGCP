<?php
namespace AtansGCP\Google\CloudPrint\Ticket\Item;

class DpiTicketItem
{
    /**
     * @var int
     */
    public $horizontal_dpi;

    /**
     * @var int
     */
    public $vertical_dpi;

    /**
     * string
     */
    public $vendor_id;

    /**
     * Get horizontal_dpi
     *
     * @return int
     */
    public function getHorizontalDpi()
    {
        return $this->horizontal_dpi;
    }

    /**
     * Set horizontal_dpi
     *
     * @param  int $horizontal_dpi
     * @return DpiTicketItem
     */
    public function setHorizontalDpi($horizontal_dpi)
    {
        $this->horizontal_dpi = $horizontal_dpi;
        return $this;
    }

    /**
     * Get vertical_dpi
     *
     * @return int
     */
    public function getVerticalDpi()
    {
        return $this->vertical_dpi;
    }

    /**
     * Set vertical_dpi
     *
     * @param  int $vertical_dpi
     * @return DpiTicketItem
     */
    public function setVerticalDpi($vertical_dpi)
    {
        $this->vertical_dpi = $vertical_dpi;
        return $this;
    }

    /**
     * Get vendor_id
     *
     * @return mixed
     */
    public function getVendorId()
    {
        return $this->vendor_id;
    }

    /**
     * Set vendor_id
     *
     * @param  mixed $vendor_id
     * @return DpiTicketItem
     */
    public function setVendorId($vendor_id)
    {
        $this->vendor_id = $vendor_id;
        return $this;
    }
}
