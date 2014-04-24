<?php
namespace AtansGCP\Google\CloudPrint\Ticket\Item;

class PageRangeTicketItem
{
    /**
     * @var int
     */
    public $interval = 1;

    /**
     * Get interval
     *
     * @return int
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * Set interval
     *
     * @param  int $interval
     * @return PageRangeTicketItem
     */
    public function setInterval($interval)
    {
        $this->interval = $interval;
        return $this;
    }
}
