<?php
namespace AtansGCP\Google\CloudPrint\Ticket\Item;

class CollateTicketItem
{
    /**
     * @var boolean
     */
    public $collate = 1;

    /**
     * Get collate
     *
     * @return boolean
     */
    public function getCollate()
    {
        return $this->collate;
    }

    /**
     * Set collate
     *
     * @param  boolean $collate
     * @return CollateTicketItem
     */
    public function setCollate($collate)
    {
        $this->collate = $collate;
        return $this;
    }
}