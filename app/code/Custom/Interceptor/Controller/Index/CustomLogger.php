<?php

namespace Custom\Interceptor\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use Custom\Interceptor\Logger\Logger;

class CustomLogger extends Action
{
    /**
     * @var JsonFactory
     */
    protected $resultJsonFactory;

    /**
     * @var Logger
     */
    protected $logger;

    public function __construct
    (
        Context $context,
        JsonFactory $resultJsonFactory,
        Logger $logger
    )
    {
        $this->resultJsonFactory = $resultJsonFactory;
        $this->logger = $logger;
        parent::__construct($context);
    }
    
    public function execute()
    {
        $this->logger->info('Log Info');
        $resultJson = $this->resultJsonFactory->create();
        $data = ['message' => 'Prezzo dei prodotti a catalogo raddoppiato'];
        return $resultJson->setData($data);
    }
}