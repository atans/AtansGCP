<?php
namespace AtansGCP\Google\CloudPrint\Ticket\Item;

class VendorTicketItem
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $value;

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id
     *
     * @param  string $id
     * @return VendorTicketItem
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set value
     *
     * @param  string $value
     * @return VendorTicketItem
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}
