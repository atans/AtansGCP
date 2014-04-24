<?php
namespace AtansGCP\Google\CloudPrint\Response;

interface ResponseInterface
{
    /**
     * Get success
     *
     * @return boolean
     */
    public function getSuccess();

    /**
     * Set success
     *
     * @param  boolean $success
     * @return AbstractResponse
     */
    public function setSuccess($success);

    /**
     * Set request
     *
     * @param  array $request
     * @return AbstractResponse
     */
    public function setRequest($request);

    /**
     * Get request
     *
     * @return array
     */
    public function getRequest();

    /**
     * Get xsrfToken
     *
     * @return string
     */
    public function getXsrfToken();

    /**
     * Set xsrfToken
     *
     * @param  string $xsrfToken
     * @return AbstractResponse
     */
    public function setXsrfToken($xsrfToken);
}