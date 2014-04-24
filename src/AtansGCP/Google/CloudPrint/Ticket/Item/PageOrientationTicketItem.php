<?php
namespace AtansGCP\Google\CloudPrint\Ticket\Item;

class PageOrientationTicketItem
{
    const TYPE_PORTRAIT  = 0;
    const TYPE_LANDSCAPE = 1;
    /**
     * @var int
     */
    public $type;

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
     * @return PageOrientationTicketItem
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}
