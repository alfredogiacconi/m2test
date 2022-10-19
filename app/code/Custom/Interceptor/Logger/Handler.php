<?php

namespace Custom\Interceptor\Logger;

use Magento\Framework\Logger\Handler\Base as BaseHandler;
use Monolog\Logger as MonologLogger;

class Handler extends BaseHandler
{
    /**
     * Logging level
     * @var int
     */
    protected $loggerType = MonologLogger::NOTICE;

    /**
     * File name
     * @var string
     */
    protected $fileName = '/var/log/custom.log';
}