<?php
namespace AtansGCP\Google\CloudPrint\Ticket\Section;

use AtansGCP\Google\CloudPrint\Ticket\Item;

class PrintTicketSection
{
    const CONTENT_TYPE_PDF = 'application/pdf';

    /**
     * @var Item\VendorTicketItem[]
     */
    public $vendor_ticket_item;

    /**
     * @var Item\ColorTicketItem
     */
    public $color;

    /**
     * @var Item\DuplexTicketItem
     */
    public $duplex;

    /**
     * @var Item\PageOrientationTicketItem
     */
    public $page_orientation;

    /**
     * @var Item\CopiesTicketItem
     */
    public $copies;

    /**
     * @var Item\MarginsTicketItem
     */
    public $margins;

    /**
     * @var Item\DpiTicketItem
     */
    public $dpi;

    /**
     * @var Item\FitToPageTicketItem
     */
    public $fit_to_page;

    /**
     * @var Item\PageRangeTicketItem
     */
    public $page_range;

    /**
     * @var Item\MediaSizeTicketItem
     */
    public $media_size;

    /**
     * @var Item\CollateTicketItem
     */
    public $collate;

    /**
     * @var Item\ReverseOrderTicketItem
     */
    public $reverse_order;

    /**
     * Get vendor_ticket_item
     *
     * @return array|Item\VendorTicketItem[]
     */
    public function getVendorTicketItem()
    {
        return $this->vendor_ticket_item;
    }

    /**
     * Set vendor_ticket_item
     *
     * @param  array|Item\VendorTicketItem[] $vendor_ticket_item
     * @return PrintTicketSection
     */
    public function setVendorTicketItem(array $vendor_ticket_item)
    {
        $this->vendor_ticket_item = $vendor_ticket_item;
        return $this;
    }

    /**
     * Get color
     *
     * @return Item\ColorTicketItem
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set color
     *
     * @param  Item\ColorTicketItem $color
     * @return PrintTicketSection
     */
    public function setColor(Item\ColorTicketItem $color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * Get duplex
     *
     * @return Item\DuplexTicketItem
     */
    public function getDuplex()
    {
        return $this->duplex;
    }

    /**
     * Set duplex
     *
     * @param  Item\DuplexTicketItem $duplex
     * @return PrintTicketSection
     */
    public function setDuplex(Item\DuplexTicketItem $duplex)
    {
        $this->duplex = $duplex;
        return $this;
    }

    /**
     * Get page_orientation
     *
     * @return Item\PageOrientationTicketItem
     */
    public function getPageOrientation()
    {
        return $this->page_orientation;
    }

    /**
     * Set page_orientation
     *
     * @param  Item\PageOrientationTicketItem $page_orientation
     * @return PrintTicketSection
     */
    public function setPageOrientation(Item\PageOrientationTicketItem $page_orientation)
    {
        $this->page_orientation = $page_orientation;
        return $this;
    }

    /**
     * Get copies
     *
     * @return Item\CopiesTicketItem
     */
    public function getCopies()
    {
        return $this->copies;
    }

    /**
     * Set copies
     *
     * @param  Item\CopiesTicketItem $copies
     * @return PrintTicketSection
     */
    public function setCopies(Item\CopiesTicketItem $copies)
    {
        $this->copies = $copies;
        return $this;
    }

    /**
     * Get margins
     *
     * @return Item\MarginsTicketItem
     */
    public function getMargins()
    {
        return $this->margins;
    }

    /**
     * Set margins
     *
     * @param  Item\MarginsTicketItem $margins
     * @return PrintTicketSection
     */
    public function setMargins(Item\MarginsTicketItem $margins)
    {
        $this->margins = $margins;
        return $this;
    }

    /**
     * Get dpi
     *
     * @return Item\DpiTicketItem
     */
    public function getDpi()
    {
        return $this->dpi;
    }

    /**
     * Set dpi
     *
     * @param  Item\DpiTicketItem $dpi
     * @return PrintTicketSection
     */
    public function setDpi(Item\DpiTicketItem $dpi)
    {
        $this->dpi = $dpi;
        return $this;
    }

    /**
     * Get fit_to_page
     *
     * @return Item\FitToPageTicketItem
     */
    public function getFitToPage()
    {
        return $this->fit_to_page;
    }

    /**
     * Set fit_to_page
     *
     * @param  Item\FitToPageTicketItem $fit_to_page
     * @return PrintTicketSection
     */
    public function setFitToPage(Item\FitToPageTicketItem $fit_to_page)
    {
        $this->fit_to_page = $fit_to_page;
        return $this;
    }

    /**
     * Get page_range
     *
     * @return Item\PageRangeTicketItem
     */
    public function getPageRange()
    {
        return $this->page_range;
    }

    /**
     * Set page_range
     *
     * @param  Item\PageRangeTicketItem $page_range
     * @return PrintTicketSection
     */
    public function setPageRange(Item\PageRangeTicketItem $page_range)
    {
        $this->page_range = $page_range;
        return $this;
    }

    /**
     * Get media_size
     *
     * @return Item\MediaSizeTicketItem
     */
    public function getMediaSize()
    {
        return $this->media_size;
    }

    /**
     * Set media_size
     *
     * @param  Item\MediaSizeTicketItem $media_size
     * @return PrintTicketSection
     */
    public function setMediaSize(Item\MediaSizeTicketItem  $media_size)
    {
        $this->media_size = $media_size;
        return $this;
    }

    /**
     * Get collate
     *
     * @return Item\CollateTicketItem
     */
    public function getCollate()
    {
        return $this->collate;
    }

    /**
     * Set collate
     *
     * @param  Item\CollateTicketItem $collate
     * @return PrintTicketSection
     */
    public function setCollate(Item\CollateTicketItem $collate)
    {
        $this->collate = $collate;
        return $this;
    }

    /**
     * Get reverse_order
     *
     * @return Item\ReverseOrderTicketItem
     */
    public function getReverseOrder()
    {
        return $this->reverse_order;
    }

    /**
     * Set reverse_order
     *
     * @param  Item\ReverseOrderTicketItem $reverse_order
     * @return PrintTicketSection
     */
    public function setReverseOrder(Item\ReverseOrderTicketItem $reverse_order)
    {
        $this->reverse_order = $reverse_order;
        return $this;
    }
}
