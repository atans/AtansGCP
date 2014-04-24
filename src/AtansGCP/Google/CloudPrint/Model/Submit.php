<?php
namespace AtansGCP\Google\CloudPrint\Model;

class Submit
{
    /**
     * @var string
     */
    protected $printerId;

    /**
     * @var array
     */
    public $capabilities = array();

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $content;

    /**
     * @var string
     */
    protected $contentType;

    /**
     * @var Ticket
     */
    protected $ticket;

    /**
     * @var array
     */
    protected $tag;

    /**
     * Get printerId
     *
     * @return string
     */
    public function getPrinterId()
    {
        return $this->printerId;
    }

    /**
     * Set printerId
     *
     * @param  string $printerId
     * @return Submit
     */
    public function setPrinterId($printerId)
    {
        $this->printerId = $printerId;
        return $this;
    }

    /**
     * Get capabilities
     *
     * @return array
     */
    public function getCapabilities()
    {
        return $this->capabilities;
    }

    /**
     * Set capabilities
     *
     * @param  array $capabilities
     * @return Submit
     */
    public function setCapabilities($capabilities)
    {
        $this->capabilities = $capabilities;
        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set title
     *
     * @param  string $title
     * @return Submit
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set content
     *
     * @param  string $content
     * @return Submit
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Get contentType
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Set contentType
     *
     * @param  string $contentType
     * @return Submit
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * Get ticket
     *
     * @return Ticket
     */
    public function getTicket()
    {
        if (! $this->ticket instanceof Ticket) {
            $this->setTicket(new Ticket());
        }
        return $this->ticket;
    }

    /**
     * Set ticket
     *
     * @param  Ticket $ticket
     * @return Submit
     */
    public function setTicket(Ticket $ticket)
    {
        $this->ticket = $ticket;
        return $this;
    }

    /**
     * Get tag
     *
     * @return array
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set tag
     *
     * @param  array $tag
     * @return Submit
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
        return $this;
    }
}
