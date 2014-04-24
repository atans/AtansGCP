<?php
namespace AtansGCP\Google\CloudPrint\Response;

class SubmitResponse extends AbstractResponse
{
    /**
     * @var array
     */
    protected $job;

    /**
     * @var int
     */
    protected $errorCode;

    /**
     * Get job
     *
     * @return array
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set job
     *
     * @param  array $job
     * @return SubmitResponse
     */
    public function setJob($job)
    {
        $this->job = $job;
        return $this;
    }

    /**
     * Get errorCode
     *
     * @return int
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Set errorCode
     *
     * @param  int $errorCode
     * @return SubmitResponse
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
        return $this;
    }
}
