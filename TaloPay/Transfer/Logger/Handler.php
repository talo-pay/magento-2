<?php
namespace TaloPay\Transfer\Logger;

use Monolog\Logger;

class Handler extends \Magento\Framework\Logger\Handler\Base
{
    /**
     * Logging level
     *
     * @var int
     */
    protected $loggerType = Logger::INFO;

    /**
     * Log file name
     *
     * @var string
     */
    protected $fileName = '/var/log/talopay.log';
}
