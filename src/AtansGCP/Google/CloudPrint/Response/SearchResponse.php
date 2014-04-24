<?php
namespace AtansGCP\Google\CloudPrint\Response;

class SearchResponse extends AbstractResponse
{
    /**
     * @var array
     */
    protected $printers;

    /**
     * Get printers
     *
     * @return array
     */
    public function getPrinters()
    {
        return $this->printers;
    }

    /**
     * Set printers
     *
     * @param  array $printers
     * @return SearchResponse
     */
    public function setPrinters(array $printers)
    {
        $this->printers = $printers;
        return $this;
    }
}
