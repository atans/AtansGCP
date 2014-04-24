<?php
namespace AtansGCP\Google\CloudPrint\Response;

Abstract class AbstractResponse implements ResponseInterface
{
    /**
     * @var boolean
     */
    protected $success;

    /**
     * @var string
     */
    protected $message;

    /**
     * @var array
     */
    protected $request;

    /**
     * @var string
     */
    protected $xsrfToken;

    /**
     * Get success
     *
     * @return boolean
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Set success
     *
     * @param  boolean $success
     * @return AbstractResponse
     */
    public function setSuccess($success)
    {
        $this->success = (bool) $success;
        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set message
     *
     * @param  string $message
     * @return AbstractResponse
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * Get request
     *
     * @return array
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Set request
     *
     * @param  array $request
     * @return AbstractResponse
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Get xsrfToken
     *
     * @return string
     */
    public function getXsrfToken()
    {
        return $this->xsrfToken;
    }

    /**
     * Set xsrfToken
     *
     * @param  string $xsrfToken
     * @return AbstractResponse
     */
    public function setXsrfToken($xsrfToken)
    {
        $this->xsrfToken = $xsrfToken;
        return $this;
    }
}
