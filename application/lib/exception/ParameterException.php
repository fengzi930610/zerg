<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/6
 * Time: 21:59
 * 参数异常类
 */

namespace app\lib\exception;


use Throwable;

class ParameterException extends BaseException
{
    public $code = 400;

    public $msg = '参数错误';

    public $errorCode = 10000;//通用参数错误

    public function __construct($message = null, $code = null, $errorCode = null)
    {
        parent::__construct($message, $code, $errorCode);
    }
}