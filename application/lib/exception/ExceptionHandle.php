<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/5
 * Time: 19:49
 */

namespace app\lib\exception;

use think\exception\Handle;
use think\Log;
use think\Request;

class ExceptionHandle extends Handle
{
    private $code;

    private $msg;

    private $errorCode;

    //需要返回当前请求的URL路径

    //重写父类方法
    public function render(\Exception $e)
    {
        if( $e instanceof BaseException){
            //如果是自定义的异常
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorCode = $e->errorCode;
        }else{
            if(config('app_debug'))
                return parent::render($e);
            $this->code = 500;
            $this->msg = $e->getMessage();//服务器内部代码出错
            $this->errorCode = 999;
            $this->recordErrorLog($e);
        }
        $request = Request::instance();

        $result = [
            'msg' =>$this->msg,
            'error_code' =>$this->errorCode,
            'request_url' => $request->url()
        ];
        return json($result, $this->code);
    }

    //自定义日志
    private function recordErrorLog( \Exception $e){
        //初始化日志
        Log::init([
            'type' => 'File',
            'path' => LOG_PATH,
            'level' => ['error']
        ]);
        Log::record($e->getMessage(), 'error');
    }
}