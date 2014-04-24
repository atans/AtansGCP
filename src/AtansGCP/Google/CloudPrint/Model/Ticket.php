<?php
namespace AtansGCP\Google\CloudPrint\Model;

use AtansGCP\Google\CloudPrint\Ticket\Section\PrintTicketSection;
use AtansGCP\Google\CloudPrint\Util\AbstractToJson;

class Ticket extends AbstractToJson
{
    /**
     * @var string
     */
    public $version = '1.0';


    /**
     * @var PrintTicketSection
     */
    public $print;

    /**
     * Get version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set version
     *
     * @param  string $version
     * @return Ticket
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Get print
     *
     * @return PrintTicketSection
     */
    public function getPrint()
    {
        return $this->print;
    }

    /**
     * Set print
     *
     * @param  PrintTicketSection $print
     * @return Ticket
     */
    public function setPrint(PrintTicketSection $print)
    {
        $this->print = $print;
        return $this;
    }
}
