<?php
/**
 * Created by PhpStorm.
 * User: linguanghui
 * Date: 5/16/18
 * Time: 1:29 PM
 * @desc  获取日志的实例
 */
namespace Lib;

use Monolog\Logger as Monolog;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\RotatingFileHandler;

class Log
{
    private $log = null;

    public function __construct()
    {
        $this->log = new Monolog('Log');

        $infoStreamHandler = new StreamHandler(sprintf(STORAGE_PATH."/logs/log_info-%s.log",date('Y-m-d',time())), Monolog::INFO);
        $errorStreamHandler = new StreamHandler(sprintf(STORAGE_PATH."/logs/log_error-%s.log",date('Y-m-d',time())), Monolog::ERROR);

        $this->log->pushHandler($infoStreamHandler);
        $this->log->pushHandler($errorStreamHandler);
    }

    /**
     * @desc 记录成功的日志信息
     * @param $message
     * @param array $context
     * @return bool
     */
    public function info($message, array $context = [])
    {
        return $this->log->info($message, $context);
    }

    /**
     * @desc  记录错误的日志信息
     * @param $message
     * @param array $context
     * @return bool
     */
    public function error($message, array $context= [])
    {
        return $this->log->error($message, $context);
    }
}