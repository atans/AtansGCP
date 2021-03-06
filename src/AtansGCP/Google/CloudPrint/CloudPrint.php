<?php
namespace AtansGCP\Google\CloudPrint;

use AtansGCP\Exception;
use AtansGCP\Google\CloudPrint\Model\Submit;
use AtansGCP\Google\CloudPrint\Response;
use Google_Client;
use Zend\Http\Client;
use Zend\Http\Request;
use Zend\Json\Json;
use Zend\Stdlib\Hydrator\ClassMethods;

class CloudPrint
{
    const SERVICE_NAME    = 'cloudprint';
    const CLOUDPRINT_URL  = 'https://www.google.com/cloudprint/';

    /**
     * @var Google_Client
     */
    protected $client;

    /**
     * @var string
     */
    protected $clientName;

    /**
     * @var bool
     */
    protected $initialized = false;

    /**
     * @var string
     */
    protected $authTokens;

    /**
     * Initialization
     *
     * @param Google_Client $client
     * @param string|null $clientName
     * @return CloudPrint
     * @throws Exception\InvalidArgumentException
     */
    public function __construct(Google_Client $client, $clientName = 'AtansGCP_Client')
    {
        $this->client = $client;
        $this->clientName  = $clientName;
        $this->initialized = true;

        return $this;
    }

    /**
     * Submit a job
     *
     * @param Submit $submit
     * @return array
     */
    public function submit(Submit $submit)
    {
        $data = array(
            'printerid'               => $submit->getPrinterId(),
            'capabilities'            => Json::encode($submit->getCapabilities()),
            'content'                 => base64_encode($submit->getContent()),
            'contentType'             => $submit->getContentType(),
            'title'                   => $submit->getTitle(),
            'ticket'                  => $submit->getTicket()->toJson(),
            'contentTransferEncoding' => 'base64',
        );

        if ($tag = $submit->getTag()) {
            $data['tag'] = $tag;
        }

        $response = $this->sendApiRequest(
            'submit',
            Request::METHOD_POST,
            new Response\SubmitResponse(),
            $data
        );

        return $response;
    }

    public function sendPdfStringToPrinter($printerId, $pdfString, $title, $ticket = null)
    {
        $data = array(
            'printerid'               => $printerId,
            'title'                   => $title,
            'contentTransferEncoding' => 'base64',
            'content'                 => $pdfString,
            'contentType'             => 'application/pdf',
        );
        if ($ticket) {
            $data['ticket'] = $ticket;
        }

        $response = $this->sendApiRequest('submit', Request::METHOD_POST, $data);

        return $response;
    }

    public function submitJob($printerId, $jobType, $jobSrc)
    {
        if ($jobType == 'pdf') {
            $b64file = base64_encode($jobSrc);
            $handle = fopen($jobSrc, 'r');
            $fileData = fread($handle, filesize($jobSrc));
            fclose($handle);
        } elseif (in_array($jobType, array('png', 'jpeg'))) {
            $handle = fopen($jobSrc, 'r');
            $fileData = fread($handle, filesize($jobSrc));
            fclose($handle);
        } else {
            $fileData = null;
        }

        $title = sprintf('%s%s', date('bdHM'), $jobSrc);

        $content = array(
            'pdf' => $fileData,
            'jpeg' => $jobSrc,
            'png' => $jobSrc,
        );

        $contentType =  array(
            'pdf' => 'dataUrl',
            'jpeg' => 'image/jpeg',
            'png' => 'image/png',
        );

        //$this->sendApiRequest('submit', Request::METHOD_POST, $data);
    }

    public function fetchJobs($printerid)
    {
        return $this->sendApiRequest('fetch', Request::METHOD_GET,  null, array('printerid' => $printerid));

    }

    public function fetchJob($jobId)
    {
        return $this->sendApiRequest('fetch', Request::METHOD_GET,  null, array(
            'jobid' => $jobId,
            'use_cjt' => true,
        ));

    }

    public function ticket($jobId)
    {
        return $this->sendApiRequest('ticket', Request::METHOD_GET,  null, array(
            'jobid' => $jobId,
            'use_cjt' => true,
        ));
    }

    public function getPrinter($printerId)
    {
        return $this->sendApiRequest('printer', Request::METHOD_GET,  new Response\PrinterResponse(), array('printerid' => $printerId));
    }

    /**
     * Get printers
     *
     * @param string|null $proxy
     * @param array|null $data
     * @return mixed
     */
    public function getPrinters($proxy = null, $data = null)
    {
        if ($proxy) {
            $query = array('proxy' => $proxy);
            if ($data) {
                $query = array_merge($query, $data);
            }
            return $this->sendApiRequest('list', Request::METHOD_GET, new Response\ListResponse(), $query);
        }

        return $this->sendApiRequest('search', Request::METHOD_GET, new Response\SearchResponse(), $data);
    }

    /**
     * Query a printer
     *
     * @param string $printer
     * @param string $proxy
     * @return array|null
     */
    public function query($printer, $proxy = null)
    {
        if ($proxy) {
            $response = $this->getPrinters($proxy);
            foreach ($response->getPrinters() as $p) {
                if ($p['name'] == $printer) {
                    return $p;
                }
            }
        } else {
            $response = $this->getPrinters(null, array('q' => $printer));
            foreach ($response->getPrinters() as $p) {
                if ($p['name'] = $printer) {
                    return $p;
                }
            }
        }

        return null;
    }

    /**
     * Set api request
     *
     * @param string$resource
     * @param string $method
     * @param Response\ResponseInterface $response
     * @param array|null $data
     * @return mixed|null
     * @throws \AtansGCP\Exception\DomainException
     * @throws \Zend\Http\Exception\RuntimeException
     * @throws \Zend\Http\Client\Exception\InvalidArgumentException
     * @throws \Zend\Http\Client\Exception\RuntimeException
     * @throws \Zend\Json\Exception\RuntimeException
     * @throws \AtansGCP\Exception\RuntimeException
     * @throws \Zend\Http\Exception\InvalidArgumentException
     */
    public function sendApiRequest($resource, $method = Request::METHOD_POST, Response\ResponseInterface $response = null, $data = null)
    {
        //$tokens = $this->getAuthTokens();

        $accessToken = json_decode($this->client->getAccessToken(), true);

        $request = new Request();
        $request->getHeaders()
                ->addHeaderLine('Authorization', 'Bearer ' . $accessToken['access_token']);
        $request->setUri(static::CLOUDPRINT_URL . $resource)
                ->setMethod($method);

        $client = new Client();
        $client->setOptions(array(
            'sslcafile' => __DIR__ . '/../../../../data/cacert.pem',
        ));

        if ($data) {
            if ($method == Request::METHOD_POST) {
                $client->setEncType('multipart/form-data');
                $request->getPost()->fromArray($data);
            } else {
                $request->getQuery()->fromArray($data);
            }
        }

        $client->setAdapter(new Client\Adapter\Socket());
        $body = $client->send($request)->getBody();

        $data = Json::decode($body, Json::TYPE_ARRAY);

        if ($response instanceof Response\ResponseInterface) {
            $hydrator = new ClassMethods();
            return $hydrator->hydrate($data, $response);
        }

        return $data;
    }
}