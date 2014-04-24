<?php
namespace AtansGCP\Google\CloudPrint\Ticket\Item;

class FitToPageTicketItem
{
    /**
     * @var int
     */
    public $type;

    /**
     * Get type
     *
     * @return boolean
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set type
     *
     * @param  boolean $type
     * @return FitToPageTicketItem
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}
