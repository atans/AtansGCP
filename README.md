AtansGCP
========

Google Cloud Print module for Zend Framework 2

Installation
============

### With composer

1.Add this project in your composer.json:

    "require": {
        "atans/atans-gcp": "dev-master"
    }

2.Now tell composer to download AtansGCP by running the command:

    $ php composer.phar update

### Post installation


1. Enabling it in your `application.config.php` file.

```php
<?php
return array(
    'modules' => array(
        // ...
        'AtansGCP',
    ),
    // ...
);
```

2. Copy `./vendor/atans/atans-gcp/config/attansgcp.global.php.dist` to `./config/autoload/attansgcp.global.php`

3. Edit `./config/autoload/attansgcp.global.php`
```
    'gcp_email'       => 'your.email@gmail.com',
    'gcp_password'    => 'your.email.password',
```

Use it
======

### Get printers

```php
class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $cloudPrint = $this->getServiceLocator()->get('AtansGCP\Google\CloudPrint\CloudPrint');
        $printers = $cloudPrintService->getPrinters();

        var_dump($printers);
    }

    //...
```


### Submit job

```php
class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $file = 'example.pdf';
        $handle = fopen($file, 'r');
        $content = fread($handle, filesize($file));
        fclose($handle);

        $cloudPrintService = $this->getServiceLocator()->get('AtansGCP\Google\CloudPrint\CloudPrint');

        // Your printer id
        $printerId = 'fb3a765e-50ad-94b0-6101-example';

        // Set page size as A4
        $mediaSizeTicket = new \AtansGCP\Google\CloudPrint\Ticket\Item\MediaSizeTicketItem();
        $mediaSizeTicket->setVendorId('psk:ISOA4')
                        ->setWidthMicrons(210000)
                        ->setHeightMicrons(297000);

        $printTicket = new \AtansGCP\Google\CloudPrint\Ticket\Section\PrintTicketSection();
        $printTicket->setMediaSize($mediaSizeTicket);

        $ticket = new \AtansGCP\Google\CloudPrint\Model\Ticket();
        $ticket->setPrint($printTicket);

        $submit = new \AtansGCP\Google\CloudPrint\Model\Submit();
        $submit->setTitle('Example')
               ->setContent($content)
               ->setTicket($ticket)
               ->setPrinterId($printerId)
               ->setContentType('application/pdf');

       /**
        * @var \AtansGCP\Google\CloudPrint\Response\SubmitResponse $response
        */
       $response = $this->getCloudPrintService()->submit($submit);

       var_dump($response->getSuccess());
       var_dump($response->getJob());
    }

    //...
```