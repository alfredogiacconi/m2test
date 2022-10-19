<?php

namespace Custom\Interceptor\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\View\Result\PageFactory;
use Custom\Interceptor\Logger\Logger;

class Index extends Action
{
    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

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
        PageFactory $resultPageFactory,
        JsonFactory $resultJsonFactory,
        Logger $logger
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->resultJsonFactory = $resultJsonFactory;
        $this->logger = $logger;
        parent::__construct($context);
    }
    
    public function execute()
    {
        $this->logger->error('Log Error');
        $this->logger->emergency('Log Emergency');
        $this->logger->info('Log Info');
        $this->logger->debug('Log Debug');
        $resultJson = $this->resultJsonFactory->create();
        $data = ['message' => 'Prezzo dei prodotti a catalogo raddoppiato'];
        return $resultJson->setData($data);
    }
}