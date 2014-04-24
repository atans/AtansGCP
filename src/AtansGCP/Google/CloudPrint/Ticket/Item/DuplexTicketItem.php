<?php
namespace AtansGCP\Google\CloudPrint\Ticket\Item;

class DuplexTicketItem
{
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
     * @return DuplexTicketItem
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}
