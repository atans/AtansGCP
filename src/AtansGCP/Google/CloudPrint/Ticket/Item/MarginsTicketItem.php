<?php
namespace AtansGCP\Google\CloudPrint\Ticket\Item;

class MarginsTicketItem
{
    /**
     * @var int
     */
    public $top_microns;

    /**
     * @var int
     */
     public $right_microns;

    /**
     * @var int
     */
     public $bottom_microns ;

    /**
     * @var int
     */
     public $left_microns;

    /**
     * Get top_microns
     *
     * @return int
     */
    public function getTopMicrons()
    {
        return $this->top_microns;
    }

    /**
     * Set top_microns
     *
     * @param  int $top_microns
     * @return MarginsTicketItem
     */
    public function setTopMicrons($top_microns)
    {
        $this->top_microns = $top_microns;
        return $this;
    }

    /**
     * Get right_microns
     *
     * @return int
     */
    public function getRightMicrons()
    {
        return $this->right_microns;
    }

    /**
     * Set right_microns
     *
     * @param  int $right_microns
     * @return MarginsTicketItem
     */
    public function setRightMicrons($right_microns)
    {
        $this->right_microns = $right_microns;
        return $this;
    }

    /**
     * Get bottom_microns
     *
     * @return int
     */
    public function getBottomMicrons()
    {
        return $this->bottom_microns;
    }

    /**
     * Set bottom_microns
     *
     * @param  int $bottom_microns
     * @return MarginsTicketItem
     */
    public function setBottomMicrons($bottom_microns)
    {
        $this->bottom_microns = $bottom_microns;
        return $this;
    }

    /**
     * Get left_microns
     *
     * @return int
     */
    public function getLeftMicrons()
    {
        return $this->left_microns;
    }

    /**
     * Set left_microns
     *
     * @param  int $left_microns
     * @return MarginsTicketItem
     */
    public function setLeftMicrons($left_microns)
    {
        $this->left_microns = $left_microns;
        return $this;
    }
}
