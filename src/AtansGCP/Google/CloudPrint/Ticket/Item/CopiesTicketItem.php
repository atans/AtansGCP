<?php
namespace AtansGCP\Google\CloudPrint\Ticket\Item;

class CopiesTicketItem
{
    /**
     * @var int
     */
    public $copies = 1;

    /**
     * Get copies
     *
     * @return int
     */
    public function getCopies()
    {
        return $this->copies;
    }

    /**
     * Set copies
     *
     * @param  int $copies
     * @return CopiesTicketItem
     */
    public function setCopies($copies)
    {
        $this->copies = $copies;
        return $this;
    }
}
