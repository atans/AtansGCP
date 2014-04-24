<?php
namespace AtansGCP\Google\CloudPrint\Ticket\Item;


class ReverseOrderTicketItem
{
    /**
     * @var int
     */
    public $reverse_order = 1;

    /**
     * Get reverse_order
     *
     * @return int
     */
    public function getReverseOrder()
    {
        return $this->reverse_order;
    }

    /**
     * Set reverse_order
     *
     * @param  int $reverse_order
     * @return ReverseOrderTicketItem
     */
    public function setReverseOrder($reverse_order)
    {
        $this->reverse_order = $reverse_order;
        return $this;
    }
}